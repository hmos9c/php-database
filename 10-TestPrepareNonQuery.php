<?php

require_once __DIR__ . '/3-GetConnection.php';

$connection = getConnection();

$username = "akmal";
$password = "rahasia";

$sql = "INSERT INTO admin(username, password) VALUES (:username, :password)";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$connection = null;
