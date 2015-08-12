<?php

require 'bat_config.php';
require 'db_connect_copy.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
$truncstmt=$dbc->prepare('TRUNCATE ad_list');
$truncstmt->execute();
$items = [
    ['item_name'=> 'grappling gun', 
    'price'=> '56857', 
    'description'=>'One of Batman\'s most basic gadgets 
    is his grappling gun, which allows him to repel down
     buildings with the greatest of ease or sky rocket himself 
     to the top with the simple pull of a trigger.', 
    'used_against'=>'tall buildings',
    'bat_condition'=>'decent',
    'generation'=>'all',
    'image'=>'grappling-gun.jpg'],
    ['item_name'=>'batarang',
    'price'=>'3462',
    'description'=>'Another one of the more simple -- 
    but definitely effective -- tools in Batman\'s 
    arsenal is the ol\' Batarang, used to disarm his 
    foes or knock \'em in the head, or even to dislodge 
    crucial items. The Batarang has been integral to 
    Batman\'s body of work for many years, becoming
     sleeker and more efficient over time.',
     'used_against'=>'enemies',
     'bat_condition'=>'excellent',
     'generation'=>'4th',
     'image'=>'batarang.jpg'],
     ['item_name'=>'bat_signal',
     'price'=>'735',
     'description'=>'Perhaps the most crucial element 
     to Batman\'s crime fighting (besides that awesome 
     brain of his, and Alfred) is the bat signal. 
     Commissioner Gordon uses it to call upon Batman when 
     he\'s desperately needed to fight crime, and without it, 
     Batman would be sitting at home, watching TV, blissfully
     unaware that his city needs help.',
     'used_against'=>'enemies',
     'bat_condition'=>'excellent',
     'generation'=>'2nd',
     'image'=>'bat-signal.jpg']
];
    

$stmt = $dbc->prepare('INSERT INTO ad_list (item_name, price, description, used_against, bat_condition, generation, image)
                        VALUES (:item_name, :price, :description, :used_against, :bat_condition, :generation, :image)');

foreach ($items as $item){
    $stmt->bindValue(':item_name', $item['item_name'], PDO::PARAM_STR);
    $stmt->bindValue(':price', $item['price'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $item['description'], PDO::PARAM_STR);
    $stmt->bindValue(':used_against', $item['used_against'], PDO::PARAM_STR);
    $stmt->bindValue(':bat_condition', $item['bat_condition'], PDO::PARAM_STR);
    $stmt->bindValue(':generation', $item['generation'], PDO::PARAM_STR);
    $stmt->bindValue(':image', $item['image'], PDO::PARAM_STR);
    
    $stmt->execute();
    
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}