<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data for "Sales" department with salary greater than 4000
$sql = "SELECT department, name, salary
        FROM staff
        WHERE department = 'Sales' AND salary > 4000
        ORDER BY salary ASC";

$result = $conn->query($sql);

// Check if any results were returned
if ($result->num_rows > 0) {
  echo "<h3>Employees in Sales Department with Salary > $4000 (Sorted by Salary):</h3>";
  echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Salary</th>
            </tr>";

  // Fetch and display results
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['salary'] . "</td>
              </tr>";
  }
  echo "</table>";
} else {
  echo "No employees found in Sales department with salary greater than $4000.";
}

// SQL query to fetch total number of employees in each department using GROUP BY
$sql_group = "SELECT department, COUNT(*) as total_employees
              FROM staff
              GROUP BY department";

$result_group = $conn->query($sql_group);

// Check if any results were returned
if ($result_group->num_rows > 0) {
  echo "<h3>Total Number of Employees in Each Department:</h3>";
  echo "<table border='1'>
            <tr>
                <th>Department</th>
                <th>Total Employees</th>
            </tr>";

  // Fetch and display department-wise employee count
  while ($row = $result_group->fetch_assoc()) {
    echo "<tr>
                <td>" . $row['department'] . "</td>
                <td>" . $row['total_employees'] . "</td>
              </tr>";
  }
  echo "</table>";
} else {
  echo "No department data available.";
}

// Close the database connection
$conn->close();
?>