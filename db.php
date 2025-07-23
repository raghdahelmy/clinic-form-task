<?php
$host = "localhost";
$dbname = "clinic_db";
$username = "root";
$password = "";

try {
$conn = new PDO("mysql:host=localhost;dbname=clinic_db;charset=utf8mb4", "root", "");
} catch (PDOException $e) {
    echo "Something went wrong. Please try again later.";
}
?>
