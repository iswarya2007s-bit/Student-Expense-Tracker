<?php

$host = "db01.dbhost.dev";
$username = "user_4567yabar";
$password = "p4567yabar";
$database = "db_4567yabar";
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