<!-- process_registration.php -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get the form data
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate the form data (Ensure all fields are filled)
  if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
    echo "All fields are required!";
    exit;
  }

  // You can add additional validation if needed (e.g., validate email format, password strength)

  // Redirect to the success page with data (except password)
  header("Location: registration_success.php?first_name=$firstName&last_name=$lastName&email=$email");
  exit;
}
?>