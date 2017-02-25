@echo off
:start
mysqldump -u root -p boilerplate_v2 > database.sql
pause