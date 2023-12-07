<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM foodhouse_reservation WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);


    if($query_run)
    {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: dashboard.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: dashboard.php");
        exit(0);
    }
}





if(isset($_POST['update_customer']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $number_of_pax = mysqli_real_escape_string($conn, $_POST['number_of_pax']);
    $time_and_date = mysqli_real_escape_string($conn, $_POST['time_and_date']);
    $table_loc = mysqli_real_escape_string($conn, $_POST['table_loc']);

    $query = "UPDATE foodhouse_reservation 
              SET id='$id', name='$name', email='$email', 
                  contact_number='$contact_number', number_of_pax='$number_of_pax', time_and_date='$time_and_date', 
                  table_loc='$table_loc'
              WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: dashboard.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: dashboard.php");
        exit(0);
    }
}



if(isset($_POST['save_customer']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $number_of_pax = mysqli_real_escape_string($conn, $_POST['number_of_pax']);
    $time_and_date = mysqli_real_escape_string($conn, $_POST['time_and_date']);
    $table_loc = mysqli_real_escape_string($conn, $_POST['table_loc']);

    $query = "INSERT INTO foodhouse_reservation(id, name, email, contact_number, number_of_pax, time_and_date, table_loc) VALUES('$id', '$name', '$email', '$contact_number', '$number_of_pax','$time_and_date', '$table_loc')";


    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>