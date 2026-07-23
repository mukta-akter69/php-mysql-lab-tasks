<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>
<h2>Update Student Information</h2>
<!-- Form to take updated data from user -->
<form action="update.php" method="post">
    <!-- Student ID (used to identify which record to update) -->
    Student ID:
    <input type="number" name="id" required><br><br>
    Name:
    <input type="text" name="name"><br><br>
    Email:
    <input type="email" name="email"><br><br>
    Age:
    <input type="number" name="age"><br><br>
    <input type="submit" name="update" value="Update Record">
</form>
</body>
</html>