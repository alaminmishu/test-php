<?php

include_once './config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerName = $_POST["customer_name"];
    $customerDist = $_POST["customer_dist"];
  }


$sql = "INSERT INTO persons (CustomerName, District)
VALUES ('$customerName', '$customerDist')";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// mysqli_close($conn);

// $conn->close();