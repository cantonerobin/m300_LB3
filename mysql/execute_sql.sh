#!/bin/bash

MYSQL_USER="root"
MYSQL_PASSWORD="$MYSQL_ROOT_PASSWORD"
MYSQL_DATABASE="$MYSQL_DATABASE"
SQL_SCRIPT="/docker-entrypoint-initdb.d/init.sql"

mysql -u "$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE" < "$SQL_SCRIPT"