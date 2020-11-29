FROM mysql:8.0.22

ENV MYSQL_ALLOW_EMPTY_PASSWORD="yes"
COPY setup.sql /docker-entrypoint-initdb.d/
