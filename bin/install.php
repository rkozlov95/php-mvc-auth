<?php

require __DIR__ . '/../config/credentials.php';

$options = [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $connection = new PDO('mysql:host=' . DB_HOST, DB_USERNAME, DB_PASSWORD, $options);
    $sql = file_get_contents(__DIR__ . '/../data/init.sql');
    $connection->exec($sql);

    echo 'Database is ready to use!' . "\n";
} catch (PDOException $error) {
    echo $sql . $error->getMessage() . "\n";
}
