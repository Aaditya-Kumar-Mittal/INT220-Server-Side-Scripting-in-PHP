<?php include 'header.php'; ?>
<?php require 'db_connect.php'; ?>

<h2>Contact Us</h2>
<form action="contact.php" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required>
  <br><br>
  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>
  <br><br>
  <label for="message">Message:</label>
  <textarea name="message" id="message" rows="5" required></textarea>
  <br><br>
  <input type="submit" value="Send">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);
  $message = $conn->real_escape_string($_POST['message']);

  $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
  if ($conn->query($sql)) {
    echo "<p>Message sent successfully!</p>";
  } else {
    echo "<p>Error: " . $conn->error . "</p>";
  }
}

$conn->close();
?>

<?php include 'footer.php'; ?>