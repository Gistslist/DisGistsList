<?php

require 'music_config.php';
require 'db_connect.php';


echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$truncstmt=$dbc->prepare('TRUNCATE musicians_page');
$truncstmt->execute();
$parks = [
    ['first_name'=> 'Tom', 
    'last_name'=> 'Young', 
    'instrument'=>'Guitar', 
    'genre'=>'jazz, reggae, funk, country, blues',
    'email'=>'tom@young.tom',
    'description'=>'Covering most of Mount Desert Island and other coastal islands, 
    Acadia features the tallest mountain on the Atlantic coast of the United States, 
    granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, 
    forest, and intertidal habitats.'],
    

$stmt = $dbc->prepare('INSERT INTO musicians_page (first_name, last_name, instrument, email, description)
                        VALUES (:first_name, :last_name, :instrument, :email, :description)');

foreach ($parks as $park){
    $stmt->bindValue(':first_name', $park['first_name'], PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $park['last_name'], PDO::PARAM_STR);
    $stmt->bindValue(':instrument', $park['instrument'], PDO::PARAM_STR);
    $stmt->bindValue(':email', $park['email'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
    
    $stmt->execute();
    
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}