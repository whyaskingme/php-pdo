<?php

require_once __DIR__ . "/Getconnection.php";

$connection = getConnection();

$username = "eko";
$password = "rahasia";


$sql = "SELECT * FROM admin WHERE username = ? AND password = ? ";
$prepareStatement = $connection-> prepare($sql);
$prepareStatement->bindParam(1, $username);
$prepareStatement->bindParam(2, $password);
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