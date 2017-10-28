@echo off
:start
mysqldump -u root -p boilerplate > database.sql
pause