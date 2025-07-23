<?php

// $host="shortline.proxy.rlwy.net";
// $port = "49620";
// $dbname = "railway"; 
// $username = "root";
// $password = "SjSEFWDiAcNiSpdLwATXuUdaSJKNzvDO";



$host = "localhost";
$dbname = "clinic_db"; // اسم قاعدة البيانات عندك
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ممكن تفعليه وقت الديبج
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
