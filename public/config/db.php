<?php

$host = "db01.dbhost.dev";
$username = "user_455y47yfb";
$password = "p455y47yfb";
$database = "db_455y47yfb";
$port = 5051;

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database,
    $port
);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>