<?php

require_once __DIR__ . "/Getconnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, coment) VALUES ('ucuptest@gmail', 'HI')");
$connection->exec("INSERT INTO comments(email, coment) VALUES ('ucuptest@gmail', 'HI')");
$connection->exec("INSERT INTO comments(email, coment) VALUES ('ucuptest@gmail', 'HI')");
$connection->exec("INSERT INTO comments(email, coment) VALUES ('ucuptest@gmail', 'HI')");

$connection->rollBack();
$connection = null;