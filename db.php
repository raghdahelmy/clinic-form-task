<?php
$host = "mysql-vefu.railway.internal";
$dbname = "railway";
$username = "root";
$password = "SjSEFWDiAcNiSpdLwATXuUdaSJKNzvDO";
$port = '3306';

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed.";
}
?>
