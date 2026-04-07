<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "kuis_db";
$port = "3309";

$conn = new mysqli($hostname, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Gagal: " . $conn->connect_error);
}
