<?php
session_start();
require 'dbcon.php';

// Set the number of records per page
$records_per_page = 10;

// Determine the current page
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the limit clause for the SQL query
$start = ($page - 1) * $records_per_page;

// Initialize search term
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Fetch records with pagination and search
$query = "SELECT * FROM foodhouse_reservation WHERE id LIKE '%$search%' ORDER BY id LIMIT $start, $records_per_page";
$query_run = mysqli_query($con, $query);

// Count total records for pagination
$total_records = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS total FROM foodhouse_reservation WHERE id LIKE '%$search%'"))['total'];

// Calculate total pages
$total_pages = ceil($total_records / $records_per_page);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device width, initial-scale=1.0">
        <title> Wacky's Food House </title>

        <!----- font awesome cdn link ----->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!------ swiper cdn link ----->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <!----- custom css file link ------>
    <link rel="stylesheet" href="dashboardstyle.css">
</head>


<body>
    <div class="icon-container">
        <a href="admin-main-dashboard.php">
        <i class="fa-solid fa-xmark fa-2xl" style="color: #4e511f;"></i>
        </a>
    </div>
    <h3 class="sub-heading"> Wacky's Food House Reservations </h3> 
    <div class="container">
        <header>
            <div class="filterEntries">
                <div class="filter">
                    <label for="search"> Search: </label>
                    <input type="search" id="search" placeholder="Enter Customer ID">
                </div>
            </div>
        </header>

        <table>
            <thead>
                <tr class="heading">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>No. of Pax</th>
                    <th>Time & Date</th>
                    <th>Table Location</th>
                </tr>
            </thead>

            <tbody class="userInfo">
            <?php 
                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $customer)
                    {
                        ?>
                        <tr>
                            <td><?= $customer['id']; ?></td>
                            <td><?= $customer['name']; ?></td>
                            <td><?= $customer['email']; ?></td>
                            <td><?= $customer['contact_number']; ?></td>
                            <td><?= $customer['number_of_pax']; ?></td>
                            <td><?= $customer['time_and_date']; ?></td>
                            <td><?= $customer['table_loc']; ?></td>
                            <td>   

                           
                            <td>
                                <div class="crudbutton">
                                    <a href="customer-view.php?id=<?= $customer['id']; ?>"><button><i class="fa-regular fa-eye"></i></button></a>
                                    <form action="code.php" method="POST" class="d-inline">
                                        <button type="submit" name="delete_student" value="<?= $customer['id']; ?>" class="crudbuttondelete"><i class="fa-regular fa-trash-can"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else
                {
                    echo "<h5> No Record Found </h5>";
                }
            ?>
            </tbody>
            
        </table>

        <footer>
            <span class="showEntries">
                Showing <?php echo $start + 1; ?> to <?php echo min($start + $records_per_page, $total_records); ?> of <?php echo $total_records; ?> entries
            </span>
            <div class="pagination">
                <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='?page=$i&search=$search'><button ";
                    echo ($page == $i) ? "class='active'" : "";
                    echo ">$i</button></a>";
                }
                ?>
            </div>
        </footer>
    </div>

    <script src="app.js"></script>
</body>
</html>
