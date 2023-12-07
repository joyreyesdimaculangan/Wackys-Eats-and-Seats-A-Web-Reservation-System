<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wackysfoodhouse";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_POST['name'];
    $email = $_POST['email'];

    // Remove non-numeric characters from the phone number
    $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);

    $pax = $_POST['pax'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $package = $_POST['package'];
    $event_theme = $_POST['theme'];
    $cake_theme = $_POST['cake'];
    $dedication = $_POST['dedication'];
    $request = $_POST['request'];

    // Concatenate date and time into a datetime format
    $datetimeString = $date . ' ' . $time;
    $datetime = new DateTime($datetimeString);
    $formattedDatetime = $datetime->format('Y-m-d H:i:s');

$checkSql = "SELECT COUNT(*) AS count_reservations FROM events_reservation 
            WHERE time_and_date = :formattedDatetime";

    // Prepare the statement
    $stmt = $conn->prepare($checkSql);

    if ($stmt === false) {
        throw new Exception("Error: Failed to prepare the statement.");
    }

    // Bind parameter for checking existing reservation
    $stmt->bindParam(':formattedDatetime', $formattedDatetime, PDO::PARAM_STR);

    // Execute the query
    $stmt->execute();

    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check the result or handle the count of reservations
    if ($result['count_reservations'] > 0) {
        echo "<script>alert('Sorry, the selected date and time are already booked. Please choose a different time.');window.location.href='events.php';</script>";
    } else {
        // Your existing code to insert the event reservation into the database

        // Insert into the database
        $sql = "INSERT INTO events_reservation (name, email, contact_number, number_of_pax, time_and_date, packages, theme_event, theme_cake, dedication_message, requests)
                VALUES (:name, :email, :phone, :pax, :formattedDatetime, :package, :event_theme, :cake_theme, :dedication, :requests)";

        // Prepare and execute the insertion query
        $stmt = $conn->prepare($sql);
        // Bind parameters for insertion
        
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':pax', $pax, PDO::PARAM_INT);
        $stmt->bindParam(':formattedDatetime', $formattedDatetime, PDO::PARAM_STR);
        $stmt->bindParam(':package', $package, PDO::PARAM_STR);
        $stmt->bindParam(':event_theme', $event_theme, PDO::PARAM_STR);
        $stmt->bindParam(':cake_theme', $cake_theme, PDO::PARAM_STR);
        $stmt->bindParam(':dedication', $dedication, PDO::PARAM_STR);
        $stmt->bindParam(':requests', $request, PDO::PARAM_STR);


        // Execute the insertion
        $stmt->execute();

        echo "<script>alert('Event Booked successfully!'); window.location.href = 'events.php';</script>";
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}

$conn = null;
?>