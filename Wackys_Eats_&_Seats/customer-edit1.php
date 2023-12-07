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

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Edit 
                            <a href="dashboard1.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM events_reservation WHERE id='$id'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $customer = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $customer['id']; ?>">


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
                                        <input type="number" name="number_of_pax" value="<?=$customer['number_of_pax'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Time and Date</label>
                                        <input type="number" name="time_and_date" value="<?=$customer['time_and_date'];?>" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label>Theme of the Event</label>
                                        <input type="text" name="theme_events" value="<?=$customer['theme_event'];?>" class="form-control" required autocomplete="off">
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
                                    <div class="mb-3">
          <select id="table" name="table" required class="selectY">
          <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <!--
            <option value="Year 1 Second Semester">Year 1 Second Semester</option>
            <option value="Year 2 Second Semester">Year 2 Second Semester</option>
            <option value="Year 3 Second Semester">Year 3 Second Semester</option>
            <option value="Year 4 Second Semester">Year 4 Second Semester</option>-->
          </select>
                                    <div class="mb-3">
                                    <select id="location" name="location" required class="selectC">
            <option value="Table">Table</option>
            <option value="Kubo">Kubo</option>
          </select>
                                    </div>

                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update_customer" class="btn btn-primary">
                                            Update Location
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>