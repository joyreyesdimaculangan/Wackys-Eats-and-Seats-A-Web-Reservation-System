<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wackysfoodhouse";

$registerError = []; // Initialize $registerError as an array
$loginError = []; // Initialize $loginError as an array

function isStrongPassword($password) {
    // Add your password strength validation logic here
    // For example, require a minimum length and a mix of uppercase, lowercase, numbers, and special characters
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&-_=+{};:,<.>])[A-Za-z\d$@$!%*?&-_=+{};:,<.>]{8,}$/', $password);
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve username and password from the form
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Query to check if the username and password match and retrieve the role
    $stmt = $conn->prepare("SELECT * FROM customers WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $inputUsername);
    $stmt->bindParam(':password', $inputPassword); // Note: In a real application, you should use password hashing and not store plain passwords.

    $stmt->execute();

    // Fetch user data
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists
    if ($user) {
        // Check the user's role
        $role = $user['usertype'];

        // Redirect based on the role
        if ($role === 'user') {
            echo "<script>alert('User logged in!'); window.location.href = 'reservations.php';</script>";
            exit();
        } elseif ($role === 'admin') {
           header("Location:admin-main-dashboard.php");
            exit();
        }
    } else {
        echo "<script>alert('Invalid username or password');window.location.href= 'index.php';</script>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>
