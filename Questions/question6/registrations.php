<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Registrations</title>
</head>

<body>
  <h1>Event Registrations</h1>
  <?php
  $sql = "SELECT e.event_name, COUNT(r.registration_id) AS total_registrations 
            FROM events e 
            LEFT JOIN registrations r ON e.event_id = r.event_id 
            GROUP BY e.event_id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Event Name</th><th>Total Registrations</th></tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr><td>" . htmlspecialchars($row['event_name']) . "</td><td>" . $row['total_registrations'] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "<p>No registrations found.</p>";
  }
  ?>
  <a href="index.php">Back to Events</a>
</body>

</html>