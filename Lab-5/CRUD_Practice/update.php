<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>

<div class="container">
        <h2>Update Form</h2>

        <form action="update.php" method="POST">
            <input type="text" name="Username" placeholder="Username" required>
            <input type="email" name="Email" placeholder="Email" required>
            <input type="password" name="Password" placeholder="Password" required>
            <input type="submit" name="Submit_time" value="Submit">
        </form>
    </div>
    
</body>
</html>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'reg_db_b2');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['Submit'])) {
    
    $username = $_POST["Username"];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $update_query = "UPDATE reg_table SET Username='$username', Email='$email', Password='$password' WHERE Id=1";

    if(mysqli_query($connection, $update_query)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>


<




