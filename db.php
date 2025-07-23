<?php
$host = "localhost";
$dbname = "clinic_db"; // اسم قاعدة البيانات عندك
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ممكن تفعليه وقت الديبج
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
