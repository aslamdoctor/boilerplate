#! /bin/bash

mysql -u admin -padmin $1 < database.sql
