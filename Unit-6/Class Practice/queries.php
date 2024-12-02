<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "password";
$database = "test_db";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1. INSERT Query
$sqlInsert = "INSERT INTO users (name, email, age) VALUES ('John Doe', 'johndoe@example.com', 25)";
$conn->query($sqlInsert);

// 2. UPDATE Query
$sqlUpdate = "UPDATE users SET age = 26 WHERE name = 'John Doe'";
$conn->query($sqlUpdate);

// 3. DELETE Query
$sqlDelete = "DELETE FROM users WHERE name = 'John Doe'";
$conn->query($sqlDelete);

// 4. SELECT Query (with while loop)
$sqlSelect = "SELECT * FROM users";
$result = $conn->query($sqlSelect);

echo "User List: <br>";
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . " - Age: " . $row["age"] . "<br>";
}

// 5. COUNT Query
$sqlCount = "SELECT COUNT(*) as user_count FROM users";
$result = $conn->query($sqlCount);
$row = $result->fetch_assoc();
echo "Total users: " . $row['user_count'] . "<br>";

// 6. SUM Query
$sqlSum = "SELECT SUM(age) as total_age FROM users";
$result = $conn->query($sqlSum);
$row = $result->fetch_assoc();
echo "Sum of all users' ages: " . $row['total_age'] . "<br>";

// 7. AVG Query
$sqlAvg = "SELECT AVG(age) as average_age FROM users";
$result = $conn->query($sqlAvg);
$row = $result->fetch_assoc();
echo "Average age of users: " . $row['average_age'] . "<br>";

// 8. MAX Query
$sqlMax = "SELECT MAX(age) as max_age FROM users";
$result = $conn->query($sqlMax);
$row = $result->fetch_assoc();
echo "Maximum age: " . $row['max_age'] . "<br>";

// 9. MIN Query
$sqlMin = "SELECT MIN(age) as min_age FROM users";
$result = $conn->query($sqlMin);
$row = $result->fetch_assoc();
echo "Minimum age: " . $row['min_age'] . "<br>";

// 10. JOIN Query
$sqlJoin = "
    SELECT users.name, orders.order_id
    FROM users
    INNER JOIN orders ON users.id = orders.user_id";
$result = $conn->query($sqlJoin);

echo "User Orders: <br>";
while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"] . " - Order ID: " . $row["order_id"] . "<br>";
}

// Close the connection
$conn->close();
?>
