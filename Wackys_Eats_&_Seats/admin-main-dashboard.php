<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- montserrat font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="admin.css">
  </head>

  <body>
    <div class="grid-container">
      <!-- Header -->
      <header>
        <a href="index.php"><img src="images/Wackys Food House Logo.png"></a>
      </header>
      <!-- End Header -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">ADMIN'S DASHBOARD</p>
        </div>

        <div class="main-cards">
          <div class="card">
            <a href="dashboard.php">
              <div class="card-inner">
                <p class="text-primary">FOOD HOUSE DASHBOARD</p>
                <span class="material-icons-outlined text-blue">food_bank</span>
              </div>
              <span class="text-primary font-weight-bold"> 
              <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "wackysfoodhouse";

              try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              // SQL query to count reservations
              $countSql = "SELECT COUNT(*) AS reservation_count FROM foodhouse_reservation";

              // Prepare and execute the query
              $stmt = $conn->prepare($countSql);
              $stmt->execute();

              // Fetch the result
              $result = $stmt->fetch(PDO::FETCH_ASSOC);

              // Get the count of reservations
              $reservationCount = $result['reservation_count'];

              echo "Total reservations: " . $reservationCount;
              } catch (PDOException $e) {
              echo "Database Error: " . $e->getMessage();
              } catch (Exception $e) {
              echo "Error: " . $e->getMessage();
              }
                ?>

              </span>
            </a>
          </div>

          
          <div class="card">
            <a href="dashboard1.php"> 
              <div class="card-inner">
                <p class="text-primary">RECEPTIONS DASHBOARD</p>
                <span class="material-icons-outlined text-orange">restaurant</span>
              </div>
              <span class="text-primary font-weight-bold"> 
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "wackysfoodhouse";

                try {
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  // SQL query to count reservations
                  $countSql = "SELECT COUNT(*) AS reservation_count FROM events_reservation";

                  // Prepare and execute the query
                  $stmt = $conn->prepare($countSql);
                  $stmt->execute();

                  // Fetch the result
                  $result = $stmt->fetch(PDO::FETCH_ASSOC);

                  // Get the count of reservations
                  $reservationCount = $result['reservation_count'];

                echo "Total reservations: " . $reservationCount;
                } catch (PDOException $e) {
                echo "Database Error: " . $e->getMessage();
                } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
                }
                ?>

              </span>
            </a>
          </div>
       

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">TOTAL RESERVATIONS</p>
              <span class="material-icons-outlined text-green">assignment_turned_in</span>
            </div>
            <span class="text-primary font-weight-bold">
              <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "wackysfoodhouse";

              try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // SQL queries to count reservations from each table
                $countSqlTable1 = "SELECT COUNT(*) AS count_table1 FROM foodhouse_reservation";
                $countSqlTable2 = "SELECT COUNT(*) AS count_table2 FROM events_reservation";

                // Prepare and execute queries for each table
                $stmtTable1 = $conn->prepare($countSqlTable1);
                $stmtTable1->execute();
                $resultTable1 = $stmtTable1->fetch(PDO::FETCH_ASSOC);

                $stmtTable2 = $conn->prepare($countSqlTable2);
                $stmtTable2->execute();
                $resultTable2 = $stmtTable2->fetch(PDO::FETCH_ASSOC);

                // Get counts from results
                $countTable1 = $resultTable1['count_table1'];
                $countTable2 = $resultTable2['count_table2'];

                // Calculate total count
                $totalCount = $countTable1 + $countTable2;

                echo "Total reservations: " . $totalCount;
                } catch (PDOException $e) {
                echo "Database Error: " . $e->getMessage();
                } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
                }
              ?>
            </span>
          </div>
        </div>

        <div class="charts">
          <div class="charts-card">
            <p class="chart-title"> Food House and Reception </p>
            <canvas id="totalreservations" width="200" height="200"></canvas>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "wackysfoodhouse";

            try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              // SQL queries to count reservations from each table
              $countSqlTable1 = "SELECT COUNT(*) AS count_table1 FROM foodhouse_reservation";
              $countSqlTable2 = "SELECT COUNT(*) AS count_table2 FROM events_reservation";

              // Prepare and execute queries for each table
              $stmtTable1 = $conn->prepare($countSqlTable1);
              $stmtTable1->execute();
              $resultTable1 = $stmtTable1->fetch(PDO::FETCH_ASSOC);

              $stmtTable2 = $conn->prepare($countSqlTable2);
              $stmtTable2->execute();
              $resultTable2 = $stmtTable2->fetch(PDO::FETCH_ASSOC);

              // Get counts from results
              $countTable1 = $resultTable1['count_table1'];
              $countTable2 = $resultTable2['count_table2'];

              // Calculate total count
              $totalCount = $countTable1 + $countTable2;

            } catch (PDOException $e) {
            echo "Database Error: " . $e->getMessage();
            } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            }
          ?>

          <script>
            const countTable1 = <?= $countTable1 ?>;
            const countTable2 = <?= $countTable2 ?>;

              const totalreservations = new Chart(document.getElementById('totalreservations'), {
                  type: 'pie',
                  data: {
                      labels: ['Foodhouse Reservation', 'Event Reservation'], 
                      datasets: [{
                          data: [countTable1, countTable2],
                          backgroundColor: ['#90a955', '#ecf39e']
                      }],
                  },
                  options: {
                      plugins: {
                          legend: {
                              labels: { 
                                  color: '#000000'
                              }
                          }
                      },
                      tooltips: {
                          callbacks: {
                              label: function (tooltipItem, data) {
                                  let dataset = data.datasets[tooltipItem.datasetIndex];
                                  let total = dataset.data.reduce((previousValue, currentValue) => previousValue + currentValue);
                                  let currentValue = dataset.data[tooltipItem.index];
                                  let percentage = ((currentValue / total) * 100).toFixed(2);
                                  return `${data.labels[tooltipItem.index]}: ${currentValue} (${percentage}%) of ${total}`;
                              }
                          }
                      }
                  }
                });
          </script>

            <div class="charts-card">
              <p class="chart-title"> Total Reservations </p>

              <canvas id="areaChart" width="200" height="200"></canvas>
            
              </div>

              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "wackysfoodhouse";

                      try {
                      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                      // SQL queries to count reservations from each table
                      $countSqlTable1 = "SELECT COUNT(*) AS count_table1 FROM foodhouse_reservation";
                      $countSqlTable2 = "SELECT COUNT(*) AS count_table2 FROM events_reservation";

                      // Prepare and execute queries for each table
                      $stmtTable1 = $conn->prepare($countSqlTable1);
                      $stmtTable1->execute();
                      $resultTable1 = $stmtTable1->fetch(PDO::FETCH_ASSOC);

                      $stmtTable2 = $conn->prepare($countSqlTable2);
                      $stmtTable2->execute();
                      $resultTable2 = $stmtTable2->fetch(PDO::FETCH_ASSOC);

                      // Get counts from results
                      $countTable1 = $resultTable1['count_table1'];
                      $countTable2 = $resultTable2['count_table2'];

                      // Calculate total count
                      $totalCount = $countTable1 + $countTable2;

                    } catch (PDOException $e) {
                    echo "Database Error: " . $e->getMessage();
                    } catch (Exception $e) {
                    echo "Error: " . $e->getMessage();
                    }
                    ?>
            <script>
              const areaChartCanvas = document.getElementById('areaChart').getContext('2d');
              const areaChart = new Chart(areaChartCanvas, {
                  type: 'line',
                  data: {
                      labels: ['Foodhouse Reservation', 'Event Reservation'], 
                      datasets: [{
                          label: 'Reservation Count',
                          data: [<?= $countTable1 ?>, <?= $countTable2 ?>],
                          backgroundColor: '#31572c',
                          borderColor: '#4f772d',
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          y: {
                              beginAtZero: true
                          }
                      }
                  }
              });
            </script>

