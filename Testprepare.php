<?php

require_once __DIR__ . "/Getconnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin";


$sql = "SELECT * FROM admin WHERE username = :username 
AND password = :password ";
$prepareStatement = $connection-> prepare($sql);
$prepareStatement->bindParam("username", $username);
$prepareStatement->bindParam("password", $password);
$prepareStatement->execute();

$success = false;
$find_user = null;
foreach($prepareStatement as $row) {
    $success = true;
    $find_user = $row["username"];
}

if($success) {
    echo "sukses login : " . $find_user . PHP_EOL;
} else{
    echo "gagal Login" . PHP_EOL;
}

$connection = null;