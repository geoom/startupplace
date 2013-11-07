@echo off
color 30
set inFile=assets\css\startupplace.css
set outFile=assets\css\startupplace.min.css
echo "compress startupplace.css"
start java -jar yuicompressor-2.4.7.jar %inFile% -o %outFile%
sleep 1
exit