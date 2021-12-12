<?php

// created this table in mysql workbench
USE register;
#drop table if exists users;
create table if not exists users (
user_id mediumint unsigned not null auto_increment,
firstname VARCHAR(100)  NOT NULL,
lastname VARCHAR(100)  NOT NULL,
email VARCHAR(100)  NOT NULL,
username VARCHAR(100)  NOT NULL,
passwordd VARCHAR(100)  NOT NULL,
primary key(user_id)
 );

 USE register;
 #drop table if exists userdata;
 CREATE TABLE if not exists userdata (
     dataID mediumint unsigned not null auto_increment,
     userName varchar(100) NOT NULL,
     couseName varchar(100) NOT NULL,
     taskName varchar(100) NOT NULL,
     dueDate varchar(100) NOT NULL,
   done varchar(100) NOT NULL,
    PRIMARY KEY(dataID)
 );

 // <!-- db connection -->
$db = mysqli_connect('localhost', 'root', '', 'register');



 ?>