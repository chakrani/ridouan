<html>
<meta charset="UTF-8">
<body onload="render()" id='bd'>
<div id='sub'></div>
<textarea id='collect' style='width:100%;height:100%;position:fixed;top:0;left:0'></textarea>
<script>
function shufflet(a) {
    var j, x, i;
    for (i = a.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        x = a[i];
        a[i] = a[j];
        a[j] = x;
    }
    return a;
}
var ishoutel=0;
var arraRuleVal =new Array();
var maxiss=0;
var nrspecm=0;
var nrspecn=0;
var lastcort=0;
var tempoose=478257;
var genresinstrument="<signal>13|13|13|14|34|34|34|47|53|53|87|87|88|89|96|98|98|99|99|99|101|105|108|113|113|113|113|116</signal><asia>24|71|5|97|51|50|32|14|24|64|29|25|32|50|35|49|27|73|25|1|4|4|60|52|49|4|26|33|22|25|44|24|50|32|24|71|40|24|48|48|45|85|49|49|93|72|30|73|73|73|73|73|27|27|27|27|34|1|1|35|48|1|1|1|1|1|33|49|49|73|27|1|2|5|35|49|40|65</asia><chinese>0|1|4|8|12|23|24|32|33|35|41|41|45|47|48|49|54|60|70|73|74|78|99|105|107|109</chinese><country>26|27|35|47|61|62|106</country><experiment>2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31|32|33|34|35|36|37|38|39|40|41|42|43|44|45|46|47|48|49|50|51|52|53|54|55|56|57|58|59|60|61|62|63|64|65|66|67|68|69|70|71|72|73|74|75|76|77|78|79|80|81|82|83|84|85|86|87|88|89|90|91|92|93|94|95|96|97|98|99|100|101|102|103|104|105|106|107|108|109|110|111|112|113|114|115|116|117|118|119|120|121|122|123|126</experiment><east>88|37|48|75|50|36|23|36|28|48|48|57|1|37|48|48|33|88|32|21|32|49|73|32|32|100|115|101|121|100|50|36|23|36|88|37|48|75|50|36|23|36|32|49|73|32|32|5|21|44|48|36|48|61|44|88|37|48|75|100|115|101|121|100|36|48|61|44|80|48|24|48|28|48|48|57|1|37|48|48|33|88|32|21|32|49|73|32|32|100|115|101|121|100</east><ambient>49|50|51|52|74|76|77|78|79|101|91|93|94|95</ambient><hardrock>29|29|99|30|2|33|4|10|32|30|2|100|2|30|29|2|5|5|34|33|10|10|10|100|2|2|30|29|1|1|33|4|99|33|32|10|10|2|30|29|2|2|33|2|29|2|10|10|10|99|30|30|33|29|29|32|10|10|10|1|2|30|29|4|2|32|33|29|7|39|39|16|16|30|29|16|29|29|16|1|1|2|33|2|35|30|29|10|10|10|10|30|99|29|30|29|32|34|1|1|30|10|10|30|31|30|31|30|31|30|31|29|30|31|30|31|29|30|31|29</hardrock><hiphop>33|33|33|33|33|33|33|33|33|33|33|33|33|32|44|45|24|26|8|39|66|56|1|40|33|24|64|24|4|56|66|51|61|56|57|33|27|34|84|27|30|3|33|4|48|61|33|34|33|34|33|34|33|34|33</hiphop><house>1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20</house><irish>109|109|109|109|79|79|24|24|24|40|40|23|23|23|0|0|33|73|111|35|24|36|74|91|54|25|7|7|33|23|110|68|35|24|36|111|71|54|91|0|0|0|0|33|46|46|43|7|23|0|25|73|36|23|23|32|110|0|78|23|0|46|0|34|52|0|5|10|15|74|25|30|35|40|0|50|55|60|65|70|75|23|110|23|32|7|23|0|22|48|42|25|25|70|46|89|15|15|15|73|67|46|41|41|42|73|73|46</irish><jazz>22|24|27|28|33|43|56|57|59|60|73|74</jazz><music>27|33|34|65|60|103|81|29|81|29|91|119|30|65|88|62|32|56|60|57|58|48|49|46|47|72|32|36|114|21|25|59|64|51|90|88|37|48|75|50|36|23|36|28|48|48|57|1|37|48|48|33|88|32|21|32|49|73|32|32|100|115|101|121|100|50|36|23|36|88|37|48|75|50|36|23|36|32|49|73|32|32|5|21|44|48|36|48|61|44|88|37|48|75|100|115|101|121|100|36|48|61|44|80|48|24|48|28|48|48|57|1|37|48|48|33|88|32|21|32|49|73|32|32|100|115|101|121|100</music><piano>0|1|0|10|1|0|1</piano><strings>97|98|99|100|101|102|103|104|105|106|107|108|109|110|111|112|113|114|115|116|117|118|119|120|121|122|123</strings><symfony>33|34|35|36|44|45|46|49|50|51|52|43|41|42|47|61|58|56|70|62|63|64|71|63|67|33|34|35|36|44|45|46|49|50|51|52|43|41|42|47|61|58|57|56|62</symfony>";
var olh=new Array();
for(c=0;c<16;c++){
olh[c]=Math.round(2140+(2500*Math.random()));
}
var interc=0;
var beggs=0;
var experimentt=1;
var gcc=new Array();
var masne=0;
var begs=0;
var gamega="~|0|1|2|3|4|5|A|B|C|D|E|F";
var stylesga="experiment|asia|strings|hiphop|house|music|hardrock|piano|east|jazz|symfony|country|signal";
var magxrbffstyle=0;
var aramub=1;
var gcount=0;
var tonmin=Math.round(1+(6*Math.random()));
var tonmax=Math.round(1+(34*Math.random()));
var magxrbffgame=0;
var aaarba=new Array();
aaarba[0]=(6/8);
aaarba[1]=(7/8);
aaarba[0]=(9/8);
aaarba[1]=(6/4);
var eastt=0;
var houset=.5*.5;
var countryt=.5*.5;
var expiremtnt=1;
var jazzt=.75;
var hiphopt=11/7;
gvp=stylesga.split('|');
shua=new Array();
for(u=0;u<gvp.length;u++){
shua[u]=u;
}
shua=shufflet(shua);
gkk="";
for(u=0;u<gvp.length;u++){
gkk=gkk+gvp[shua[u]]+"|";
}
stylesga=gkk.substring(0, (gkk.length-1) );
fdr=location.href;
gt=fdr.split('randos=');
gett=gt[1];
get=gett.split('&');
var randos=get[0];
var inall=new Array();
inall[0]="Keyboard.mid";
inall[1]="Melody.mid";
inall[2]="Instrument.mid";
inall[3]="Extra.mid";
inall[4]="Drumz.mid";
var chall = new Array();
chall[0]=15;
chall[1]=14;
chall[2]=13;
chall[3]=9;
chall[4]=10;
chall[5]=18;
var tempoos=478257;
var cellunr=0;
var genre='';
var magxrbff=0;
var sadfh=0;
var varrir=0;
var nolengt=0;
var oldx=0;
var cr=0;
var gammxe="";
var colrop=0;
var sliceslice=0;
var nverh=0;
var two2dgl=false;
var volw=16;
var chchrul=13;
var liness=new Array();
var lines=new Array();
var cells="";
var seed=1;
var style=30;
var ineensw=0;
var isrest=false;
var her=8;
var oold=Math.round(800000000*Math.random());	
var arw=new Array();
var programRuling=0;
var chchrul=13;
var arw = new Array();
var rando=Math.round(Math.random()*100000000);
var see=1;
var chs=16;
var instrumnet="";
var slicelenth=32;
var nh=21;
var kanaa=10;
var temppo=200;
var starter=1200;
var dosdos=0;
var comm=com;
var game="0";
var is=new Array();
var sliceheight=32;
var prep=.65;
var com=0;
var chnmsw= 0;
var toness=new Array();
var tones=new Array();
var tonmin=5;
var tonmax=39;
var aants=0;
var toks=0;
var nrnr=0;
var txts="";
var zalbes = 1+Math.round(Math.random()*2);
var disra=0;
var sc=" ";
var reeer = Math.round(3*Math.random());
var reeers= Math.round(3*Math.random());
var gnn="";
var cfss=new Array();
var cfsss=new Array();
cfss[0]=2;
cfss[1]=3;
cfss[2]=5;
cfss[3]=8;
cfsss[0]=" ";
cfsss[1]=" ";
cfsss[2]=" ";
cfsss[3]=" ";
cfsss[4]=" ";
cfsss[5]=" ";
var pz =0;
var dx =0;
var puz =0;
var quz =0;
var zuz =0;
var pronrs=new Array();
var channelnr=new Array();
function numberToBi(nr){
var n=nr; 
cc=n.toString(2); 
return cc;
}
function doStRule5(){
for(b=0;b<sliceheight;b++){
da="";
for(h=0;h<16;h++){
dad=numberToBi(olh[h]);
oldxv=(Math.round(Math.pow(.55, (b*(1+gcount)*(1+gcount)) ))+(olh[h]+1));
olh[h]=oldxv;
da=da+dad;
}
vb=new Array();
for(v=0;v<(slicelenth-0);v++){
vn=""+da.substring(v, (v+1));
if(vn=="0"){
vb[v]=true;
}
else{
vb[v]=false;
}				
}
lines[b]=vb;		
}	
}
var rrRuleA=0;
function  doStRuleA(){
res=new Array();
toks++;
arr=lines[0];
ap=new Array();
for(b=0;b<slicelenth;b++){
ap[b]=arr[b];
}
res[0]=ap;
arr=lines[(lines.length-1)];
ap=new Array();
for(b=0;b<slicelenth;b++){
ap[b]=arr[b];
}
res[(lines.length-1)]=ap;
for(a=1;a<(sliceheight-3);a++){
arrb=lines[(a-1)];
arro=lines[(a+1)];
arr=lines[a];
ter=new Array();
for(b=1;b<(slicelenth-1);b++){
l=arr[(b-1)];
lb=arrb[(b-1)];
lo=arro[(b-1)];
r=arr[(b+1)]
rb=arrb[(b+1)];
ro=arro[(b+1)]
o=arro[b];
be=arrb[b];
c=arr[b];
living=0;
if(l==true){
living+=1;
}
if(lb==true){
living+=1;
}
if(lo==true){
living+=1;
}
if(r==true){
living+=1;
}
if(ro==true){
living+=1;
}
if(rb==true){
living+=1;
}
if(o==true){
living+=1;
}
if(be==true){
living+=1;
}
niw=c;
if(c==true && (living==0 || living==1)){
niw=false;
}
if(c==true && living>=4){
niw=false;
}
if(c==true &&( (living==(1+(toks%2))) )){
niw=true;
}
if(c==false &&(  (living==3) )){
niw=true;
}
ter[b]=niw;
}
ter[0]=arr[0];
ter[(slicelenth-1)]=arr[(slicelenth-1)];
res[a]=ter;
}
for(a=0;a<(sliceheight-3);a++){
ab=res[a];
sdf=new Array();
for(b=0;b<slicelenth;b++){
sdf[b]=ab[b];
}
lines[a]=sdf;
}
}
function  doStRuleAPLUS(){
rrRuleA++;
if((rrRuleA%4)==0 || (rrRuleA%4)==3){
doStRuleA();
}
}
var mixt=0;
function doStRuleC(){
fsf=mixt%2;
if(fsf==0){
doStRuleA();
}
if(fsf==1){
doStLive();
}
}
var bgxRuleB=0;
function  doStRuleD(){
linesx = new Array();
for(t=0;t<sliceheight+2;t++){
li=new Array();
cc=lines[t];
if(t==0){
cc=lines[(sliceheight-2)]
}
for(u=0;u<(slicelenth+2);u++){
li[u]=cc[u];
li[(u+1)]=cc[(u+1)];
li[(u+2)]=cc[(u+2)];
}
linesx[t]=li;
}
re=(bgxRuleB%2);
bgxRuleB++;
asas=sliceheight+re;
for(t=re;t<asas;t+=2){
lix=new Array();
lib=new Array();
lib2=new Array();
li=new Array();
mi=new Array();
for(u=0;u<(slicelenth+1-1);u+=2){
som=0;
cc=lines[t];
bb=lines[(t+1)];
li[0]=0;
lb=cc[u];		rb=cc[(u+1)];
lo=bb[u];		ro=bb[(u+1)];
gh=Math.random();
if(gh>=.5){
llb=rb;
llo=lb;
rbb=ro;
rro=lo;
}
else{
llb=lo;
llo=ro;
rbb=lb;
rro=rb;
}
li[u]=llb;
li[(u+1)]=rbb;
mi[u]=llo;
mi[(u+1)]=rro;							
}
linesx[t]=li;
linesx[(t+1)]=mi;
}
for(t=0;t<linesx.length;t++){
li=new Array();
cc=linesx[t];
for(u=0;u<cc.length;u++){
li[u]=cc[u];
}			
lines[t]=li;
}
}
var tergRuleE=0;
var rrRuleE=0;
var updolrRuleE=Math.random();
function  doStRuleE(){
rrRuleE++;
linesx = new Array();
for(t=0;t<lines.length;t++){
li=new Array();
ccoocc=lines[t];
if(t==0){
ccoocc=lines[(sliceheight-1)];
}
for(u=0;u<(slicelenth);u++){
li[u]=ccoocc[u];
li[(u+1)]=ccoocc[(u+1)];
li[(u+2)]=ccoocc[(u+2)];	
}		
linesx[t]=li;
}
if((tergRuleE%4)==0){
asas=slicelenth;
for(t=1;t<asas;t++){
for(u=1;u<(slicelenth+1);u++){
som=0;	
if(lines[(t-1)][(u)]){
som++;
}			
if(lines[(t+1)][(u)]){
som++;
}
if(lines[t][(u-1)]){
som++;
}
if(lines[t][(u+1)]){
som++;
}
me=lines[t][u];
if(som!=2){
if(lines[(t-1)][(u-(rrRuleE%2))]){
linesx[t][u]=false;
}
}
else{
if( true || lines[(t-(rrRuleE%2))][(u+1)]){
linesx[t][u]=true;
}
}
}			
}
}
if(updolrRuleE>=.5){
if((tergRuleE%2)==0 ){
asas=sliceheight;
//if(oold==1){
//asas=1;
//}
for(t=0;t<asas;t++){
li=new Array();
ccoocc=linesx[t];
for(u=0;u<ccoocc.length;u++){
li[u]=ccoocc[u];
}			
lines[t]=li;
}
}
else{
for(t=0;t<linesx.length;t++){
li=new Array();
ccoocc=linesx[t];
for(u=0;u<ccoocc.length;u++){
li[u]=ccoocc[u];
}			
lines[(sliceheight-t-1)]=li;
}
}
}
else{
if((tergRuleE%2)==0){
asas=sliceheight-1;
//if(oold==1){
//asas=1;
//}
for(t=0;t<linesx.length;t++){
li=new Array();
ccoocc=linesx[t];
for(u=0;u<ccoocc.length;u++){
li[u]=ccoocc[u];
}			
lines[t]=li;
}
}
else{
asas=sliceheight-1;
//if(oold==1){
//asas=1;
//}
for(t=0;t<linesx.length;t++){
li=new Array();
rj=new Array();
ccoocc=linesx[t];
for(u=0;u<ccoocc.length;u++){
rj[u]=ccoocc[u];
}
for(u=0;u<rj.length;u++){
li[(rj.length-u-1)]=ccoocc[u];
}			
lines[t]=li;
}
}
}
tergRuleE++;
}
var oootins=Math.ceil(200*Math.random());
var xdirsx=new Array();
var ydirsy=new Array();
var zdirsz=new Array();
var oosx=new Array();
var oosy=new Array();
var okkkx=new Array();
var okkky=new Array();
var mmmmx=new Array();
var mmmmmy=new Array();
gdGameF=0;
oold=1;
var ontell=0;
var ollines=new Array();
for(t=0;t<(sliceheight+0);t++){
li=new Array();
for(u=0;u<(slicelenth+0);u++){
if(Math.random()>.5){
li[u]=true;
}
else{
li[u]=false;
}
}			
ollines[t]=li;
}
asas=sliceheight+0;
//if(oold==1){
//asas=2;
//}
for(t=0;t<1;t++){
li=new Array();
cc=ollines[t];
for(u=0;u<(slicelenth+0);u++){
li[u]=cc[u];
if(li[u]){
oosx[gdGameF]=0;
mmmmx[gdGameF]=u;
okkkx[gdGameF]=u+Math.round((slicelenth+0)*Math.random());
oosy[gdGameF]=0;
mmmmmy[gdGameF]=t;
okkky[gdGameF]=t+Math.round((sliceheight+0)*Math.random());
t0=Math.round(-1+(2*Math.random()));
t1=Math.round(-1+(2*Math.random()));
t2=Math.round(-1+(2*Math.random()));
t0=-1;
if(Math.random()<.5){
t0=1;
}
t2=-1;
if(Math.random()<.5){
t2=1;
}
t1=-1;
if(Math.random()<.5){
t1=1;
}
xdirsx[gdGameF]=t0;
ydirsy[gdGameF]=t1;
zdirsz[gdGameF]=t2;
oosx[gdGameF]=u;
oosy[gdGameF]=t;
gdGameF++;
oootins++;
}
}
}
function plots(){	
}
function doStRuleF(){
for(v=0;v<oootins;v++){
unx=oosx[v]+xdirsx[v];
if(unx==mmmmx[v] || unx==okkkx[v]){
xdirsx[v]=xdirsx[v]*-1;	
}
else{
oosx[v]=unx;
}
uny=oosy[v]+ydirsy[v];
if(uny==mmmmmy[v] ||uny==okkky[v]){
ydirsy[v]=ydirsy[v]*-1;	
}
else{
oosy[v]=uny;
}
}
t=ontell%sliceheight;
li=new Array();
if(t==0){
cc=ollines[(sliceheight-1)];
}
else{
cc=ollines[t];
}
for(u=0;u<slicelenth;u++){
v=false;
for(c=0;c<oootins;c++){
ax=oosx[c];
ay=oosy[c];
if(ax==u && ay==t){
v=true;
}
}
if(v){
li[u]=true;
}
else{
li[u]=false;
}
}			
ollines[t]=li;
}
function  doStLive(){
res=new Array();
arr=lines[0];
ap=new Array();
for(b=0;b<slicelenth;b++){
ap[b]=arr[b];
}
res[0]=ap;
arr=lines[(lines.length-1)];
ap=new Array();
for(b=0;b<slicelenth;b++){
ap[b]=arr[b];
}
res[(lines.length-1)]=ap;
for(a=1;a<(sliceheight-3);a++){
arrb=lines[(a-1)];
arro=lines[(a+1)];
arr=lines[a];
ter=new Array();
for(b=1;b<(slicelenth-1);b++){
l=arr[(b-1)];
lb=arrb[(b-1)];
lo=arro[(b-1)];
r=arr[(b+1)]
rb=arrb[(b+1)];
ro=arro[(b+1)]
o=arro[b];
be=arrb[b];
c=arr[b];
living=0;
if(l==true){
living+=1;
}
if(lb==true){
living+=1;
}
if(lo==true){
living+=1;
}
if(r==true){
living+=1;
}
if(ro==true){
living+=1;
}
if(rb==true){
living+=1;
}
if(o==true){
living+=1;
}
if(be==true){
living+=1;
}
niw=c;
if(c==true && (living==0 || living==1)){
niw=false;
}
if(c==true && living>=4){
niw=false;
}
if(c==true &&( (living==2) || (living==3) )){
niw=true;
}
if(c==false &&(  (living==3) )){
niw=true;
}
ter[b]=niw;
}
ter[0]=arr[0];
ter[(slicelenth-1)]=arr[(slicelenth-1)];
res[a]=ter;
}
for(a=0;a<(sliceheight-3);a++){
ab=res[a];
sdf=new Array();
for(b=0;b<slicelenth;b++){
sdf[b]=ab[b];
if(ab[b]==false){
}
else{
}
}
lines[a]=sdf;
}
}
var nrspec=new Array();
sftyo=0;
a2=1;
cd=1;
c=0;
function numberTBAA(nr){ var neej=nr; cc=neej.toString(2); return cc;}
function reverseString(str) { var newString = ""; for (var i = str.length - 1; i >= 0; i--){ newString += str[i]; } return newString; }
var tels=sftyo;
var nrspecn=0;
var nrspecm=1;
a2=1;
cd=1;
c=0;
function numberTBAA(nr){ var neej=nr; cc=neej.toString(2); return cc;}
function reverseString(str) { var newString = ""; for (var i = str.length - 1; i >= 0; i--){ newString += str[i]; } return newString; }
var tels=sftyo;
a2=1;
cd=1;
c=0;
ret=0;
ret=0;
bb=8;
rete=0;
bb=0;
ret=0;
a2=1;
cd=1;
c=0;
rete=0;
bb=0;
ret=0;
nrspec=new Array();
for(t=1;t<Math.pow(2,16);t+=1){ fs=t.toString(2); fs2=reverseString(fs); sf=parseInt(fs2,2); ds=(sf/2)*Math.pow(-1, (sf%2)); sdd=ds&sf; bb+=sdd; nrspec[rete]=bb; rete++; ret++; }

/*
for(t=0;t<Math.pow(2,16);t+=1){
fs=t.toString(2);
fs2=reverseString(fs);
sf=parseInt(fs2,2);
ds=(sf/2)*Math.pow(-1, (sf%2));
sdd=ds&sf;
bb+=sdd;
if((bb>Math.pow(2,4) && bb<Math.pow(2,7)) || (bb>Math.pow(2,16) && bb<Math.pow(2,17))){
if(!(ret==0 ||  ret==4 ||  ret==6 || ret==8 ||  ret==10 || ret==14 || ret==17 || ret==18 || ret==19 || ret==21 || ret== 22 || ret==23 || ret==2 || bb==35 || bb==38 || bb==49 || bb==54 || bb==79)){
nrspec[rete]=bb; 
rete++;			
}
ret++;
}		
}


*/
bb=0;
ret=rete;
var rule = 0;
var starting = "r";
var currstate, nextstate;
var timer;
var currrow = 0;
function doStRuleNr() {
doStep();
/*rege=nrspec[nrspecn];
rule_set(rege);
doStRuleNrc();

*/
}
function wow() {
var scroll = false;
if (!scroll || currrow < slicelenth - 1) {
currrow++;
currrow %= slicelenth;
} else {
tel++;
}
for (var i = 0; i < sliceheight; i++) {
if(nrspecm==1){
if(rule>127){
var l,ll, c, r,rr;
if (i == 0) {
l = false;
ll= false;	
c = currstate[0]; 
r = currstate[1];
rr=currstate[2];
} 
else if(i==1){
ll=false;
l=currstate[0];
c=currstate[1];
r=currstate[2];
rr=currstate[3];
}
else if (i == sliceheight - 2) {
l = currstate[i-2]; 
ll=currstate[i-1];
c = currstate[i]; 
r = currstate[i+1];
rr=false;
}
else if (i == sliceheight - 1) {
l = currstate[i-1];
ll = currstate[i-2];
c = currstate[i]; 
r = false;
rr=false;
} else {
l = currstate[i-1]; 
ll=currstate[i-2];
c = currstate[i]; 
r = currstate[i+1];
rr=currstate[i+2]
}
var n = 0;
if (ll == true) n |= 16;
if (l == true) n |= 8;
if (c == true) n |= 4;
if (r == true) n |= 2;
if (rr == true) n |= 1;
}
else{
var l, c, r;
if (i == 0) {
l = false; c = currstate[0]; r = currstate[1];
} else if (i == sliceheight - 1)
{
l = currstate[i-1]; c = currstate[i]; r = false;
} else 
{
l = currstate[i-1]; c = currstate[i]; r = currstate[i+1];
}
var n = 0;
if (l == true) n |= 4;
if (c == true) n |= 2;
if (r == true) n |= 1;
nextstate[i] = (rule & Math.pow(2, n)) > 0;
}
}
if(nrspecm==2 ){
var l,lll, c, r,rrr;
if (i == 0) { l = false; ll= false; lll= false; c = currstate[i]; r = currstate[i+1]; rr=currstate[i+2]; rrr=currstate[i+3]; }
else if(i==1){ ll=false; lll=false; l=currstate[i-1]; c=currstate[i]; r=currstate[i+1]; rr=currstate[i+2]; rrr=currstate[i+3]; }
else if(i==2){ lll=false; ll=currstate[i-2]; l=currstate[i-1]; c=currstate[i]; r=currstate[i+1]; rr=currstate[i+2]; }
else if (i == sliceheight - 3) { l = currstate[i-1]; ll=currstate[i-2]; lll=currstate[i-3]; c = currstate[i]; r = currstate[i+1]; rr = currstate[i+2]; rrr = false; }
else if (i == sliceheight - 2) { l = currstate[i-1]; ll=currstate[i-2]; lll=currstate[i-3]; c = currstate[i]; r = currstate[i+1]; rr=false; rrr=false; }
else if (i == sliceheight - 1) { l = currstate[i-1]; ll = currstate[i-2]; lll = currstate[i-3]; c = currstate[i]; r = false; rr=false; rrr=false; }
else { l = currstate[i-1]; ll=currstate[i-2]; lll=currstate[i-3]; c = currstate[i]; r = currstate[i+1]; rr=currstate[i+2]; rrr=currstate[i+3]; }
var n = 0;
if (lll == true) n |= 64;
if (ll == true) n |= 32;
if (l == true) n |= 16;
if (c == true) n |= 8;
if (r == true) n |= 4;
if (rr == true) n |= 2;
if (rrr == true) n |= 1;
}
if(nrspecm==0){
var l, c, r;
if (i == 0) {
l = false; c = currstate[0]; r = currstate[1];
} else if (i == sliceheight - 1) {
l = currstate[i-1]; c = currstate[i]; r = false;
} else {
l = currstate[i-1]; c = currstate[i]; r = currstate[i+1];
}
var n = 0;
if (l == true) n |= 4;
if (c == true) n |= 2;
if (r == true) n |= 1;
}
nextstate[i] = (rule & Math.pow(2, n)) > 0;
}
fdd=lines[currrow];
for (var i = 0; i < sliceheight; i++){
currstate[i] = nextstate[i];
fdd[i]=nextstate[i];
}
lines[currrow]=fdd;
}
function doStRuleNrc(){
if(begs==0){
begs=1;
currstate = new Array(sliceheight);
nextstate = new Array(slicelenth);			
for (var i = 0; i < sliceheight; i++) {
switch (starting) {
case 'r':
if (Math.floor(Math.random() * 2))
currstate[i] = true;
else currstate[i] = false;
break;
}
}
currrow = -1;
}	
unpause();
}
function pause() {
}
function unpause() {
if(beggs==0){
for(n=0;n<1;n++){
beggs=1;
begs=1;
wow();
}
}
else{				wow();			
}
}
function rule_xor(num) {
rule ^= num;
}
function rule_set(num) {
rule = Math.floor(num % 256);
if(nrspec[cellunr]>255 ){
if(nrspecm==1){
rule = Math.floor(num % Math.pow(2,32));
}
if(nrspecm==2){
rule = Math.floor(num % Math.pow(2,64));
}
if(nrspecm==0){
rule = Math.floor(num % Math.pow(2,8));
}
}
}















var randomnr=.0831;
var ber=0;	
	
function initnr(){
tab="<table style='width:100%;height:100%;position:fixed;left:0;top:0' border=0 cellspacing=0 cellpadding=0>";
for(a=0;a<sliceheight;a++){
	ab=new Array();
	tab+"<tr>";
		for(b=0;b<slicelenth;b++){
			if(Math.random()>.5){
				ab[b]=true;
				tab+="<td id='x"+a+"y"+b+"' style='background-color:transparent'> </td>";
			}
			else{
				ab[b]=false;
				tab+="<td id='x"+a+"y"+b+"' style='background-color:black'> </td>";				
			}
		}
			lines[a]=ab;
			tab+="</tr>";

	}
	tab+="</table>";
	//document.getElementById('can').innerHTML=tab;
	

			rule__set(nrspec[Math.floor(Math.random()*nrspec.length)]);		

			currstate = new Array(sliceheight);
			nextstate = new Array(sliceheight);
			
	
			
			for (var i = 0; i < sliceheight; i++) {
				switch (starting) {
					case 'r':
						if (Math.floor(Math.random() * 2))
							currstate[i] = true;
						else currstate[i] = false;
						break;
				}
			}
			
	currrow = -1;

wopo();


for(v=0;v<(sliceheight+1);v++){
a=cccd;
if(a>=sliceheight){
cccd=0;
first=1;
}
a=cccd;
	io=Math.random();
	if(io<randomnr){
				for (var i = 0; i < sliceheight; i++) {
				switch (starting) {
					case 'r':
						if (Math.floor(Math.random() * 2))
							currstate[i] = true;
						else currstate[i] = false;
						break;
				}
			}
			rule__set(nrspec[Math.floor(Math.random()*nrspec.length)]);
		
	}
res=new Array();
wopo();
rs=new Array();
for(a=0;a<currstate.length;a++){
rs[a]=currstate[a];
}
arss[teg]=rs;
teg++;
if(first==1){
	for(cc=(sliceheight-1);cc>=0;cc--){
	ab=arss[(arss.length-cc-1)];
	sdf=new Array();
		for(b=0;b<ab.length;b++){
		sdf[b]=ab[b];
	
		if(ab[b]==false){

		}
		else{
	
		}
	}
	lines[(sliceheight-1-cc)]=sdf;
}
}
cccd++;
			
}
}
var nrspec=new Array();
sftyo=0;



function numberTBAA(nr){
var neej=nr;
cc=neej.toString(2);
return cc;
}
function reverseString(str) {
    var newString = "";
    for (var i = str.length - 1; i >= 0; i--) {
        newString += str[i];
    }
    return newString;
}
a2=1;
cd=1;
c=0;

var cccd=0;
var teg=0;
var first=0;
var arss=new Array();
ret=0;
rete=0;
a2=1;
cd=1;
c=0;
rete=0;
bb=0;
ret=0;
for(t=0;t<Math.pow(2,16);t+=1){
		fs=t.toString(2);
		fs2=reverseString(fs);
		sf=parseInt(fs2,2);
		ds=(sf/2)*Math.pow(-1, (sf%2));
		sdd=ds&sf;
		bb+=sdd;
				tw=t-1;
			if((bb>Math.pow(2,4) && bb<Math.pow(2,7)) || (bb>Math.pow(2,16) && bb<Math.pow(2,17))){
				if(!(ret==0 ||  ret==4 ||  ret==6 || ret==8 ||  ret==10 || ret==14 || ret==17 || ret==18 || ret==19 || ret==21 || ret== 22 || ret==23 || ret==2 || bb==35 || bb==38 || bb==49 || bb==54 || bb==79)){
				nrspec[rete]=bb; 
				rete++;			
			}
			ret++;
		}		
}
bb=0;
ret=rete;
function removewithfilter(arr) { 
            let outputArray = arr.filter(function(v, i, self) 
            { 
                return i == self.indexOf(v); 
            });               
            return outputArray; 
        } 		
nrspec=removewithfilter(nrspec);
var begs=0;
var cellunr=Math.floor(nrspec.length*Math.random());
var rule = 0;
var starting = "r";
var currstate, nextstate;
var timer;
var currrow = 0;
	function wopo() {
			var scroll = false;					
			if (!scroll || currrow < slicelenth - 1) {
				currrow++;
				currrow %= slicelenth;								
			} else {
			}
			for (var i = 0; i < sliceheight; i++) {
	



			
			
				var l,ll, c, r,rr;
				if (i == 0) {
					l = false;
					ll= false;	
					c = currstate[0]; 
					r = currstate[1];
					rr=currstate[2];
				} 
				else if(i==1){
					ll=false;
					l=currstate[0];
					c=currstate[1];
					r=currstate[2];
					rr=currstate[3];
				}
				else if (i == sliceheight - 2) {
					l = currstate[i-2]; 
					ll=currstate[i-1]
					c = currstate[i]; 
					r = currstate[i+1];
					rr=false;
				}
				
				else if (i == sliceheight - 1) {
					l = currstate[i-1];
					ll = currstate[i-2];
					c = currstate[i]; 
					r = false;
					rr=false;
				} else {
					l = currstate[i-1]; 
					ll=currstate[i-2]
					c = currstate[i]; 
					r = currstate[i+1];
					rr=currstate[i+2]
				}
	
				var n = 0;
				if (ll == true) n |= 16;
				if (l == true) n |= 8;
				if (c == true) n |= 4;
				if (r == true) n |= 2;
				if (rr == true) n |= 1;
				
				nextstate[i] = (rule & Math.pow(2, n)) > 0;
				
			}
			
			for (var i = 0; i < sliceheight; i++)
				currstate[i] = nextstate[i];
			
			//lines[currrow]=currstate;
			
		}
		



		
function rule__xor(num) {
	rule ^= num;
}
		
function rule__set(num) {
		rule = num; 		
}				
function doStep(){
a=cccd;
if(a>=sliceheight){
cccd=0;
first=1;
}
a=cccd;
	io=Math.random();
	if(io<randomnr){
				for (var i = 0; i < sliceheight; i++) {
				switch (starting) {
					case 'r':
						if (Math.floor(Math.random() * 2))
							currstate[i] = true;
						else currstate[i] = false;
						break;
				}
			}
			rule__set(nrspec[Math.floor(Math.random()*nrspec.length)]);
		
	}
res=new Array();
wopo();
rs=new Array();
for(a=0;a<currstate.length;a++){
rs[a]=currstate[a];
}
arss[teg]=rs;
teg++;
if(first==1){
	for(cc=(sliceheight-1);cc>=0;cc--){
	ab=arss[(arss.length-cc-1)];
	sdf=new Array();
		for(b=0;b<ab.length;b++){
		sdf[b]=ab[b];
		//d=document.getElementById('x'+(sliceheight-1-cc)+'y'+(ab.length-1-b));
		if(ab[b]==false){
			//d.style.backgroundColor="transparent";
		}
		else{
		//d.style.backgroundColor="black";
		}
	}
	lines[(sliceheight-1-cc)]=sdf;
}
}
cccd++;

}



rrrui=window.location.href;

fwtuo=rrrui.split('style=');
if(fwtuo.length<2){
stylesga="experiment|asia|strings|hiphop|house|music|hardrock|piano|east|jazz|symfony|country|signal";
gasc=stylesga; gbs=gasc.split('|'); frg=gbs.length; fyu=magxrbffstyle; dgg=fyu%frg; genre=gbs[dgg]; magxrbffstyle++; 
}
else{
fsgrhh=fwtuo[1];
fgerght5=fsgrhh.split('&');
stylesga=fgerght5[0];
gasc=stylesga; gbs=gasc.split('|'); frg=gbs.length; fyu=magxrbffstyle; dgg=fyu%frg; genre=gbs[dgg]; magxrbffstyle++;
}

function initRulings(){

rrrui=window.location.href;

fwtuo=rrrui.split('style=');
if(fwtuo.length<2){
stylesga="experiment|asia|strings|hiphop|house|music|hardrock|piano|east|jazz|symfony|country|signal";
gasc=stylesga; gbs=gasc.split('|'); frg=gbs.length; fyu=magxrbffstyle; dgg=fyu%frg; genre=gbs[dgg]; magxrbffstyle++; 
}
else{
fsgrhh=fwtuo[1];
fgerght5=fsgrhh.split('&');
stylesga=fgerght5[0];
gasc=stylesga; gbs=gasc.split('|'); frg=gbs.length; fyu=magxrbffstyle; dgg=fyu%frg; genre=gbs[dgg]; magxrbffstyle++;
}
eastt=.85*.5*aaarba[Math.floor(Math.random()*aaarba.length)];
rrdft=Math.round(0+(5*Math.random()));
experimentt=Math.pow(.75, Math.round(Math.random()*3));
tc=new Array();
tc[0]=488280;
tc[1]=588680;
tc[2]=637680;
typo=0;
if(genre=="house"){
typo=100000;
}
if(genre=="signal"){
typo=380000;
}
masne++;
oldx=Math.floor(8000000+(Math.random()*8000000) );
varrir=Math.round(10*Math.random());
disra=4356+Math.round(((63374-4000)*Math.random()) );;
reeer = Math.round(3*Math.random());
reeers =Math.round(3*Math.random());
cr=1;	
nverh=0;
two2dgl=false;
volw=16;
chchrul=13;
liness=new Array();
lines=new Array();
cells="";
seed=1;
style=30;
ineensw=0;
isrest=false;
her=cfss[reeer];
oold=1; 
if(Math.random()<.5){
oold=Math.round(800000000*Math.random());
}
arw=new Array();
programRuling=0;
chchrul=13;
arw = new Array();
see=1;
chs=16;
slicelenth=32;
nh=21;
kanaa=10;
temppo=200;
starter=1200;
dosdos=0;
comm=com;
game="0";
is=new Array();
sliceheight=32;
com=0;
chnmsw= 0;
toness=new Array();
tones=new Array();
tonmin=0;
tonmax=59;
aants=0;
nrnr=0;
txts="";
zalbes = 1+Math.round(Math.random()*2);
styles=stylesga;
kl=styles.split('|');
if(kl.length<2){
gnn=stylesga;
genre=gnn;
}
else{
gnr = new Array();
fhh=stylesga;
fxss=fhh.split("|");
for(cg=0;cg<fxss.length;cg++){
        gnr[cg]=fxss[cg];
}
sfc=gnr.length;
fyu=magxrbff;
magxrbff++;
mag=fyu;
gu=(mag%sfc);
gnn=gnr[gu];
genre=gnn;
}
rrrui=window.location.href;
durted=rrrui.split('game=');
if(durted.length<2){
gamega="~|0|1|2|3|4|5|A|B|C|D|E|F"; gasc=gamega;
gbs=gasc.split('|');  frg=gbs.length; fyu=magxrbffgame; magxrbffgame++; dgg=fyu%frg; game=gbs[dgg]; }
else{
dgh=durted[1];
rtyy=dgh.split('&');
gamega=rtyy[0];
gasc=gamega;
gbs=gasc.split('|');  frg=gbs.length; fyu=magxrbffgame; magxrbffgame++; dgg=fyu%frg; game=gbs[dgg];
}
slh=new Array();
slh[0]=22;
slh[1]=42;
slh[2]=62;
slh[3]=82;
var slhe=new Array();
slhe[0]=32;
slhe[1]=42;
slhe[2]=52;
slhe[3]=62;
rbr=Math.round(Math.random()*2);
sliceheight=slh[rbr];
slh=new Array();
slh[0]=40;
slh[1]=50;
slh[2]=70;
slh[3]=90;
rbr=Math.round(Math.random()*2);
slicelenth=slh[rbr];
sliceheight=slh[rbr];
rnq=-500+Math.round(Math.random()*1500);
efq=rnq/10000;
preps=.74+(.1*Math.random()) 
prep=preps;

aa=100000+(Math.random()*300000)-100000;
ere=.747+(aa/4000000);
$ere=ere+.031;
prep=ere+.031;


dmkk=genresinstrument.split("<"+genre+">");
gdgdh=dmkk[1];
fsdgj=gdgdh.split("</"+genre+">");
hdkand=fsdgj[0];
ins00=hdkand.split("|");
ree0=ins00.length;
vg=new Array();
for(m=0;m<ins00.length;m++){
vg[m]=ins00[m];
}
vg=shufflet(vg);
if(vg.length>5){
pz=vg[0];
dx=vg[1];
puz=vg[2];
quz=vg[3];
zuz=vg[4];
zaz=vg[5];
}
else{
pz=vg[Math.floor(vg.length*Math.random())];
dx=vg[Math.floor(vg.length*Math.random())];
puz=vg[Math.floor(vg.length*Math.random())];
quz=vg[Math.floor(vg.length*Math.random())];
zuz=vg[Math.floor(vg.length*Math.random())];
zaz=vg[Math.floor(vg.length*Math.random())];
}
pronrs[0]=pz;
pronrs[1]=dx;
pronrs[2]=puz;
pronrs[3]=quz;
pronrs[4]=zuz;
pronrs[5]=zaz;
var channelnr=new Array();
nrnr=0;
texts="";
aants=0;	
zalbes = 1+Math.round(Math.random()*2);
lines=new Array();
if(genre=="east" || genre=="music"){
nverh=Math.round(-3+(Math.random()*4)); 
}
if(game=="~"){
two2dgl=true;
}
liness=new Array();
cells="";
style=30;
arw=new Array();
arw = new Array();
see=1;
chs=32;
nh=21;
kanaa=10;
temppo=200;
starter=1200;
cguu=new Array();
cguu[0]=4;
cguu[1]=8;
cguu[2]=16;
sliceslice=cguu[Math.floor(cguu.length*Math.random())];
colrop++;
is=new Array();
for(io=0;io<400000;io++){
is[io]=Math.random();
}
beggs=0;
cellunr=Math.floor(nrspec.length*Math.random());
tonmin=Math.round(1+(6*Math.random()));
tonmax=Math.round(14+(24*Math.random()));
nrspecm=1;
nrspecn=Math.floor(Math.random()*nrspec.length);
}
function ini(){
begs=0;
maxiss=0;
beggs=0;
if(gcount==4){
tonmin=8;
tonmax=40;
}
else{
tonmin=Math.round(1+(6*Math.random()));
tonmax=Math.round(14+(24*Math.random()));
}
arraRuleVal =new Array();
if(Math.random()>.85){
is=new Array();
for(io=0;io<400000;io++){
is[io]=Math.random();
}
}
f=0;
var toness=new Array();
var chnmsw= prep;






prepaa=prep;
if(gcount==4 && (genre=="house" || genre=="east" || genre=="music") ){
prepaa=.5;
}
for(i=0;i<(sliceheight+2);i++){
        a=new Array();
        for(j=0;j<(slicelenth+0);j++){
                f++;
                if(is[f]>.5){
                        a[j]=false;
                }
                else{
                        a[j]=true;
                }
				
				
						gb=Math.random()*10000000;
		rtfb=gb/10000000;

        
				if(rtfb>prep){
                        tones[j]=false;
                        toness[j]=0;
                }
                else{
                        tones[j]=true;
                        toness[j]=1;

                }
		}
        lines[i]=a;
	}
	initnr();
}
function ewas(){
}
function preloader() {
}
function ars(){
}
function ars(){
}
function doEv(){
	nee=liness[see];
	ne=nee[0];
	for(c=0;c<ne.length;c++){
		arw[c]=!ne[c];
	}
}
var kwrthu = new Array();
kwrthu[0]=36;
kwrthu[2]=35;
kwrthu[1]=37;
kwrthu[3]=38;
dxvv="37|36|40|44";
derft=dxvv.split('|');
fdb=0;
for(bnoo=0;bnoo<32;bnoo++){
for(bat=0;bat<derft.length;bat++){
kwrthu[fdb]=derft[bat];
fdb++;
}
}
function hodru(fd){
return kwrthu[fd];
}
var kwzww = new Array();
kwzww[1]=34;
kwzww[3]=35;
kwzww[0]=36;
kwzww[2]=61;
kwzww[4]=64;
kwzww[5]=30;
function hidru(fd){
return kwzww[(fd%kwzww.length)];
}




var kwzwwr = new Array();
kwzwwr[1]=35;
kwzwwr[3]=44;
kwzwwr[0]=44;
kwzwwr[2]=37;
kwzwwr[4]=59;
kwzwwr[5]=44;
kwzwwr[6]=67;

function druco(fd){
return kwzwwr[(fd%kwzwwr.length)];
}




var daaxav=new Array();
fdb=0;
tegt=0;
var edaax=new Array();
for(fcdt=0;fcdt<12;fcdt++){
edaax[0]=35;
edaax[1]=36;
edaax[2]=42;
edaax[3]=44;
edaax[4]=42;
edaax[5]=44;
edaax[6]=61;
edaax[7]=62;
edaax[8]=82;
for(vtr=0;vtr<edaax.length;vtr++){
        daaxav[tegt]=edaax[vtr];
        tegt++;
}
}
function eadru(fd){
return daaxav[fd];
}
function druu(i){
	hsz=(i%(48-34));
	return (hsz+34);
}
function druue(i){
        hsz=(i%(49-34));
        return (hsz+34);
}
function pri(datai){
see++;
	if(see<sliceheight){
	doEv();
	lb=0;    
	rb=0;
	la=arw[0];
	inr=0;		
	var va ="";
	rl=0;
	for(r=0;r<arw.length;r++){

		if((arw[r]==false && la==false) || (arw[r]==true && la==true)){

			if(rb>0 || (r+10)>=arw.length){
			}
			else{
				rb++;
			}			
		}
		else{
if(arw[r]==true && rb>0 ){
if(gcount==4){
tmodr=34;
}
else{
tmodr=46;
}
vvoll=100;
nnotte=0+((tmodr+see+nverh));
if(gcount==4){
nnotte=druu(see);
vvoll=110;
}

tmpu=temppo;
if(genre=="hiphop" && gcount==4){
        nnotte=hidru(see);
        tmpup=Math.round(hiphopt*4);
        tmpu=tmpup*50;
        vvollh=vvoll;
        if(nnotte==30){
                vvoll=55;
        }
}
if(genre=="experiment" && gcount==4){
        nnotte=druue(see);
       tmpup=Math.round(experimentt*4);
        tmpu=tmpup*50;
        vvollh=vvoll;
        if(nnotte==30){
                vvoll=55;
        }
}
if((genre=="east" || genre=="music") && gcount==4){
        nnotte=eadru(see);
        tmpup=Math.round(eastt*4);
        tmpu=tmpup*50;
}
if(genre=="house" && gcount==4){
        nnotte=druu(see);
        tmpup=Math.round(houset*4);
        tmpu=tmpup*50;
}
if(genre=="country" && gcount==4){
        nnotte=druco(see);
        tmpup=Math.round(countryt*4);
        tmpu=tmpup*50;
}

if(genre=="jazz" && gcount==4){
        nnotte=druu(see);
        tmpup=Math.round(jazzt*4);
        tmpu=tmpup*50;
}
if(gcount==3 || gcount==1 ){
   vvoll=65;
}
if((masne%3)==1){
if(gcount==5 && (aants%4)<1)
{
vvoll=0;
}
if(gcount==1 && (aants%4)>2)
{
vvoll=0;
}
if(gcount==2 && (aants%3)>0)
{
vvoll=0;
}
}
if((masne%3)==0){
if(gcount==2 && (aants%3)==0){
vvoll=0;
}
if(gcount==1 && (aants%3)<2 ){
vvoll=0;
}
if(gcount==5 && (aants%3)==1){
vvoll=0;
}
if(gcount==3 && (aants%3)==2){
vvoll=0;
}
}
if((masne%3)==2){
if(gcount==5 && (aants%5)<3)  {
vvoll=0;
}
if(gcount==1 && (aants%4)<zalbes && aants>1){
vvoll=0;
}
if( gcount==2 && ( (aants%5)==0 || (aants%5)==2 || (aants%5)==4)){
vvoll=0;
}
if(gcount==3 ){
}
}
ineensw++;
fdgh=(rl*tmpu);
if(!isNaN(fdgh)){


va=va+" "+(rl*tmpu)+" On ch="+chchrul+" n="+nnotte+" v="+vvoll+"<br>";
va=va+" "+((rl*tmpu)+tmpu)+" Off ch="+chchrul+" n="+nnotte+" v=0<br>";





}
rb=1;
rl=r;
}
rb=1;
}		
la=arw[r];		
}
data=datai+va;
return pri(data);
}
else{
return datai; 
}
}
function pris(){
ars();
arw = new Array();
see=1;
chs=16;                                                                                                   ;
nh=4;
kanaa=13;
kanaa=13;
starter=1200;
ars();
dappw=pri("");
txt="";
for(nsd=1;nsd<slicelenth;nsd++){
redrdw=dappw.split('<br>');
for(cft=0;cft<redrdw.length;cft++){       
	fcxx=redrdw[cft];
        cxxx=" "+(nsd*temppo);
                vcxx=cxxx+" O";
                xcxx=fcxx.split(vcxx);
                if(xcxx.length>1){
                        for(fxx=0;fxx<xcxx.length;fxx++){
                        txt=txt+fcxx+"<br>";
                        }
                }
        }
}
fs=txt.split("<br>");
dcc="";
for(n=0;n<fs.length;n+=2){
dsad=fs[n];
dcc=dcc+dsad.trim()+"<br>";
}
return dcc;
}
function plotno(){
}
ioxo=0; 
var busy = false;
function draw_row() {
	dosdos++;
	bb="";
if(genre=="house"){
}
if(game=="0"){
doStRuleNr();
}
if(game=="1"){
doStRuleNr();
}
if(game=="2"){
doStRuleNr();
}
if(game=="3"){
doStRuleNr();
}
if(game=="4"){
doStRuleNr();
}
if(game=="5"){
doStRule5()
}
if(game=="A"){
doStRuleA();
}
if(game=="B"){
doStRuleAPLUS();
}
if(game=="C"){
doStRuleC();
}
if(game=="D"){
doStRuleD();
}
if(game=="E"){
doStRuleE();
}
if(game=="F"){
doStRuleF();
}
if(game=="~"){
doStLive();
}
for(mioio=0;mioio<sliceheight;mioio++){
lll=new Array();
ins=lines[mioio];
for(k=0;k<ins.length;k++){
f=ins[k];
lll[k]=false;
if(f==true){
if(tones[mioio]==false  && ( gcount==4 || (k>tonmin && mioio<tonmax) ) ){
lll[k]=true;
}
}
}
liness[mioio]=new Array(lll, 3);
}
maxs=8000;
daa="";
daaa="";
nh=13;
daa=pris();
dfsf=true;
dfdfb=daa.split('<br>');
lastxx=""+dfdfb[(dfdfb.length-3)];
nrt=parseInt(lastxx);
for(fk=0;fk<(dfdfb.length-2);fk++){
next=dfdfb[fk];
cxc=next.split(' ');
startnr=""+cxc[0];
nrnrz=parseInt(startnr);
sas="";
for(f=1;f<cxc.length;f++){
sas=sas+" "+cxc[f]+"";
}
nopet=0;
datas=(nrnrz+nrnr+(aants*0));
dsfgi=(nrnrz+nrnr+(aants*0));
if(!isNaN(dsfgi)){
daaa=daaa+(nrnrz+nrnr+(aants*0))+""+sas+"\n";
datas=(nrnrz+nrnr+(aants*0));
}
}
nrnr+=nrt;
txts=txts+daaa;
aants++;
volwe=volw;




if(genre=="hiphop" && gcount==4){

volwe=volw/hiphopt;
}
if(genre=="experiment" && gcount==4){

		
		volwe=volw/experimentt;
		
}
if((genre=="east" || genre=="music") && gcount==4){
	volwe=volw/eastt;
}
if(genre=="house" && gcount==4){
	volwe=volw/houset;
}


if(genre=="jazz" && gcount==4){
	volwe=volw/jazzt;
}

if(genre=="country" && gcount==4){
	volwe=volw/countryt;
}


if(aants<volwe){
if(Math.random()<.125){
nverh=Math.round(-8+(Math.random()*16));
if(genre=="east" || genre=="music"){
nverh=Math.round(-3+(Math.random()*4)); 
}
}
mtel=0;
mtel=0;
mioio=sliceheight;
return draw_row();
}
else{
mioio=sliceheight;
pp=programRuling;
preg="MTrk\n0 PrCh ch="+chchrul+" p="+programRuling+"\n";
fjkdd=txts.split('\n');
if(fjkdd.length>5){
fshhh=fjkdd[(fjkdd.length-2)];
klkl=fshhh.split(' ');
dindsf=klkl[0];
eap3=dindsf+" Meta TrkEnd\nTrkEnd\n";
daters=preg+txts+eap3;
bd="";
fggp=document.getElementById('collect').value;
if(gcount==0){
}
else{
document.getElementById('collect').value=fggp+preg+txts+eap3;
}
}
}
}
var cannext=false;
var atrak=0;
var axmlhttp = new XMLHttpRequest();
function capsave(){


if (axmlhttp.readyState==4 && axmlhttp.status==200){
cannext=false;
parent.trackcountt=atrak;
atrak++;
render();
}
if (axmlhttp.readyState==4 && axmlhttp.status!=200){
cannext=false;
magxrbffstyle--;
render();
}




}


function saveRule(){
sghj=document.getElementById('collect').value;

fdgh=sghj.split("MTrk");
gfh=fdgh[2];
hdg=gfh.split('\n');
ldskhg=hdg[(hdg.length-5)];
gtry=ldskhg.split(' ');
tijdje=parseInt(gtry[0]);


vertt=tempoose;
if(Math.random()<.25){
vertt=Math.floor(3/4*tempoose);
}

data = "data="+document.getElementById('collect').value+"|"+randos;
data=data.replace("tempoos", tempoose);


axmlhttp = new XMLHttpRequest();
axmlhttp.onreadystatechange=capsave;
do3=true;
if(do3==true){
axmlhttp.open("POST","xconst.xc2.php",true);
axmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
axmlhttp.send(data);
//render();
}
else{
//render();
}
/*
bd=document.getElementById('bd');

bd.innerHTML="<form    action='xconst.xc.php' id='thef' method='post'><input type='hidden' name='data' value='"+document.getElementById('collect').value+"|"+randos+"'></form>";
d=document.getElementById('thef');
d.submit();

*/

}
function start(){
draw_row();
}
function init() {
mtel=0;
liness=new Array();
if(two2dgl==false){
if(game!="~"){
for(f=0;f<seed;f++){ 
}
}
}	
start();	
}
function render(){
if(cannext==false ){
cannext=true;

dmkk=genresinstrument.split("<"+genre+">");
gdgdh=dmkk[1]; gdgdh=dmkk[1]; fsdgj=gdgdh.split("</"+genre+">"); hdkand=fsdgj[0]; ins00=hdkand.split("|");
ree0=ins00.length; vg=new Array(); for(m=0;m<ins00.length;m++){ vg[m]=ins00[m]; }
vg=shufflet(vg); if(vg.length>5){
fsgd=hdkand.split('|');
aae=fsgd[Math.floor(fsgd.length*Math.random())];
pz=aae;
aae=fsgd[Math.floor(fsgd.length*Math.random())];
dx=aae;
aae=fsgd[Math.floor(fsgd.length*Math.random())];
puz=aae;
aae=fsgd[Math.floor(fsgd.length*Math.random())];
quz=aae;
aae=fsgd[Math.floor(fsgd.length*Math.random())];
zuz=aae;
aae=fsgd[Math.floor(fsgd.length*Math.random())];
zaz=aae;
}
else{
pz=vg[Math.floor(vg.length*Math.random())];
dx=vg[Math.floor(vg.length*Math.random())];
puz=vg[Math.floor(vg.length*Math.random())];
quz=vg[Math.floor(vg.length*Math.random())];
zuz=vg[Math.floor(vg.length*Math.random())];
zaz=vg[Math.floor(vg.length*Math.random())];
}
pronrs[0]=pz;
pronrs[1]=dx;
pronrs[2]=puz;
pronrs[3]=quz;
pronrs[4]=zuz;
pronrs[5]=zaz;








ishoutel=0;
var twc=new Array();
twc[0]=488280;
twc[1]=588680;
twc[2]=637680;
typo=0;
if(genre=="house"){
typo=100000;
}
if(genre=="signal"){
typo=315000;
}
tempoos=twc[Math.floor(twc.length*Math.random())]-typo;
document.getElementById('collect').value="MkFile 0 1 480\nMTrk\n0 Tempo tempoos\n0 Meta TrkEnd\nTrkEnd\n";


initRulings();


fder=window.location.href;
gaee=fder.split('ins=');
if(gaee.length>1){
	cfrtw=gaee[1];
	sdgss=cfrtw.split('&');
	cfrt=sdgss[0];
	vsdgh=cfrt.split('|');
	if(vsdgh.length>1){
		pz=vsdgh[0];
		pronrs[0]=vsdgh[0];
	}

	if(vsdgh.length>2){
		dx=vsdgh[1];
		pronrs[1]=vsdgh[1];
	}

	if(vsdgh.length>3){
		puz=vsdgh[2];
		pronrs[2]=vsdgh[2];
	}

	if(vsdgh.length>4){
		quz=vsdgh[3];
		pronrs[3]=vsdgh[3];
	
	}

	if(vsdgh.length>5){
		zuz=vsdgh[4];
		pronrs[4]=vsdgh[4];
	
	}
	
	if(vsdgh.length>6){
		zaz=vsdgh[5];
		pronrs[5]=vsdgh[5];
	
	}
	
	
	

	
}


vijft=0;
beggii=0;
if(genre=="signal"){
beggii=4;
}


var twcer=new Array();
twcer[0]=488280;
twcer[1]=588680;
twcer[2]=637680;
typow=0;
if(genre=="house"){
typow=100000;
}
if(genre=="signal"){
typow=315000+Math.round(20000*Math.random());
}

tempoose=twcer[Math.floor(twcer.length*Math.random())]-typow;



if(genre=="piano"){
beggii=3;
}

if(genre=="hiphop"){
beggii=2;
}

if(genre=="symfony"){
beggii=1;
}


for(egcount=beggii;egcount<6;egcount++){
gcount=(egcount-0);
ini();
dosdos=0;
aants=0;
txts="";
nrnr=0;
datas=0;
nrnrz=0;
nrnr=0;
nrt=0;
gcount=egcount;
gcount=egcount;
chchrul=chall[egcount];
programRuling=pronrs[egcount];
if(gcount==4 ){
chchrul=10;
programRuling=0;
}
if((genre=="ambient" || genre=="piano" || genre=="strings" || genre=="asia" || genre=="symfony"  || genre=="signal" ) && gcount==4){
chchrul=16;
programRuling=pronrs[vijft];
}
if(gcount>0){
vijft++;
}
if(genre=="signals"){
}
else{
init();
}
}
saveRule();
//setTimeout("render()",30000);
}
else{
//setTimeout("render()",30000);
}
}

function sendb(sb){
sa="<iframe srcdoc=\"<form action='xconst.xc.php' method='post' id='theef'  onload='submit()'><input type='hidden' name='data' value='"+sb+"'><input type='submit' id='theeef'></form>\"></iframe>";

}
</script>


</body>
</html>

