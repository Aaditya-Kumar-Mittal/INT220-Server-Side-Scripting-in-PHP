<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to insert 10 new records, excluding John Doe
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julie', 'Dooley', 'julie@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('James', 'Smith', 'james@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Anna', 'Taylor', 'anna@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Chris', 'Evans', 'chris@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Emma', 'Johnson', 'emma@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Robert', 'Brown', 'robert@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Emily', 'Davis', 'emily@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Michael', 'Wilson', 'michael@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Sophia', 'Martinez', 'sophia@example.com');";

// Execute the multiple insert statements
if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
