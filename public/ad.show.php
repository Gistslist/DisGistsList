<?php
require_once '../bat_config.php';
require_once '../db_connect_copy.php';
require_once '../Input_copy.php';


$stmt = $dbc->prepare('SELECT * FROM ad_list'); 

$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

