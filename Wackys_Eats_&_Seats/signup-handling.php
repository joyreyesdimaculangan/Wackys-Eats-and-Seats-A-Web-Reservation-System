<?php

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "wackysfoodhouse";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Check if passwords match
        if ($password != $confirm_password) {
             echo "<script>alert('Password Do not Match!'); window.location.href = 'user-sign-in.php';</script>";
            exit();
        }

    
        // Insert user data into the 'customers' table
        $stmt = $conn->prepare("INSERT INTO customers (username, name, email, phone_number, password) VALUES (:username, :name, :email, :phone, :password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        echo "<script>alert('Account created successfully!'); window.location.href = 'index.php';</script>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
