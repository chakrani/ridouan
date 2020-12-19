@echo off
mkdir tmp
cd sys
echo 1 > apache\logs\access.log 
echo 1 > apache\logs\error.log
start /min apache\bin\httpd.exe & ping 127.0.0.1 -n 4 > nul 
start "" "http://127.0.0.1?style=ishu|hardrock|asia|music|piano|house|ambient|hiphop|strings&game=5AFDE~ECB-BCE"

