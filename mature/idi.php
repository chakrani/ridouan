<?php
error_reporting(E_ALL ^E_NOTICE);
class Midi{


var $tracks;          
var $timebase;       
var $tempo;           
var $tempoMsgNum;    
var $type;            
var $throwFlag;       


function Midi(){
	$this->throwFlag = ((int)phpversion()>=5);
}

function open($timebase=480){
	$this->tempo = 0;
	$this->timebase = $timebase;
	$this->tracks = array();
}

function setTempo($tempo){
	$tempo = round($tempo);
	if (isset($this->tempoMsgNum)) $this->tracks[0][$this->tempoMsgNum] = "0 Tempo $tempo";
	else{
		$tempoTrack = array('0 TimeSig 4/4 24 8',"0 Tempo $tempo",'0 Meta TrkEnd');
		array_unshift($this->tracks, $tempoTrack);
		$this->tempoMsgNum = 1;
	}
	$this->tempo = $tempo;
}

function getTempo(){
	return $this->tempo;
}

function setBpm($bpm){
	$tempo = round(60000000/$bpm);
	$this->setTempo($tempo);
}

function getBpm(){
	return ($this->tempo!=0)?(int)(60000000/$this->tempo):0;
}

function setTimebase($tb){
	$this->timebase = $tb;
}

function getTimebase(){
	return $this->timebase;
}
function newTrack(){
	array_push($this->tracks,array());
	return count($this->tracks);
}

function getTrack($tn){
	return $this->tracks[$tn];
}

function getMsgCount($tn){
	return count($this->tracks[$tn]);
}

function addMsg($tn, $msgStr, $ttype=0){ 
	$track = $this->tracks[$tn];

	if ($ttype==1){
		$last = $this->_getTime($track[count($track)-1]);
		$msg = explode(' ',$msgStr);
		$dt = (int) $msg[0];
		$msg[0] = $last + $dt;
		$msgStr = implode(' ',$msg);
	}

	$track[] = $msgStr;
	$this->tracks[$tn] = $track;
}

function insertMsg($tn,$msgStr){
	$time = $this->_getTime($msgStr);
	$track = $this->tracks[$tn];
	$mc = count($track);
	for ($i=0;$i<$mc;$i++){
		$t = $this->_getTime($track[$i]);
		if ($t>=$time) break;
	}
	array_splice($this->tracks[$tn], $i, 0, $msgStr);
}

function getMsg($tn,$mn){
	return $this->tracks[$tn][$mn];
}

function deleteMsg($tn,$mn){
	array_splice($this->tracks[$tn], $mn, 1);
}

function deleteTrack($tn){
	array_splice($this->tracks, $tn, 1);
	return count($this->tracks);
}

function getTrackCount(){
	return count($this->tracks);
}

function soloTrack($tn){
	if ($tn==0) $this->tracks = array($this->tracks[0]);
	else $this->tracks = array($this->tracks[0],$this->tracks[$tn]);
}

function transpose($dn){
	$tc = count($this->tracks);
	for ($i=0;$i<$tc;$i++) $this->transposeTrack($i,$dn);
}

function transposeTrack($tn, $dn){
	$track = $this->tracks[$tn];
  $mc = count($track);
  for ($i=0;$i<$mc;$i++){
	$msg = explode(' ',$track[$i]);
		if ($msg[1] == 'On' || $msg[1] == 'Off'){
			eval("\$".$msg[3].';'); 
			$n = max(0,min(127,$n+$dn));
			$msg[3] = "n=$n";
			$track[$i] = join(' ',$msg);
		}
	}
	$this->tracks[$tn] = $track;
}

function importTxt($txt){
	$txt = trim($txt);
	
	if (strpos($txt,"\r")!==false && strpos($txt,"\n")===false) 
		$txt = str_replace("\r","\n",$txt);
	else 
		$txt = str_replace("\r",'',$txt);
	$txt = $txt."\n";

	$headerStr = strtok($txt,"\n");
	$header = explode(' ',$headerStr); 
	$this->type = $header[1];
	$this->timebase = $header[3];
	$this->tempo = 0;

	$trackStrings = explode("MTrk\n",$txt);
	array_shift($trackStrings);
	$tracks = array();
	foreach ($trackStrings as $trackStr){
		$track = explode("\n",$trackStr);
		array_pop($track);
		array_pop($track);

		if ($track[0]=="TimestampType=Delta"){			array_shift($track);
			$track = $this->_delta2Absolute($track);
		}

		$tracks[] = $track;
	}
	$this->tracks = $tracks;
	$this->_findTempo();
}

function importTrackTxt($txt, $tn){
	$txt = trim($txt);
	if (strpos($txt,"\r")!==false && strpos($txt,"\n")===false) 
		$txt = str_replace("\r","\n",$txt);
	else 
		$txt = str_replace("\r",'',$txt);

	$track = explode("\n",$txt);

	if ($track[0]=='MTrk') array_shift($track);
	if ($track[count($track)-1]=='TrkEnd') array_pop($track);

	if ($track[0]=="TimestampType=Delta"){
		array_shift($track);
		$track = $this->_delta2Absolute($track);
	}

	$tn = isset($tn)?$tn:count($this.tracks);
	$this->tracks[$tn] = $track;
	if ($tn==0) $this->_findTempo();
}

function getTxt($ttype=0){ 
	$timebase = $this->timebase;
	$tracks = $this->tracks;
	$tc = count($tracks);
	$type = ($tc>1)?1:0;
	$str =  "MFile $type $tc $timebase\n";
	for ($i=0;$i<$tc;$i++) $str .= $this->getTrackTxt($i,$ttype);
	return $str;
}

function getTrackTxt($tn,$ttype=0){ 
	$track = $this->tracks[$tn];
	$str = "MTrk\n";
	if ($ttype==1) {
		$str .= "TimestampType=Delta\n";
		$last = 0;
		foreach ($track as $msgStr){
			$msg = explode (' ', $msgStr);
			$t = (int) $msg[0];
			$msg[0] = $t - $last;
			$str .= implode(' ',$msg)."\n";
			$last = $t;
		}
	}else foreach ($track as $msg) $str .= $msg."\n";
	$str .= "TrkEnd\n";
	return $str;
}

function getXml($ttype=0){ 
	$tracks = $this->tracks;
	$tc = count($tracks);
	$type = ($tc>1)?1:0;
	$timebase = $this->timebase;

	$xml = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
<!DOCTYPE MIDIFile PUBLIC
  \"-//Recordare//DTD SourceBLASTER 9.9 MIDI//IT\"
  \"defbox://sourceblaster.xml/dtds/earml.dtd\">
<MIDIFile>
<Format>$type</Format>
<TrackCount>$tc</TrackCount>
<TicksPerBeat>$timebase</TicksPerBeat>
<TimestampType>".($ttype==1?'Delta':'Absolute')."</TimestampType>\n";

  for ($i=0;$i<$tc;$i++){
	$xml .= "<Track Number=\"$i\">\n";
	$track = $tracks[$i];
	$mc = count($track);
	$last = 0;
	for ($j=0;$j<$mc;$j++){
		$msg = explode(' ',$track[$j]);
		$t = (int) $msg[0];
		if ($ttype==1){
			$dt = $t - $last;
			$last = $t;
		}
		$xml .= "  <Event>\n";
		$xml .= ($ttype==1)?"    <Delta>$dt</Delta>\n":"    <Absolute>$t</Absolute>\n";
		$xml .= '    ';

			switch($msg[1]){
				case 'PrCh':
					eval("\$".$msg[2].';');
					eval("\$".$msg[3].';'); 
				$xml .= "<ProgramChange Channel=\"$ch\" Number=\"$p\"/>\n";
					break;

				case 'On':
				case 'Off':
					eval("\$".$msg[2].';'); 
					eval("\$".$msg[3].';'); 
					eval("\$".$msg[4].';'); 
				$xml .= "<Note{$msg[1]} Channel=\"$ch\" Note=\"$n\" Velocity=\"$v\"/>\n";
					break;

				case 'PoPr':
					eval("\$".$msg[2].';'); 
					eval("\$".$msg[3].';'); 
					eval("\$".$msg[4].';'); 
					$xml .= "<PolyKeyPressure Channel=\"$ch\" Note=\"$n\" Pressure=\"$v\"/>\n";
					break;

				case 'Par':
					eval("\$".$msg[2].';'); 
					eval("\$".$msg[3].';'); 
					eval("\$".$msg[4].';'); 
					$xml .= "<ControlChange Channel=\"$ch\" Control=\"$c\" Value=\"$v\"/>\n";
					break;

				case 'ChPr':
					eval("\$".$msg[2].';'); 
					eval("\$".$msg[3].';'); 
					$xml .= "<ChannelKeyPressure Channel=\"$ch\" Pressure=\"$v\"/>\n";
					break;

				case 'Pb':
					eval("\$".$msg[2].';'); 
					eval("\$".$msg[3].';'); 
					$xml .= "<PitchBendChange Channel=\"$ch\" Value=\"$v\"/>\n";
					break;

				case 'Seqnr':
					$xml .= "<SequenceNumber Value=\"{$msg[2]}\"/>\n";
					break;

				case 'Meta':
					$txttypes = array('Text','Copyright','TrkName','InstrName','Lyric','Marker','Cue');
					$mtype = $msg[2];

					$pos = array_search($mtype, $txttypes);
					if ($pos !== FALSE){
						$tags = array('TextEvent','CopyrightNotice','TrackName','InstrumentName','Lyric','Marker','CuePoint');
						$tag = $tags[$pos];
						$line = $track[$j];
						$start = strpos($line,'"')+1;
						$end = strrpos($line,'"');
						$txt = substr($line,$start,$end-$start);
						$xml .= "<$tag>".htmlspecialchars($txt)."</$tag>\n";
					}else{
						if ($mtype == 'TrkEnd')
						$xml .= "<EndOfTrack/>\n";
						elseif ($mtype == '0x20' || $mtype == '0x21') 
						$xml .= "<MIDIChannelPrefix Value=\"{$msg[3]}\"/>\n";
					}
					break;

				case 'Tempo':
					$xml .= "<SetTempo Value=\"{$msg[2]}\"/>\n";
					break;

				case 'SMPTE':
					$xml .= "<SMPTEOffset TimeCodeType=\"1\" Hour=\"{$msg[2]}\" Minute=\"{$msg[3]}\" Second=\"{$msg[4]}\" Frame=\"{$msg[5]}\" FractionalFrame=\"{$msg[6]}\"/>\n"; 
					break;

				case 'TimeSig': 
					$ts = explode('/',$msg[2]);
				$xml .= "<TimeSignature Numerator=\"{$ts[0]}\" LogDenominator=\"".log($ts[1])/log(2)."\" MIDIClocksPerMetronomeClick=\"{$msg[3]}\" ThirtySecondsPer24Clocks=\"{$msg[4]}\"/>\n";
					break;

				case 'KeySig':
					$mode = ($msg[3]=='major')?0:1;
					$xml .= "<KeySignature Fifths=\"{$msg[2]}\" Mode=\"$mode\"/>\n"; 
					break;

				case 'SeqSpec':
					$line = $track[$j];
					$start = strpos($line,'SeqSpec')+8;
					$data = substr($line,$start);
					$xml .= "<SequencerSpecific>$data</SequencerSpecific>\n";
					break;

				case 'SysEx':
					$str = '';
					for ($k=3;$k<count($msg);$k++) $str .= $msg[$k].' ';
					$str = trim(strtoupper($str));
					$xml .= "<SystemExclusive>$str</SystemExclusive>\n";
					break;
				default:
					$this->_err('unknown event: '.$msg[1]);
					exit();
			}
			$xml .= "  </Event>\n";
	}
	$xml .= "</Track>\n";
  }
  $xml .= "</MIDIFile>";
	return $xml;
}

function importXml($xmlStr){
	$this->evt = array();
	$this->atr = array();
	$this->dat = '';
	$this->open();

	$this->xml_parser = xml_parser_create("ISO-8859-1");
	xml_set_object($this->xml_parser, $this);
	xml_set_element_handler($this->xml_parser, "_startElement", "_endElement");
	xml_set_character_data_handler($this->xml_parser,"_chData");
	if (!xml_parse($this->xml_parser, $xmlStr, TRUE))
		die(sprintf("XML error: %s at line %d", xml_error_string(xml_get_error_code($this->xml_parser)),xml_get_current_line_number($this->xml_parser)));
	xml_parser_free($this->xml_parser);
}



function importMid($smf_path){
	$SMF = fopen($smf_path, "rb"); 
	$song = fread($SMF,filesize($smf_path));
	fclose($SMF);
	if (strpos($song,'MThd')>0) $song = substr($song,strpos($song,'MThd'));
	$header = substr($song,0,14);
	if (substr($header,0,8)!="MThd\0\0\0\6") $this->_err('wrong MIDI-header');
	$type = ord($header[9]);
	if ($type>1) $this->_err('Typ 0 and 1 supported');
	
	$timebase = ord($header[12])*256 + ord($header[13]);
	$this->type = $type;
	$this->timebase = $timebase;
	$this->tempo = 0; 
	$trackStrings = explode('MTrk',$song);
	array_shift($trackStrings);
	$tracks = array();
	$tsc = count($trackStrings);
	if (func_num_args()>1){
		$tn =  func_get_arg(1);
		if ($tn>=$tsc) $this->_err('less $tn');
		$tracks[] = $this->_parseTrack($trackStrings[$tn],$tn);
	} else
		for ($i=0;$i<$tsc;$i++)  $tracks[] = $this->_parseTrack($trackStrings[$i],$i);
	$this->tracks = $tracks;
}

function getMid(){
	$tracks = $this->tracks;
	$tc = count($tracks);
	$type = ($tc > 1)?1:0;
	$midStr = "MThd\0\0\0\6\0".chr($type).$this->_getBytes($tc,2).$this->_getBytes($this->timebase,2);
	for ($i=0;$i<$tc;$i++){
		$track = $tracks[$i];
		$mc = count($track);
		$time = 0;
		$midStr .= "MTrk";
		$trackStart = strlen($midStr);

		$last = '';

		for ($j=0;$j<$mc;$j++){
			$line = $track[$j];
			$t = $this->_getTime($line);
			$dt = $t - $time;
if ($dt<0) continue;
			$time = $t;
			$midStr .= $this->_writeVarLen($dt);


			$str = $this->_getMsgStr($line);
			$start = ord($str[0]);
			if ($start>=0x80 && $start<=0xEF && $start==$last) $str = substr($str, 1);
			$last = $start;

			$midStr .= $str;
		}
		$trackLen = strlen($midStr) - $trackStart;
		$midStr = substr($midStr,0,$trackStart).$this->_getBytes($trackLen,4).substr($midStr,$trackStart);
	}
	return $midStr;
}

function saveMidFile($mid_path, $chmod=false){
	if (count($this->tracks)<1) $this->_err(' no tracks');
	$SMF = fopen($mid_path, "wb"); 
	fwrite($SMF,$this->getMid());
	fclose($SMF);
	if ($chmod!==false) @chmod($mid_path, $chmod);
}

function playMidFile($file,$visible=true,$autostart=true,$loop=true,$player='default'){
}

function downloadMidFile($output, $file=false){
}


function getInstrumentList(){
	return array('Piano','Bright Piano','Electric Grand','Honky Tonk Piano','Electric Piano 1','Electric Piano 2','Harpsichord','Clavinet','Celesta','Glockenspiel','Music Box','Vibraphone','Marimba','Xylophone','Tubular Bell','Dulcimer','Hammond Organ','Perc Organ','Rock Organ','Church Organ','Reed Organ','Accordion','Harmonica','Tango Accordion','Nylon Str Guitar','Steel String Guitar','Jazz Electric Gtr','Clean Guitar','Muted Guitar','Overdrive Guitar','Distortion Guitar','Guitar Harmonics','Acoustic Bass','Fingered Bass','Picked Bass','Fretless Bass','Slap Bass 1','Slap Bass 2','Syn Bass 1','Syn Bass 2','Violin','Viola','Cello','Contrabass','Tremolo Strings','Pizzicato Strings','Orchestral Harp','Timpani','Ensemble Strings','Slow Strings','Synth Strings 1','Synth Strings 2','Choir Aahs','Voice Oohs','Syn Choir','Orchestra Hit','Trumpet','Trombone','Tuba','Muted Trumpet','French Horn','Brass Ensemble','Syn Brass 1','Syn Brass 2','Soprano Sax','Alto Sax','Tenor Sax','Baritone Sax','Oboe','English Horn','Bassoon','Clarinet','Piccolo','Flute','Recorder','Pan Flute','Bottle Blow','Shakuhachi','Whistle','Ocarina','Syn Square Wave','Syn Saw Wave','Syn Calliope','Syn Chiff','Syn Charang','Syn Voice','Syn Fifths Saw','Syn Brass and Lead','Fantasia','Warm Pad','Polysynth','Space Vox','Bowed Glass','Metal Pad','Halo Pad','Sweep Pad','Ice Rain','Soundtrack','Crystal','Atmosphere','Brightness','Goblins','Echo Drops','Sci Fi','Sitar','Banjo','Shamisen','Koto','Kalimba','Bag Pipe','Fiddle','Shanai','Tinkle Bell','Agogo','Steel Drums','Woodblock','Taiko Drum','Melodic Tom','Syn Drum','Reverse Cymbal','Guitar Fret Noise','Breath Noise','Seashore','Bird','Telephone','Helicopter','Applause','Gunshot');
}

function getDrumset(){
	return array(
	35=>'Acoustic Bass Drum',
	36=>'Bass Drum 1',
	37=>'Side Stick',
	38=>'Acoustic Snare',
	39=>'Hand Clap',
	40=>'Electric Snare',
	41=>'Low Floor Tom',
	42=>'Closed Hi-Hat',
	43=>'High Floor Tom',
	44=>'Pedal Hi-Hat',
	45=>'Low Tom',
	46=>'Open Hi-Hat',
	47=>'Low Mid Tom',
	48=>'High Mid Tom',
	49=>'Crash Cymbal 1',
	50=>'High Tom',
	51=>'Ride Cymbal 1',
	52=>'Chinese Cymbal',
	53=>'Ride Bell',
	54=>'Tambourine',
	55=>'Splash Cymbal',
	56=>'Cowbell',
	57=>'Crash Cymbal 2',
	58=>'Vibraslap',
	59=>'Ride Cymbal 2',
	60=>'High Bongo',
	61=>'Low Bongo',
	62=>'Mute High Conga',
	63=>'Open High Conga',
	64=>'Low Conga',
	65=>'High Timbale',
	66=>'Low Timbale',
	67=>'High Agogo',
	68=>'Low Agogo',
	69=>'Cabase',
	70=>'Maracas',
	71=>'Short Whistle',
	72=>'Long Whistle',
	73=>'Short Guiro',
	74=>'Long Guiro',
	75=>'Claves',
	76=>'High Wood Block',
	77=>'Low Wood Block',
	78=>'Mute Cuica',
	79=>'Open Cuica',
	80=>'Mute Triangle',
	81=>'Open Triangle');
}

function getDrumkitList(){
	return array(
		1   => 'Dry',
		9   => 'Room',
		19  => 'Power',
		25  => 'Electronic',
		33  => 'Jazz',
		41  => 'Brush',
		57  => 'SFX',
		128 => 'Default'
	);
}

function getNoteList(){
	return array(
	'C0', 'Cs0', 'D0', 'Ds0', 'E0', 'F0', 'Fs0', 'G0', 'Gs0', 'A0', 'As0', 'B0',
	'C1', 'Cs1', 'D1', 'Ds1', 'E1', 'F1', 'Fs1', 'G1', 'Gs1', 'A1', 'As1', 'B1',
	'C2', 'Cs2', 'D2', 'Ds2', 'E2', 'F2', 'Fs2', 'G2', 'Gs2', 'A2', 'As2', 'B2',
	'C3', 'Cs3', 'D3', 'Ds3', 'E3', 'F3', 'Fs3', 'G3', 'Gs3', 'A3', 'As3', 'B3',
	'C4', 'Cs4', 'D4', 'Ds4', 'E4', 'F4', 'Fs4', 'G4', 'Gs4', 'A4', 'As4', 'B4',
	'C5', 'Cs5', 'D5', 'Ds5', 'E5', 'F5', 'Fs5', 'G5', 'Gs5', 'A5', 'As5', 'B5',
	'C6', 'Cs6', 'D6', 'Ds6', 'E6', 'F6', 'Fs6', 'G6', 'Gs6', 'A6', 'As6', 'B6',
	'C7', 'Cs7', 'D7', 'Ds7', 'E7', 'F7', 'Fs7', 'G7', 'Gs7', 'A7', 'As7', 'B7',
	'C8', 'Cs8', 'D8', 'Ds8', 'E8', 'F8', 'Fs8', 'G8', 'Gs8', 'A8', 'As8', 'B8',
	'C9', 'Cs9', 'D9', 'Ds9', 'E9', 'F9', 'Fs9', 'G9', 'Gs9', 'A9', 'As9', 'B9',
	'C10','Cs10','D10','Ds10','E10','F10','Fs10','G10');
}


function _getTime($msgStr){
	return (int) strtok($msgStr,' ');
}

function _getMsgStr($line){
	$msg = explode(' ',$line);
	switch($msg[1]){
		case 'PrCh': 
			eval("\$".$msg[2].';'); 
			eval("\$".$msg[3].';'); 
			return chr(0xC0+$ch-1).chr($p);
			break;
		case 'On': 
			eval("\$".$msg[2].';'); 
			eval("\$".$msg[3].';'); 
			eval("\$".$msg[4].';'); 
			return chr(0x90+$ch-1).chr($n).chr($v);
			break;
		case 'Off': 
			eval("\$".$msg[2].';'); 
			eval("\$".$msg[3].';'); 
			eval("\$".$msg[4].';'); 
			return chr(0x80+$ch-1).chr($n).chr($v);
			break;
		case 'PoPr': 
			eval("\$".$msg[2].';'); 
			eval("\$".$msg[3].';'); 
			eval("\$".$msg[4].';'); 
			return chr(0xA0+$ch-1).chr($n).chr($v);
			break;
		case 'Par': 
			eval("\$".$msg[2].';'); 			eval("\$".$msg[3].';');
			eval("\$".$msg[4].';'); 
			return chr(0xB0+$ch-1).chr($c).chr($v);
			break;
		case 'ChPr': 
			eval("\$".$msg[2].';'); 
			eval("\$".$msg[3].';'); 
			return chr(0xD0+$ch-1).chr($v);
			break;
		case 'Pb': 
			eval("\$".$msg[2].';'); 
			eval("\$".$msg[3].';'); 
			$a = $v & 0x7f; 
			$b = ($v >> 7) & 0x7f; 
			return chr(0xE0+$ch-1).chr($a).chr($b);
			break;

		case 'Seqnr': 
			$num = chr($msg[2]);
			if ($msg[2]>255) $this->_err("code broken around Seqnr event");
			return "\xFF\x00\x02\x00$num";
			break;
		case 'Meta':
			$type = $msg[2];
			switch ($type){
				case 'Text': 
				case 'Copyright':
				case 'TrkName':
				case 'InstrName': 
				case 'Lyric': 
				case 'Marker': 
				case 'Cue': 
					$texttypes = array('Text','Copyright','TrkName','InstrName','Lyric','Marker','Cue');
					$byte = chr(array_search($type,$texttypes)+1);
					$start = strpos($line,'"')+1;
					$end = strrpos($line,'"');
					$txt = substr($line,$start,$end-$start);
					$len = $this->_writeVarLen(strlen($txt)); 
					return "\xFF$byte$len$txt";
					break;
				case 'TrkEnd': 
					return "\xFF\x2F\x00";
					break;
				case '0x20': 
					$v = chr($msg[3]);
					return "\xFF\x20\x01$v";
					break;
				case '0x21': 
					$v = chr($msg[3]);
					return "\xFF\x21\x01$v";
					break;
				default:
					$this->_err("unknown meta event: $type");
					exit();
			}
			break;
		case 'Tempo': 
			$tempo = $this->_getBytes((int)$msg[2],3);
			return "\xFF\x51\x03$tempo";
			break;
		case 'SMPTE': 
			$h = chr($msg[2]);
			$m = chr($msg[3]);
			$s = chr($msg[4]);
			$f = chr($msg[5]);
			$fh = chr($msg[6]);
			return "\xFF\x54\x05$h$m$s$f$fh";
			break;
		case 'TimeSig': 
			$zt = explode('/',$msg[2]);
			$z = chr($zt[0]);
			$t = chr(log($zt[1])/log(2));
			$mc = chr($msg[3]);
			$c = chr($msg[4]);
			return "\xFF\x58\x04$z$t$mc$c";
			break;
		case 'KeySig': 
			$vz = chr($msg[2]);
			$g = chr(($msg[3]=='major')?0:1);
			return "\xFF\x59\x02$vz$g";
			break;
		case 'SeqSpec': 
			$cnt = count($msg)-2;
			$data = '';
			for ($i=0;$i<$cnt;$i++)
				$data.=$this->_hex2bin($msg[$i+2]);
			$len = $this->_writeVarLen(strlen($data));
			return "\xFF\x7F$len$data";
			break;
		case 'SysEx': 
			$start = strpos($line,'f0');
			$end = strrpos($line,'f7');
			$data = substr($line,$start+3,$end-$start-1);
			$data = $this->_hex2bin(str_replace(' ','',$data));
			$len = chr(strlen($data));
			return "\xF0$len".$data;
			break;

		default:
			@$this->_err('unknown event: '.$msg[1]);
			exit();
	}
}

function _parseTrack($binStr, $tn){
	$trackLen = strlen($binStr);
  $p=4;
  $time = 0;
  $track = array();
  while ($p<$trackLen){
	  $dt = $this->_readVarLen($binStr,$p);
	  $time += $dt;
	  $byte = ord($binStr[$p]);
	  $high = $byte >> 4;
	  $low = $byte - $high*16;
	  switch($high){
		  case 0x0C: 
			  $chan = $low+1;
			  $prog = ord($binStr[$p+1]);
			  $last = 'PrCh';
			  $track[] = "$time PrCh ch=$chan p=$prog";
			  $p+=2;
			  break;
		  case 0x09: 
			  $chan = $low+1;
			  $note = ord($binStr[$p+1]);
			  $vel = ord($binStr[$p+2]);
			  $last = 'On';
			  $track[] = "$time On ch=$chan n=$note v=$vel";
			  $p+=3;
			  break;
		  case 0x08: 
			  $chan = $low+1;
			  $note = ord($binStr[$p+1]);
			  $vel = ord($binStr[$p+2]);
			  $last = 'Off';
			  $track[] = "$time Off ch=$chan n=$note v=$vel";
			  $p+=3;
			  break;
		  case 0x0A: 
			  $chan = $low+1;
			  $note = ord($binStr[$p+1]);
			  $val = ord($binStr[$p+2]);
			  $last = 'PoPr';
			  $track[] = "$time PoPr ch=$chan n=$note v=$val";
			  $p+=3;
			  break;
		  case 0x0B: 
			  $chan = $low+1;
			  $c = ord($binStr[$p+1]);
			  $val = ord($binStr[$p+2]);
			  $last = 'Par';
			  $track[] = "$time Par ch=$chan c=$c v=$val";
			  $p+=3;
			  break;
		  case 0x0D: 
			  $chan = $low+1;
			  $val = ord($binStr[$p+1]);
			  $last = 'ChPr';
			  $track[] = "$time ChPr ch=$chan v=$val";
			  $p+=2;
			  break;
		  case 0x0E: 
			  $chan = $low+1;
			  $val = (ord($binStr[$p+1]) & 0x7F) | (((ord($binStr[$p+2])) & 0x7F) << 7);
			  $last = 'Pb';
			  $track[] = "$time Pb ch=$chan v=$val";
			  $p+=3;
			  break;
		  default:
			  switch($byte){
				  case 0xFF: 
					  $meta = ord($binStr[$p+1]);					  
					  switch ($meta){
						  case 0x00: 
							  $tmp = ord($binStr[$p+2]);
							  if ($tmp==0x00) { $num = $tn; $p+=3;}
							  else { $num= 1; $p+=5; }
							  $track[] = "$time Seqnr $num";
							  break;
						  case 0x01: 
						  case 0x02: 
						  case 0x03: 
						  case 0x04: 						 
						  case 0x05: 
						  case 0x06: 
						  case 0x07: 
							  $texttypes = array('Text','Copyright','TrkName','InstrName','Lyric','Marker','Cue');
							  $type = $texttypes[$meta-1];
							  $p +=2;
							  $len = $this->_readVarLen($binStr, $p);
							  if (($len+$p) > $trackLen) $this->_err("Meta $type has corrupt variable length field ($len) [track: $tn dt: $dt]");
							  $txt = substr($binStr, $p,$len);
							  $track[] = "$time Meta $type \"$txt\"";
							  $p+=$len;
							  break;
						  case 0x20: 
						  	if (ord($binStr[$p+2])==0){
						  		$p+=3;
						  	}else{
									$chan = ord($binStr[$p+3]);
									if ($chan<10) $chan = '0'.$chan;//???
									$last = 'MetaChannelPrefix';
							  	$track[] = "$time Meta 0x20 $chan";
							  	$p+=4;
							  }
							  break;
						  case 0x21: 
						  	if (ord($binStr[$p+2])==0){
						  		$p+=3;
						  	}else{
									$chan = ord($binStr[$p+3]);
									if ($chan<10) $chan = '0'.$chan;//???
								  $track[] = "$time Meta 0x21 $chan";
								  $p+=4;
								}
							  break;
						  case 0x2F: 
							  $track[] = "$time Meta TrkEnd";
							  return $track;
							  break;
						  case 0x51: 
							  $tempo = ord($binStr[$p+3])*256*256 + ord($binStr[$p+4])*256 + ord($binStr[$p+5]);
							  $track[] = "$time Tempo $tempo";
							  if ($tn==0 && $time==0) {
								  $this->tempo = $tempo;
								  $this->tempoMsgNum = count($track) - 1;
							  }
							  $p+=6;
							  break;
						  case 0x54: 
						  	$len = ord($binStr[$p+2]); 							  $h  = $len>0 ? ord($binStr[$p+3]) : 0;
							  $m  = $len>1 ? ord($binStr[$p+4]) : 0;
							  $s  = $len>2 ? ord($binStr[$p+5]) : 0;
							  $f  = $len>3 ? ord($binStr[$p+6]) : 0;
							  $fh = $len>4 ? ord($binStr[$p+7]) : 0;				  
							  $track[] = "$time SMPTE $h $m $s $f $fh";
							  $p+=(3+$len);
							  break;
						  case 0x58: 
							  $z = ord($binStr[$p+3]);
							  $t = pow(2,ord($binStr[$p+4]));
							  $mc = ord($binStr[$p+5]);
							  $c = ord($binStr[$p+6]);
							  $track[] = "$time TimeSig $z/$t $mc $c";
							  $p+=7;
							  break;
						  case 0x59: 
						  	$len = ord($binStr[$p+2]); 
							  $vz  = $len>0 ? ord($binStr[$p+3]) : 0;
							  $g   = ($len<=1 || ord($binStr[$p+4])==0) ?'major':'minor'; 
							  $track[] = "$time KeySig $vz $g";
							  $p+=(3+$len);			   
							  break;
						  case 0x7F: 							  $p +=2;
							  $len = $this->_readVarLen($binStr, $p);
							  if (($len+$p) > $trackLen) $this->_err("corrupt variable length field ($len) [track: $tn dt: $dt]");
							  $p-=3;
							  $data='';
							  for ($i=0;$i<$len;$i++) $data.=' '.sprintf("%02x",ord($binStr[$p+3+$i]));
							  $track[] = "$time SeqSpec$data";
							  $p+=$len+3;
							  break;

						  default:
							  $metacode = sprintf("%02x", ord($binStr[$p+1]) );
							  $p +=2;
							  $len = $this->_readVarLen($binStr, $p);
							  if (($len+$p) > $trackLen) $this->_err("corrupt variable length field ($len) [track: $tn dt: $dt]");
							  $p -=3;
							  $data='';
							  for ($i=0;$i<$len;$i++) $data.=' '.sprintf("%02x",ord($binStr[$p+3+$i]));
							  $track[] = "$time Meta 0x$metacode $data";
							  $p+=$len+3;
							  break;
					  } 
					  break; 

				  case 0xF0: 
					  $p +=1;
					  $len = $this->_readVarLen($binStr, $p);
					  if (($len+$p) > $trackLen) $this->_err("corrupt variable length field ($len) [track: $tn dt: $dt p: $p]");
					  $str = 'f0';
					  for ($i=0;$i<$len;$i++) $str.=' '.sprintf("%02x",ord($binStr[$p+$i]));
					  $track[] = "$time SysEx $str";
					  $p+=$len;
					  break;
				  default: 
					  switch (@$last){	  
						  case 'On':
						  case 'Off':
							  $note = ord($binStr[$p]);
							  $vel = ord($binStr[$p+1]);
							  $track[] = "$time $last ch=$chan n=$note v=$vel";
							  $p+=2;
							  break;
						  case 'PrCh':
							  $prog = ord($binStr[$p]);
							  $track[] = "$time PrCh ch=$chan p=$prog";
							  $p+=1;
							  break;
						  case 'PoPr':
							  $note = ord($binStr[$p+1]);
							  $val = ord($binStr[$p+2]);
							  $track[] = "$time PoPr ch=$chan n=$note v=$val";
							  $p+=2;
							  break;
						  case 'ChPr':
							  $val = ord($binStr[$p]);
							  $track[] = "$time ChPr ch=$chan v=$val";
							  $p+=1;
							  break;
						  case 'Par':
							  $c = ord($binStr[$p]);
							  $val = ord($binStr[$p+1]);
							  $track[] = "$time Par ch=$chan c=$c v=$val";
							  $p+=2;
							  break;
						  case 'Pb':
							  $val = (ord($binStr[$p])  & 0x7F) | (( ord($binStr[$p+1]) & 0x7F)<<7);
							  $track[] = "$time Pb ch=$chan v=$val";
							  $p+=2;
							  break;
							case 'MetaChannelPrefix':
								$last = 'MetaChannelPrefix';
							  $track[] = "$time Meta 0x20 $chan";
							  $p+=3;
							  break;
						  default:

							  $this->_err("unknown repetition: $last");
							  
					  }  
			  } 
	  } 
  } 
  return $track;
}

function _findTempo(){
	$track = $this->tracks[0];
	$mc = count($track);
	for ($i=0;$i<$mc;$i++){
		$msg = explode(' ',$track[$i]);
		if ((int) $msg[0]>0) break;
		if ($msg[1]=='Tempo'){
			$this->tempo = $msg[2];
			$this->tempoMsgNum = $i;
			break;
		}
	}
}

function _startElement($parser, $name, $attrs) {

	switch ($name){
		case 'MIDIFILE':
		case 'FORMAT':
		case 'TRACKCOUNT':
		case 'TICKSPERBEAT':
		case 'TIMESTAMPTYPE':
		case 'DELTA':
		case 'ABSOLUTE':
			break;
		case 'TRACK':
			$this->newTrack();
			if ($this->ttype=='Delta') $this->t = 0;
			break;

		case 'EVENT':
			$this->evt = array();
			$this->atr = array();
			$this->dat = '';
			break;

		default:
			$this->atr = $attrs;
	}
}

function _endElement($parser, $name){
	switch ($name){
		case 'MIDIFILE':
			break;
		case 'FORMAT':
			$this->type = (int) $this->dat;
			break;
		case 'TRACKCOUNT':
			break;
		case 'TICKSPERBEAT':
			$this->timebase = (int) $this->dat;
			break;
		case 'TIMESTAMPTYPE':
			$this->ttype = $this->dat;
			break;
		case 'TRACK':
			break;

		case 'DELTA':
			$this->t = $this->t + (int) $this->dat;
			$this->evt['t'] = $this->t;
			break;
		case 'ABSOLUTE':
			$this->evt['t'] = (int) $this->dat;
			break;

		case 'EVENT':
			$time = $this->evt['t'];
			$a = $this->evt['atr'];
			$typ = $this->evt['typ'];
			$dat = $this->evt['dat'];
			$tn = count($this->tracks)-1;

			switch ($typ){
				case 'PROGRAMCHANGE':
					$msg = "$time PrCh ch={$a['CHANNEL']} p={$a['NUMBER']}";
					break;
				case 'NOTEON':
					$msg = "$time On ch={$a['CHANNEL']} n={$a['NOTE']} v={$a['VELOCITY']}";
					break;
				case 'NOTEOFF':
					$msg = "$time Off ch={$a['CHANNEL']} n={$a['NOTE']} v={$a['VELOCITY']}";
					break;
				case 'POLYKEYPRESSURE':
					$msg = "$time PoPr ch={$a['CHANNEL']} n={$a['NOTE']} v={$a['PRESSURE']}";
					break;
				case 'CONTROLCHANGE':
					$msg = "$time Par ch={$a['CHANNEL']} c={$a['CONTROL']} v={$a['VALUE']}";
					break;
				case 'CHANNELKEYPRESSURE':
					$msg = "$time ChPr ch={$a['CHANNEL']} v={$a['PRESSURE']}";
					break;
				case 'PITCHBENDCHANGE':
					$msg = "$time Pb ch={$a['CHANNEL']} v={$a['VALUE']}";
					break;

				case 'SEQUENCENUMBER':
					$msg = "$time Seqnr {$a['VALUE']}";
					break;

				case 'TEXTEVENT':
				case 'COPYRIGHTNOTICE':
				case 'TRACKNAME':
				case 'INSTRUMENTNAME':
				case 'LYRIC':
				case 'MARKER':
				case 'CUEPOINT':
					$tags = array('TEXTEVENT','COPYRIGHTNOTICE','TRACKNAME','INSTRUMENTNAME','LYRIC','MARKER','CUEPOINT');
					$txttypes = array('Text','Copyright','TrkName','InstrName','Lyric','Marker','Cue');
					$type = $txttypes[array_search($typ, $tags)];
					$msg = "$time Meta $type \"$dat\"";
					break;

				case 'ENDOFTRACK':
					$msg = "$time Meta TrkEnd";
					break;

				case 'MIDICHANNELPREFIX':
					if ((int) $dat<10) $dat='0'.$dat;
					$msg = "$time Meta 0x20 $dat";
					break;

				case 'SETTEMPO':
					$tempo = (int) $a['VALUE'];
					$msg = "$time Tempo $tempo";
					if ($tn==0 && $time==0) {
						$this->tempo = $tempo;
						$this->tempoMsgNum = count($this->tracks[$tn]);
					}
					break;

				case 'SMPTEOFFSET':
					$msg = "$time SMPTE {$a['HOUR']} {$a['MINUTE']} {$a['SECOND']} {$a['FRAME']} {$a['FRACTIONALFRAME']}";
					break;

				case 'TIMESIGNATURE':
					$z = (int) $a['NUMERATOR'];
					$t = pow(2,(int) $a['LOGDENOMINATOR']);
					$msg = "$time TimeSig $z/$t {$a['MIDICLOCKSPERMETRONOMECLICK']} {$a['THIRTYSECONDSPER24CLOCKS']}";
					break;

				case 'KEYSIGNATURE':
					$g = ($a['MODE']==0)?'major':'minor';
					$msg = "$time KeySig {$a['FIFTHS']} $g";
					break;

				case 'SEQUENCERSPECIFIC':
					$msg = "$time SeqSpec $dat";
					break;

				case 'SYSTEMEXCLUSIVE':
					$dat = strtolower($dat);
					$msg = "$time SysEx f0 $dat";
					break;

				default:return;
			}

			$this->addMsg(count($this->tracks)-1,$msg);
			$evt = 0;
			break;

		default:
			$this->evt['typ'] = $name;
			$this->evt['atr'] = $this->atr;
			$this->evt['dat'] = $this->dat;
	}
}

function _chData($parser, $data){
	$this->dat = (trim($data)=='')?'':$data;
}

function _hex2bin($hex_str) {
	$bin_str='';
  for ($i = 0; $i < strlen($hex_str); $i += 2) {
	$bin_str .= chr(hexdec(substr($hex_str, $i, 2)));
  }
  return $bin_str;
}

function _getBytes($n,$len){
	$str='';
	for ($i=$len-1;$i>=0;$i--){
		$str.=chr(floor($n/pow(256,$i)));
	}
	return $str;
}

function _readVarLen($str,&$pos){
	if ( ($value = ord($str[$pos++])) & 0x80 ){
		$value &= 0x7F;
		do {
		$value = ($value << 7) + (($c = ord($str[$pos++])) & 0x7F);
		} while ($c & 0x80);
	}
	return($value);
}

function _writeVarLen($value){
	$buf = $value & 0x7F;
	$str='';
	while (($value >>= 7)){
	  $buf <<= 8;
	  $buf |= (($value & 0x7F) | 0x80);
	}
	while (TRUE){
		$str.=chr($buf%256);
		if ($buf & 0x80) $buf >>= 8;
		else break;
	}
	return $str;
}

function _delta2Absolute($track){
	$mc = count($track);
	$last = 0;
	for ($i=0;$i<$mc;$i++){
		$msg = explode(' ',$track[$i]);
		$t = $last + (int) $msg[0];
		$msg[0] = $t;
		$track[$i] = implode(' ',$msg);
		$last = $t;
	}
	return $track;
}

function _err($str){
	if ($this->throwFlag)
		eval('throw new Exception($str);');
	else
		die('>>> '.$str.'!');
}








function getDuration(){
	$duration = 0;
	$currentTempo = 0;
	$t = 0;
	$track = $this->tracks[0];
	$mc = count($track);
	$f = 1 / $this->getTimebase() / 1000000;
	for ($i=0;$i<$mc;$i++){
		$msg = explode(' ',$track[$i]);
		if (@$msg[1]=='Tempo'){
			$dt = (int)$msg[0] - $t;
			$duration += $dt * $currentTempo * $f;
			$t = (int)$msg[0];
			$currentTempo = (int)$msg[2];
		}
	}
	
	$end_time = $t;
	foreach ($this->tracks as $track){
		$msg = explode(' ', $track[count($track)-1]);
		$end_time = max($end_time, (int)$msg[0]);
	}
	if ($end_time>$t){
		$dt = $end_time - $t;
		$duration += $dt * $currentTempo * $f;
	}
	return $duration;
}





} 

?>
