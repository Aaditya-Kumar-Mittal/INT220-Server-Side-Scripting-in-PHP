<?php
// Include the database connection file
include('db.php');
include('functions.php');

// Checking if the search form is submitted
if (isset($_POST['search'])) {
    $searchTerm = $_POST['searchTerm'];
    $product = searchProduct($conn, $searchTerm);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Search Form -->
    <form method="POST" action="index.php">
        <label for="searchTerm">Search for a product:</label>
        <input type="text" name="searchTerm" id="searchTerm" required>
        <input type="submit" name="search" value="Search">
    </form>

    <!-- Display Product List -->
    <h2>Product List</h2>
    <?php listProducts($conn); ?>

    <!-- Display Search Results -->
    <?php
    if (isset($product)) {
        if ($product) {
            echo "<h3>Search Results for '$searchTerm':</h3>";
            echo "Product Name: " . $product['name'] . "<br>";
            echo "Price: " . $product['price'] . "<br>";
            echo "Stock: " . $product['stock'] . "<br>";
        } else {
            echo "<h3>Product '$searchTerm' not found!</h3>";
        }
    }
    ?>

</body>
</html>
