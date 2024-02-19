<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>

    <?php

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost', 'root', '', 'reg_db');

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $insert_query = "INSERT INTO reg_table (username, email, password) ";
        $insert_query .= "VALUES ('$username', '$email', '$password')";

        $insert =  mysqli_query($connection, $insert_query);

        if(!$insert){
            die("Not inserted". mysqli_error($connection));
        }
        
        mysqli_close($connection);
    }

    ?>


    <div class="container">
        <h2>User Registration Form</h2>

        <form action="reg.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>

</html>