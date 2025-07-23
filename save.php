<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);

    if (!empty($name) && !empty($email)) {
        $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email
        ]);

        echo "User saved successfully!";
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request.";
}
?>
