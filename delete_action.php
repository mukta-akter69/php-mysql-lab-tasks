<?php
// Include database connection file
include("db.php");

// Get student ID from form
$id = $_POST['id'];

// SQL query to delete data
$sql = "DELETE FROM students WHERE id = $id";

// Execute the query
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

// Close database connection
mysqli_close($con);
?>