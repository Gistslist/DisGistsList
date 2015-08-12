
<?php
require_once 'bat_config.php';
require_once 'db_connect_copy.php';

$dbc->exec('DROP TABLE IF EXISTS `ad_list`');
$add = "CREATE TABLE ad_list (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  item_name varchar(250) NOT NULL DEFAULT '',
  price int(250) NOT NULL,
  description text NOT NULL,
  used_against varchar(250) NOT NULL DEFAULT '',
  condition varchar(250) NOT NULL DEFAULT '',
  generation varchar(250) NOT NULL DEFAULT '',
  image varchar(250),
  
  PRIMARY KEY (id)
);";
$dbc->exec($add);



$dbc->exec('DROP TABLE IF EXISTS `bat_user`');
$add = "CREATE TABLE bat_user (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  user_name varchar(250) not NULL,
  password  varchar(250) NOT NULL,
  email varchar(250) NOT NULL,

  PRIMARY key(id)
  );";
$dbc->exec($add);
