<?php
require './admin/db.php';
$name = $password = "";
if ($_SERVER['REQUEST_METHOD'] = "POST"){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $db = database::connect();
    $query = "SELECT * FROM user WHERE username =? AND password = ?";
    $statment = $db->prepare($query);
    $statment->execute(array($name,$password));
    $row = $statment->rowCount();
	$fetch = $statment->fetch();
   
    var_dump($row);
    if($row > 0){  
        session_start();
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $password;
        header('location: index.php');
        
    }else{
        header('location: login.php');
    }
}