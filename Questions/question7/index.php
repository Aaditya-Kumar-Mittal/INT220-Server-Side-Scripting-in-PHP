<?php
session_start();

// Initialize the cart if not already done
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

// Products array (could be fetched from a database in a real-world application)
$products = [
  1 => ["name" => "Laptop", "price" => 1000],
  2 => ["name" => "Smartphone", "price" => 700],
  3 => ["name" => "Headphones", "price" => 100],
  4 => ["name" => "Keyboard", "price" => 50]
];

// Add or remove items from the cart
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    if (isset($products[$product_id])) {
      if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity']++;
      } else {
        $_SESSION['cart'][$product_id] = [
          "name" => $products[$product_id]['name'],
          "price" => $products[$product_id]['price'],
          "quantity" => 1
        ];
      }
    }
  } elseif (isset($_POST['remove_from_cart'])) {
    $product_id = $_POST['product_id'];
    if (isset($_SESSION['cart'][$product_id])) {
      unset($_SESSION['cart'][$product_id]);
    }
  }
}

// Calculate the total cost
$total_cost = 0;
foreach ($_SESSION['cart'] as $item) {
  $total_cost += $item['price'] * $item['quantity'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
</head>

<body>
  <h1>Shopping Cart System</h1>
  <h2>Products</h2>
  <ul>
    <?php foreach ($products as $id => $product): ?>
      <li>
        <?php echo "{$product['name']} - $ {$product['price']}"; ?>
        <form method="post" style="display:inline;">
          <input type="hidden" name="product_id" value="<?php echo $id; ?>">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </li>
    <?php endforeach; ?>
  </ul>

  <h2>Cart</h2>
  <?php if (!empty($_SESSION['cart'])): ?>
    <ul>
      <?php foreach ($_SESSION['cart'] as $id => $item): ?>
        <li>
          <?php echo "{$item['name']} - $ {$item['price']} x {$item['quantity']}"; ?>
          <form method="post" style="display:inline;">
            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
            <button type="submit" name="remove_from_cart">Remove</button>
          </form>
        </li>
      <?php endforeach; ?>
    </ul>
    <p><strong>Total Cost: $<?php echo $total_cost; ?></strong></p>
  <?php else: ?>
    <p>Your cart is empty.</p>
  <?php endif; ?>
</body>

</html>