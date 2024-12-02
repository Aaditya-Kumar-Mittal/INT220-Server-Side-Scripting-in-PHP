<?php
class Book
{
  // Private properties
  private $title;
  private $author;
  private $price;

  // Getter and Setter for title
  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    if (empty($title)) {
      echo "Title cannot be empty.<br>";
    } else {
      $this->title = $title;
    }
  }

  // Getter and Setter for author
  public function getAuthor()
  {
    return $this->author;
  }

  public function setAuthor($author)
  {
    if (empty($author)) {
      echo "Author cannot be empty.<br>";
    } else {
      $this->author = $author;
    }
  }

  // Getter and Setter for price
  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price)
  {
    if ($price < 0) {
      echo "Price cannot be negative.<br>";
    } else {
      $this->price = $price;
    }
  }

  // Method to display book details
  public function displayDetails()
  {
    echo "Title: " . $this->getTitle() . "<br>";
    echo "Author: " . $this->getAuthor() . "<br>";
    echo "Price: $" . number_format($this->getPrice(), 2) . "<br><br>";
  }
}
?>