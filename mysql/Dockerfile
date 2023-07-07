FROM mysql

# Lade die Umgebungsvariablen aus der .env-Datei
ARG MYSQL_ROOT_PASSWORD
ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_PASSWORD

# Setze die Umgebungsvariablen im Container
ENV MYSQL_ROOT_PASSWORD $MYSQL_ROOT_PASSWORD
ENV MYSQL_DATABASE $MYSQL_DATABASE
ENV MYSQL_USER $MYSQL_USER
ENV MYSQL_PASSWORD $MYSQL_PASSWORD

# Kopiere das Bash-Skript in den Container
COPY execute_sql.sh /docker-entrypoint-initdb.d/execute_sql.sh

# Erlaube das ausführen des Scripts
RUN chmod 777 /docker-entrypoint-initdb.d/execute_sql.sh

# Kopiere das SQL-Skript in den Container
COPY init.sql /docker-entrypoint-initdb.d/init.sql

# Starte das Skript vor dem MySQL-Server
CMD ["/docker-entrypoint-initdb.d/execute_sql.sh"]

# Starte den MySQL-Server
CMD ["mysqld"]
