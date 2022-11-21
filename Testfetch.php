<?php

require_once __DIR__ . "/Getconnection.php";

$connection = getConnection();

$username = "ucup";
$password = "rahasia";


$sql = "SELECT * FROM admin WHERE username = :username 
AND password = :password ";
$fetchStatement = $connection-> prepare($sql);
$fetchStatement->bindParam("username", $username);
$fetchStatement->bindParam("password", $password);
$fetchStatement->execute();

if ($row = $fetchStatement->fetch()) {
    echo "Sukses login : " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

 

$connection = null;