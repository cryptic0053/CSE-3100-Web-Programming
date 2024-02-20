<?php

$connection = mysqli_connect('localhost', 'root', '', 'reg_db_b2');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_GET['Id'])) {
    
    $del_id = mysqli_real_escape_string($connection, $_GET['Id']);

   
    $delete_query = "DELETE FROM reg_table WHERE Id = $del_id";

    $delete = mysqli_query($connection, $delete_query);

    if ($delete) {
        
        header("location: view.php");
        exit(); 
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
} else {
    echo "No ID parameter provided";
}

mysqli_close($connection);
?>
