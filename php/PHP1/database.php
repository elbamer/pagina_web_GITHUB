<?php
$server = 'localhost';
$username = 'elba';
$password = 'liayan686';
$database = 'pruebas1';
try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
}
?>
