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
  user_id INT unsigned NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES bat_user (user_id)
)";

$dbc->exec($add);



