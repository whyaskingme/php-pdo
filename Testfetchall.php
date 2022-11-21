<?php

require_once __DIR__ . "/Getconnection.php";

$Connection = getConnection();

$sql = "SELECT * FROM customers";
$statment = $Connection->query($sql);

$customers = $statment->fetchAll();

$Connection = null;