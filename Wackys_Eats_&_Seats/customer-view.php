<?php
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

    <title>Wacky's Food House</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer View Details 
                            <a href="dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM foodhouse_reservation WHERE id='$id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $customer = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>User ID</label>
                                        <p class="form-control">
                                            <?=$customer['id'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Full Name</label>
                                        <p class="form-control">
                                            <?=$customer['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$customer['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Contact Number</label>
                                        <p class="form-control">
                                            <?=$customer['contact_number'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Number of Pax</label>
                                        <p class="form-control">
                                            <?=$customer['number_of_pax'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Time and Date</label>
                                        <p class="form-control">
                                            <?=$customer['time_and_date'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Table Location</label>
                                        <p class="form-control">
                                            <?=$customer['table_loc'];?>
                                        </p>
                                    </div>
                            

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