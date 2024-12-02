<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
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
if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>  