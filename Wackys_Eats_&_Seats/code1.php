<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_student']);


    $query = "DELETE FROM events_reservation WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);


    if($query_run)
    {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: dashboard1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: dashboard1.php");
        exit(0);
    }
}





if(isset($_POST['update_customer']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $number_of_pax = mysqli_real_escape_string($conn, $_POST['number_of_pax']);
    $time_and_date = mysqli_real_escape_string($conn, $_POST['time_and_date']);
    $packages = mysqli_real_escape_string($conn, $_POST['packages']);
    $theme_event = mysqli_real_escape_string($conn, $_POST['theme_event']);
    $theme_cake = mysqli_real_escape_string($conn, $_POST['theme_cake']);
    $dedication_message = mysqli_real_escape_string($conn, $_POST['dedication_message']);
    $requests = mysqli_real_escape_string($conn, $_POST['requests']);

    $query = "UPDATE events_reservation 
              SET id='$id', name='$name', email='$email', 
                  contact_number='$contact_number', number_of_pax='$number_of_pax', time_and_date='$time_and_date', 
                  packages='$packages', theme_event='$theme_event', theme_cake='$theme_cake', dedication_message='$dedication_message', requests='$requests'
              WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: dashboard1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: dashboard1.php");
        exit(0);
    }
}



if(isset($_POST['save_customer']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $number_of_pax = mysqli_real_escape_string($conn, $_POST['number_of_pax']);
    $time_and_date = mysqli_real_escape_string($conn, $_POST['time_and_date']);
    $packages = mysqli_real_escape_string($conn, $_POST['packages']);
    $theme_event = mysqli_real_escape_string($conn, $_POST['theme_event']);
    $theme_cake = mysqli_real_escape_string($conn, $_POST['theme_cake']);
    $dedication_message = mysqli_real_escape_string($conn, $_POST['dedication_message']);
    $requests = mysqli_real_escape_string($conn, $_POST['requests']);

    $query = "INSERT INTO events_reservation(id, name, email, contact_number, number_of_pax, time_and_date, packages,theme_event, theme_cake, dedication_message, requests) VALUES('$id', '$name', '$email', '$contact_number', '$number_of_pax','$time_and_date', '$packages', '$theme_event', '$theme_cake', '$dedication_message', '$requests')";


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
        header("Location: customer-create1.php");
        exit(0);
    }
}

?>