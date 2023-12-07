<?php
session_start();

@include 'admin.config.php';

$registerError = [];

if (isset($_POST['submitBtn'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $number_of_pax = mysqli_real_escape_string($conn, $_POST['number_of_pax']);
    $time_and_date = mysqli_real_escape_string($conn, $_POST['time_and_date']);
    $table_loc = mysqli_real_escape_string($conn, $_POST['table_loc']);
    $select = "SELECT * FROM foodhouse_reservation WHERE id = '$id'";
    $result = mysqli_query($conn, $select);

    if ($result && mysqli_num_rows($result) > 0) {
        $registerError[] = 'Account already exists for this ID.';
    } else {
        $insert = "INSERT INTO foodhouse_reservation(id, name, email, contact_number, number_of_pax, time_and_date, table_loc) VALUES('$id', '$name', '$email', '$contact_number', '$number_of_pax','$time_and_date', '$table_loc')";
        mysqli_query($conn, $insert);

        $_SESSION['success_message'] = 'Account created successfully.';
        header('location:index.php');
        exit();
    }
}
?>



