
<?php
require_once 'bat_config.php';
require_once 'db_connect_copy.php';

$dbc->exec('DROP TABLE IF EXISTS `ad_list`');
$add = "CREATE TABLE ad_list (
  id INT unsigned AUTO_INCREMENT NOT NULL,
  item_name VARCHAR(250) NOT NULL,
  price INT NOT NULL,
  description text NOT NULL,
  used_against VARCHAR(250) NOT NULL,
  bat_condition VARCHAR(250) NOT NULL,
  generation VARCHAR(250) NOT NULL,
  image VARCHAR(250),
  
  PRIMARY KEY (id)
);";
$dbc->exec($add);



$dbc->exec('DROP TABLE IF EXISTS `bat_user`');
$add = "CREATE TABLE bat_user (
  id INT unsigned AUTO_INCREMENT NOT NULL,
  user_name VARCHAR(250) not NULL,
  password  VARCHAR(250) NOT NULL,
  email VARCHAR(250) NOT NULL,

  PRIMARY key(id)
  );";
$dbc->exec($add);
