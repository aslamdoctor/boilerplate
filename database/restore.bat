@echo off
:start
mysql -u root -p boilerplate_v2 < database.sql
pause