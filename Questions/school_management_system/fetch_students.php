<?php
// Include the database connection file
include('db_connect.php');

// SQL query to fetch all records from the students table
$sql = "SELECT id, first_name, last_name, age, grade FROM students";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
  // Display data in an HTML table
  echo "<table border='1' cellpadding='10' cellspacing='0'>";
  echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Grade</th></tr>";

  // Fetch each record and display it in a table row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["first_name"] . "</td>";
    echo "<td>" . $row["last_name"] . "</td>";
    echo "<td>" . $row["age"] . "</td>";
    echo "<td>" . $row["grade"] . "</td>";
    echo "</tr>";
  }

  // End of table
  echo "</table>";
} else {
  echo "No records found.";
}

// Close the connection
$conn->close();
?>