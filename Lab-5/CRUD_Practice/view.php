<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>

    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'reg_db_b2');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $show_query = "SELECT * FROM reg_table";
    $show_result = mysqli_query($connection, $show_query);

    if (mysqli_num_rows($show_result) > 0) {
        echo "<table>";
        echo "<tr><th>Id</th><th>Username</th><th>Email</th><th>Password</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($show_result)) {
            echo "<tr>";
            echo "<td>" . $row["Id"] . "</td>";
            echo "<td>" . $row["Username"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Password"] . "</td>";
            echo "<td><a href='delete.php?id=" . $row["Id"] . "'>Delete</a></td>";
            echo "<td><a href='update.php?id=". $row["Id"] . "'>Update</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data in database";
    }

    mysqli_close($connection);
    ?>

</body>

</html>
