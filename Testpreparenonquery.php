<?php

require_once __DIR__ . "/Getconnection.php";

$connection = getConnection();

$username = "ucup";
$password = "rahasia";


$sql = "INSERT INTO admin(username, password) Values(:username, :password)";
$prepareStatement = $connection ->prepare($sql);
$prepareStatement->bindParam("username", $username);
$prepareStatement->bindParam("password", $password);
$prepareStatement->execute();

$connection = null;