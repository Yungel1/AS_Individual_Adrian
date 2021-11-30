FROM mysql:8
ENV MYSQL_DATABASE=home 
ENV MYSQL_ROOT_PASSWORD=root 
ENV MYSQL_USER=username
ENV MYSQL_PASSWORD=password

COPY scripts/start.sql /docker-entrypoint-initdb.d/
