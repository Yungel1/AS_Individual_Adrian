CREATE DATABASE home;
CREATE TABLE IF NOT EXISTS home.people(
 name varchar(200),
 email varchar(200)
);	
CREATE USER 'username' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'username';