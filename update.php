<?php
// Include database connection file
include("db.php");

// Check if update button is clicked
if (isset($_POST['update'])) {
    // Get data from form
    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $age   = $_POST['age'];

    // SQL query to update data
    $sql = "UPDATE students 
            SET name='$name', email='$email', age='$age' 
            WHERE id='$id'";

    // Execute query
    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>