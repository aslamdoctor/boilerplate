#! /bin/bash

mysqldump -u admin -padmin $1 > database.sql
