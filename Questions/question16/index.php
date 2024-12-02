<?php
// Include the Book class
include('Book.php');

// Create instances of the Book class
$book1 = new Book();
$book2 = new Book();
$book3 = new Book();

// Set properties using the setter methods
$book1->setTitle("The Great Gatsby");
$book1->setAuthor("F. Scott Fitzgerald");
$book1->setPrice(10.99);

$book2->setTitle("1984");
$book2->setAuthor("George Orwell");
$book2->setPrice(-5); // Invalid price

$book3->setTitle("");
$book3->setAuthor("J.K. Rowling");
$book3->setPrice(25.50);

// Display details using the getter methods
echo "<h2>Book 1 Details:</h2>";
$book1->displayDetails();

echo "<h2>Book 2 Details:</h2>";
$book2->displayDetails(); // This will show a price error

echo "<h2>Book 3 Details:</h2>";
$book3->displayDetails(); // This will show a title error
?>