<?php

$servername = "localhost";
$username = "root"; // corrected variable name
$password = "";

$connection = mysqli_connect($servername, $username, $password);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$databaseName = 'class_database';

$sql = "CREATE DATABASE $databaseName";

if (mysqli_query($connection, $sql)) {
    echo "Database '$databaseName' created successfully!";
} else {
    echo "Database cannot be created successfully! " . mysqli_error($connection);
}

mysqli_close($connection);

?>
