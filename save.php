<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);

    if (!empty($name) && !empty($email)) {
        $createdAt = date('Y-m-d H:i:s'); // التاريخ الحالي من PHP

        $stmt = $conn->prepare("INSERT INTO users (name, email, createdat) VALUES (:name, :email, :createdat)");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':createdat' => $createdAt
        ]);

        echo "User saved successfully!";
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request.";
}
?>
