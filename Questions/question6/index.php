<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Registration System</title>
</head>

<body>
  <h1>Event Registration System</h1>

  <h2>Upcoming Events</h2>
  <?php
  $today = date('Y-m-d');
  $sql = "SELECT * FROM events WHERE event_date >= '$today' ORDER BY event_date";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($event = $result->fetch_assoc()) {
      echo "<div>";
      echo "<h3>" . htmlspecialchars($event['event_name']) . "</h3>";
      echo "<p>Date: " . htmlspecialchars($event['event_date']) . "</p>";
      echo "<p>" . htmlspecialchars($event['description']) . "</p>";
      echo "<a href='register.php?event_id=" . $event['event_id'] . "'>Register</a>";
      echo "</div><hr>";
    }
  } else {
    echo "<p>No upcoming events found.</p>";
  }
  ?>
</body>

</html>