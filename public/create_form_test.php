<?php

require_once '../bat_config.php';
require_once '../db_connect_copy.php';
require_once '../Input_copy.php';
require_once 'bat_login.php';
// require_once "ad.show.php";

$query = ("SELECT * FROM ad_list");
$stmt = $dbc->prepare($query);
$stmt->execute();

if(isset($_SESSION['LOGGED_IN_USER'])){
    if($_SESSION['LOGGED_IN_USER']){
        $setUser = $_SESSION['USERNAME'];
        $userQuery = ("SELECT user_id FROM bat_user WHERE user_name = '$setUser'");
        $idStmt = $dbc->prepare($userQuery);
        $idStmt->execute();
        $userVerify = $idStmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($userVerify);
    }
}
//bind


$items = $stmt->fetchAll(PDO::FETCH_ASSOC);


if(Input::has('item_name')){
    if($_FILES) {
        $uploads_directory = 'img/uploads/';
        $filename = $uploads_directory . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $filename)) {
            // echo '<p>The file '. basename( $_FILES['image']['name']). ' has been uploaded.</p>';
        } else {
            //alert("Sorry, there was an error uploading your file.");
        }

    
  

    $item_name = Input::getString('item_name');
    $price = Input::get('price');
    $used_against = Input::getString('used_against');
    $bat_condition = Input::getString('bat_condition');
    $generation = Input::get('generation');
    $description = Input::getString('description');
    // $user_id = 1;




    $insertQuery = "INSERT INTO ad_list (item_name, price, description, used_against, bat_condition, generation, image, user_id)
            VALUES (:item_name, :price, :description, :used_against, :bat_condition, :generation, :image, :user_id)";
    $stmt=$dbc->prepare($insertQuery);

    
    $idGrab = $userVerify['0']['user_id'];


    $stmt->bindValue(':item_name', $item_name, PDO::PARAM_STR);
    $stmt->bindValue(':price', $price, PDO::PARAM_STR);
    $stmt->bindValue(':used_against', $used_against, PDO::PARAM_STR);
    $stmt->bindValue(':bat_condition', $bat_condition, PDO::PARAM_STR);
    $stmt->bindValue(':generation', $generation, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);
    $stmt->bindValue(':image', $filename, PDO::PARAM_STR);
    $stmt->bindValue(':user_id', $idGrab, PDO::PARAM_STR);

    $stmt->execute();







}else{
    $errorMessage = "Please fill out all fields to add an item.";
    $exceptionError = "input item_name";
}

}
?>
