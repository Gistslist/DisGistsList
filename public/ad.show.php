<?php
require_once '../bat_config.php';
require_once '../db_connect_copy.php';
require_once '../Input_copy.php';


// $limit = 6;
// $offset = (($_GET['page']-1) * $limit);

// $count = $dbc->query("SELECT count(*) FROM ad_list");
// $columnCount = $count->fetchColumn();
// $maxpage = ceil($columnCount / $limit);

// if ($_GET['page'] > $maxpage || !is_numeric($_GET['page']) || $_GET['page'] < 1){
// 	header("location: ?page=$maxpage");
// 	exit();
// }

$stmt = $dbc->prepare('SELECT * FROM ad_list'); 
// $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
// $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

