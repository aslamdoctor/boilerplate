@echo off
:start
mysql -u root -p boilerplate < database.sql
pause