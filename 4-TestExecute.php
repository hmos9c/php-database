<?php

require_once __DIR__ . '/3-GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('febriyan', 'febriyan', 'febriyan@test.com');
SQL;

$connection->exec($sql);

$connection = null;
