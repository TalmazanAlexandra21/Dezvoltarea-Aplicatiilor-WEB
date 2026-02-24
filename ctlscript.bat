@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\Users\ASUS\Desktop\DAW\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\ingres\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\ingres\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\mysql\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\mysql\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\postgresql\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\apache\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\apache\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\openoffice\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\apache-tomcat\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\resin\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\resin\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\jetty\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\jetty\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\subversion\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\Users\ASUS\Desktop\DAW\lucene\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\lucene\scripts\ctl.bat START)
if exist C:\Users\ASUS\Desktop\DAW\third_application\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\Users\ASUS\Desktop\DAW\third_application\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\third_application\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\lucene\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\Users\ASUS\Desktop\DAW\subversion\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\subversion\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\jetty\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\jetty\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\resin\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\resin\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\Users\ASUS\Desktop\DAW\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\openoffice\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\apache\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\apache\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\ingres\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\ingres\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\mysql\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\mysql\scripts\ctl.bat STOP)
if exist C:\Users\ASUS\Desktop\DAW\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\ASUS\Desktop\DAW\postgresql\scripts\ctl.bat STOP)

:end

