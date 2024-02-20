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
    // Check if the form is submitted
    if(isset($_POST['submit'])){
        // Retrieve form data
        $username = $_POST["username"];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Establish database connection
        $connection = mysqli_connect('localhost', 'root', '', 'reg_db_b2');
        if(!$connection){
            die("Connection failed: " . mysqli_connect_error());
        }

        // Insert data into the database
        $insertQuery = "INSERT INTO reg_table (username, email, password) VALUES ('$username', '$email', '$password')";
        $insert = mysqli_query($connection, $insertQuery);
        
        // Check if insertion was successful
        if($insert) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($connection);
        }

        // Close database connection
        mysqli_close($connection);
    }
    ?>

    <div class="container">
        <h2>User Registration Form</h2>

        <form action="reg.php" method="POST">
            <input type="text" name="Username" placeholder="Username" required>
            <input type="email" name="Email" placeholder="Email" required>
            <input type="password" name="Password" placeholder="Password" required>
            <input type="submit" name="Submit_time" value="Submit">
        </form>
    </div>

</body>

</html>
