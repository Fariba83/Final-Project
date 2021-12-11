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

 ?>