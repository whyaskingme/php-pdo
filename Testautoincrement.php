<?php

require_once __DIR__ . "/Getconnection.php";

$Connection = getConnection();

$Connection->exec("INSERT INTO coments (email, coment) VALUES ('ekotest@gmail.com','hi')");
$id = $Connection->lastInsertId();

echo $id . PHP_EOL;

$Connection = null;