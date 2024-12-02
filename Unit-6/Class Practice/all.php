<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn, $sql);

// Select the database
mysqli_select_db($conn, $dbname);

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS employees (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    department VARCHAR(50),
    salary DECIMAL(10,2),
    age INT
)";
mysqli_query($conn, $sql);

// Insert data into the table
$sql = "INSERT INTO employees (name, department, salary, age) VALUES
    ('Alice', 'HR', 5000.00, 28),
    ('Bob', 'IT', 7000.00, 32),
    ('Unknown', 'Finance', 5000.00, 28),  -- Fixed empty name
    ('David', 'IT', 5000.00, 29),
    ('Eve', 'HR', 5000.00, 25)";
mysqli_query($conn, $sql);

// Select query with WHERE, LIKE, AND, OR conditions
echo "<h3>Select Query using WHERE, LIKE, AND</h3>";
$sql = "SELECT * FROM employees WHERE department LIKE 'IT' AND salary > 5000";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["name"] . " | Department: " . $row['department'] . "<br>";
}

// Order by salary in descending order
echo "<h3>Order by Salary DESC</h3>";
$sql = "SELECT * FROM employees ORDER BY salary DESC";  // Corrected spelling of "salary"
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row['name'] . " | Salary: " . $row['salary'] . "<br>";
}

// Close the connection
mysqli_close($conn);
?>
