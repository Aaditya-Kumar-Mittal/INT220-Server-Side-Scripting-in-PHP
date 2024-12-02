<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
</head>

<body>
  <h2>Enter Products</h2>
  <form action="" method="post">
    <label for="products">Enter comma-separated product names:</label><br>
    <textarea name="products" id="products" rows="4" cols="50"></textarea><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    // Accept input from form
    $input = $_POST['products'];

    // Convert the comma-separated string into an array
    $products = array_map('trim', explode(',', $input));

    // Sort the array in alphabetical order
    sort($products);

    // Display the sorted products
    echo "<h3>Sorted Product List:</h3>";
    echo "<ul>";
    foreach ($products as $product) {
      echo "<li>" . htmlspecialchars($product) . "</li>";
    }
    echo "</ul>";

    // File path to store products
    $filePath = "products.txt";

    // Read existing products from the file (if it exists)
    $existingProducts = [];
    if (file_exists($filePath)) {
      $existingProducts = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }

    // Merge existing products with the new ones and remove duplicates
    $allProducts = array_unique(array_merge($existingProducts, $products));

    // Sort the combined list alphabetically
    sort($allProducts);

    // Write the updated product list back to the file
    file_put_contents($filePath, implode(PHP_EOL, $allProducts) . PHP_EOL);

    echo "<p>Products have been saved to the file <strong>products.txt</strong>.</p>";
  }
  ?>
</body>

</html>