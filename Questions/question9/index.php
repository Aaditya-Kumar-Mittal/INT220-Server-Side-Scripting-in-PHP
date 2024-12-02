<?php
// Base class User
class User
{
  // Properties
  protected $name;
  protected $email;

  // Constructor to initialize the properties
  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Method to display user details
  public function displayUserDetails()
  {
    echo "Name: " . $this->name . "<br>";
    echo "Email: " . $this->email . "<br>";
  }
}

// Derived class Admin that extends User
class Admin extends User
{
  // Additional property specific to Admin
  private $access_level;

  // Constructor to initialize both User and Admin properties
  public function __construct($name, $email, $access_level)
  {
    // Call the parent class constructor to initialize the inherited properties
    parent::__construct($name, $email);
    $this->access_level = $access_level;
  }

  // Override the method to display user and admin details
  public function displayUserDetails()
  {
    // Call the parent class method
    parent::displayUserDetails();
    echo "Access Level: " . $this->access_level . "<br>";
  }
}

// Example usage:

// Create a User object
$user = new User("John Doe", "john.doe@example.com");
echo "<h3>User Details:</h3>";
$user->displayUserDetails(); // Display user details

echo "<hr>";

// Create an Admin object
$admin = new Admin("Jane Admin", "jane.admin@example.com", "Super Admin");
echo "<h3>Admin Details:</h3>";
$admin->displayUserDetails(); // Display user and admin details
?>