<?php include 'db_connect.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $event_id = $_POST['event_id'];
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];

  $stmt = $conn->prepare("INSERT INTO registrations (event_id, user_name, user_email) VALUES (?, ?, ?)");
  $stmt->bind_param("iss", $event_id, $user_name, $user_email);

  if ($stmt->execute()) {
    echo "<p>Registration successful!</p>";
  } else {
    echo "<p>Error: " . $stmt->error . "</p>";
  }
  $stmt->close();
  echo "<a href='index.php'>Back to Events</a>";
  exit;
}

$event_id = $_GET['event_id'] ?? 0;
$sql = "SELECT * FROM events WHERE event_id = $event_id";
$result = $conn->query($sql);
$event = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register for Event</title>
</head>

<body>
  <h1>Register for <?php echo htmlspecialchars($event['event_name']); ?></h1>
  <form action="register.php" method="post">
    <input type="hidden" name="event_id" value="<?php echo htmlspecialchars($event['event_id']); ?>">
    <label>Name: <input type="text" name="user_name" required></label><br>
    <label>Email: <input type="email" name="user_email" required></label><br>
    <button type="submit">Register</button>
  </form>
</body>

</html>