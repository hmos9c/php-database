<?php

require_once __DIR__ . '/3-GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('akmal@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('akmal@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('akmal@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('akmal@test.com', 'hi')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('akmal@test.com', 'hi')");

$connection->rollBack();

$connection = null;
