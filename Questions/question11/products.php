<?php

// Define the Product class
class Product
{
  // Properties
  public $name;
  public $price;
  public $quantity;

  // Constructor to initialize properties
  public function __construct($name, $price, $quantity)
  {
    $this->name = $name;
    $this->price = $price;
    $this->quantity = $quantity;
  }

  // Method to calculate the total cost (price * quantity)
  public function calculateTotalCost()
  {
    return $this->price * $this->quantity;
  }

  // Method to apply a 10% discount if the total cost exceeds $100
  public function applyDiscount()
  {
    $totalCost = $this->calculateTotalCost();

    // Check if the total cost exceeds $100
    if ($totalCost > 100) {
      $discount = $totalCost * 0.10; // Apply 10% discount
      $totalCost -= $discount; // Subtract the discount from the total cost
      return $totalCost;
    } else {
      return $totalCost; // Return the original total cost if no discount
    }
  }

  // Method to display the product details and the final cost after discount
  public function displayProductDetails()
  {
    echo "Product Name: " . $this->name . "<br>";
    echo "Price: $" . $this->price . "<br>";
    echo "Quantity: " . $this->quantity . "<br>";
    echo "Total Cost: $" . $this->calculateTotalCost() . "<br>";

    // Display final cost after applying discount if applicable
    $finalCost = $this->applyDiscount();
    if ($finalCost != $this->calculateTotalCost()) {
      echo "Discount Applied: 10%<br>";
    }
    echo "Final Cost after Discount: $" . $finalCost . "<br>";
  }
}

// Create an instance of the Product class
$product = new Product("Laptop", 120, 1);

// Display product details and calculate the cost
$product->displayProductDetails();

?>