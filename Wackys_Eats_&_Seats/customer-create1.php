<?php
session_start();
require 'dbcon.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Customer Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php');
        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Add 
                            <a href="dashboard1.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <form action="code1.php" method="POST" $customer>
                       
                        

                        <div class="mb-3" $customer>
                                    
                                    <div class="mb-3">
                                    <label>User ID</label>
                                    <input type="text" name="id" value="<?=$customer['id'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Full Name</label>
                                        <input type="text" name="name" value="<?=$customer['name'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?=$customer['email'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Contact Number</label>
                                        <input type="number" name="contact_number" value="<?=$customer['contact_number'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Number of Pax</label>
                                        <input type="number" name="number_of_pax" value="<?=$customer['number_of-pax'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Packages</label>
                                        <input type="text" name="packages" value="<?=$customer['packages'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Theme of the Event</label>
                                        <input type="text" name="theme_event" value="<?=$customer['theme_event'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Theme of the Cake</label>
                                        <input type="text" name="theme_cake" value="<?=$customer['theme_cake'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Dedication Message</label>
                                        <input type="text" name="dedication_message" value="<?=$customer['dedication_message'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Requests</label>
                                        <input type="text" name="requests" value="<?=$customer['requests'];?>" class="form-control" required autocomplete="off">
                                    </div>
            </div>
               
                            <div class="mb-3">
                                <button type="submit" name="save_customer" class="btn btn-primary">Save Customer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
