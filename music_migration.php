<?php 
define("DB_HOST",'127.0.0.1');
define("DB_NAME", 'musicians_db');
define("DB_USER", 'codeup');
define("DB_PASS", 'yes');
require 'db_connect.php';
// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$dbc->exec('DROP TABLE IF EXISTS `musicians`');
$add = "CREATE TABLE musicians(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(240) NOT NULL,
    last_name VARCHAR(240) NOT NULL,
    instrument DATE NOT NULL,
    email VARCHAR,
    description TEXT NOT NULL,
    PRIMARY KEY(id)
    );";
$dbc->exec($add);