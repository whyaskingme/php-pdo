<?php

require_once __DIR__ . "/Getconnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('Ekotest@gmail', 'HI')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Ekotest@gmail', 'HI')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Ekotest@gmail', 'HI')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Ekotest@gmail', 'HI')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('Ekotest@gmail', 'HI')");

$connection->commit();
$connection = null;