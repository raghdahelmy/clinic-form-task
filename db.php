<?php

$MYSQLDATABASE="railway";
$MYSQLHOST="maglev.proxy.rlwy.net";
$MYSQLPASSWORD="tPTsDWKsqDPJCAHpseLRzTAvCmUDHoeY";
$MYSQLPORT="22698";
$MYSQLUSER="root";



// $host = "localhost";
// $dbname = "clinic_db"; // اسم قاعدة البيانات عندك
// $username = "root";
// $password = "";




$dsn = "mysql:host=$MYSQLHOST;dbname=$MYSQLDATABASE;port=$MYSQLPORT";
try {
    $pdo = new \PDO($dsn, $MYSQLUSER, $MYSQLPASSWORD);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



// try {
//     $conn = new PDO("mysql:host=$MYSQLHOST;dbname=$MYSQLDATABASE;port=$MYSQLPORT", $MYSQLUSER, $MYSQLPASSWORD);
//     // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ممكن تفعليه وقت الديبج
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
// ?>
