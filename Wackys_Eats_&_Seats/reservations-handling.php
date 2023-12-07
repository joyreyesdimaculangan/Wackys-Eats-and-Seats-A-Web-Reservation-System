<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wackysfoodhouse";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch user input or initialize variables with user data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Remove non-numeric characters from the phone number
    $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);

    $pax = $_POST['pax'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $table = $_POST['table'];

    // Concatenate date and time into a datetime format
    $datetimeString = $date . ' ' . $time;
    $datetime = new DateTime($datetimeString);
    $formattedDatetime = $datetime->format('Y-m-d H:i:s');

    // SQL query to check if the table at the given time and date is reserved
    $checkSql = "SELECT COUNT(*) AS count_reservations FROM foodhouse_reservation 
            WHERE time_and_date = :formattedDatetime 
            AND table_loc = :table";

    // Prepare the statement
    $stmt = $conn->prepare($checkSql);

    if ($stmt === false) {
        throw new Exception("Error: Failed to prepare the statement.");
    }

    // Bind parameters for checking existing reservation
    $stmt->bindParam(':formattedDatetime', $formattedDatetime, PDO::PARAM_STR);
    $stmt->bindParam(':table', $table, PDO::PARAM_STR);

    // Execute the query
    $stmt->execute();

    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Database Error: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

    // Check the result or handle the count of reservations
    if ($result['count_reservations'] > 0) {
        echo "<script>alert('Sorry, the selected date, time, and table are already reserved. Please choose a different option.');window.location.href='reservations.php';</script>";
    } else {
        try {
            // Prepare and execute the insertion query
            $insertSql = "INSERT INTO foodhouse_reservation (name, email, contact_number, number_of_pax, time_and_date, table_loc)
            VALUES (:name, :email, :phone, :pax, :formattedDatetime, :table)";
            $insertStmt = $conn->prepare($insertSql);
    
            // Bind parameters for insertion
            $insertStmt->bindParam(':name', $name, PDO::PARAM_STR);
            $insertStmt->bindParam(':email', $email, PDO::PARAM_STR);
            $insertStmt->bindParam(':phone', $phone, PDO::PARAM_STR);
            $insertStmt->bindParam(':pax', $pax, PDO::PARAM_INT);
            $insertStmt->bindParam(':formattedDatetime', $formattedDatetime, PDO::PARAM_STR);
            $insertStmt->bindParam(':table', $table, PDO::PARAM_STR);
    
            // Execute the insertion
            $insertStmt->execute();
    
            // Check if any rows were affected (i.e., if the insertion was successful)
            $rowsInserted = $insertStmt->rowCount();
    
            if ($rowsInserted > 0) {
                echo "<script>alert('Reservation Successful');window.location.href= 'reservations.php';</script>";
            } else {
                echo "Reservation could not be completed. Please try again later.";
            }
} catch (PDOException $e) {
    echo "Database Error: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
    }