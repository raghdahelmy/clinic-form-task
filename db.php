<?php
$host = "mysql-_655.railway.internal";
$dbname = "railway";
$username = "root";
$password = "fSjSEFWDiAcNiSpdLwATXuUdaSJKNzvDO";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed.";
}
?>
