<?php

require_once "admin/dbconfig.php"; // Make sure this path is correct

// Start the session if it's not already started
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_booking"])) {
    $userid = intval($_POST["userid"]);
    $property_id = intval($_POST["property_id"]);
    $price_per_month = floatval($_POST["price_per_month"]);
    $months_booked = intval($_POST["months_booked"]);
    $start_date = $_POST["start_date"];
    
    // Convert the start_date from any date format to YYYY-MM-DD
    $start_date = date('Y-m-d', strtotime($start_date));
    
    $end_date = date('Y-m-d', strtotime("+$months_booked months", strtotime($start_date))); // Calculate end date based on start date and months booked
    $total_payable = $price_per_month * $months_booked;

    // Prepare your insert query
    $insert_booking_query = "INSERT INTO bookings (user_id, property_id, price_per_month, months_booked, total_payable, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare statement
    if ($stmt = mysqli_prepare($cid, $insert_booking_query)) {
        // Bind variables to the prepared statement as parameters
        // Note the change from "iididis" to "iididss" to correctly reflect the data types
        mysqli_stmt_bind_param($stmt, "iididss", $userid, $property_id, $price_per_month, $months_booked, $total_payable, $start_date, $end_date);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to single.php with a success message
            $_SESSION['booking_success'] = 'Booking successful!';
            header("Location: single.php?id={$property_id}");
            exit;
        } else {
            // Print detailed error message
            echo "<script>alert('Error: " . mysqli_stmt_error($stmt) . "');</script>";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        // Print detailed error message
        echo "<script>alert('Error preparing statement: " . mysqli_error($cid) . "');</script>";
    }

    // Close connection
    mysqli_close($cid);
}

?>