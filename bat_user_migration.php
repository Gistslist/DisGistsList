<?php

require_once 'bat_config.php';
require_once 'db_connect_copy.php';

$dbc->exec('DROP TABLE IF EXISTS `bat_user`');
$add = "CREATE TABLE bat_user (
  user_id INT unsigned AUTO_INCREMENT NOT NULL,
  first_name VARCHAR(250) NOT NULL,
  last_name VARCHAR(250) NOT NULL, 
  user_name VARCHAR(250) NOT NULL,
  password  VARCHAR(250) NOT NULL,
  email VARCHAR(250) NOT NULL,
  PRIMARY KEY(user_id),
  UNIQUE (first_name, last_name, email, user_name)

  );";
$dbc->exec($add);




