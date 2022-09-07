<?php

include_once './config/db.php';

$sql = "UPDATE persons SET District = 'Tangail' WHERE CustomerName = 'abc'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// mysqli_close($conn);

// $conn->close();