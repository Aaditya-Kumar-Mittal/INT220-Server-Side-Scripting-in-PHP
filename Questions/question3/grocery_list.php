<?php
// Start session to store the grocery list
session_start();

// Initialize the grocery list in the session if not already set
if (!isset($_SESSION['grocery_list'])) {
  $_SESSION['grocery_list'] = [];
}

// Handle the POST request to add a new item to the list
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_item'])) {
  $new_item = trim($_POST['new_item']);
  if (!empty($new_item) && !in_array($new_item, $_SESSION['grocery_list'])) {
    $_SESSION['grocery_list'][] = $new_item;
  }
}

// Handle the GET request to search for an item
$search_results = [];
if (isset($_GET['search_item'])) {
  $search_item = trim($_GET['search_item']);
  if (!empty($search_item)) {
    $search_results = array_filter($_SESSION['grocery_list'], function ($item) use ($search_item) {
      return stripos($item, $search_item) !== false; // Case-insensitive search
    });
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grocery List</title>
</head>

<body>
  <h1>Grocery List</h1>

  <!-- Form to add a new item (POST method) -->
  <h2>Add Item</h2>
  <form action="" method="post">
    <label for="new_item">New Item:</label>
    <input type="text" name="new_item" id="new_item" required>
    <button type="submit">Add Item</button>
  </form>

  <!-- Form to search for an item (GET method) -->
  <h2>Search Item</h2>
  <form action="" method="get">
    <label for="search_item">Search:</label>
    <input type="text" name="search_item" id="search_item">
    <button type="submit">Search</button>
  </form>

  <!-- Display the search results -->
  <?php if (!empty($_GET['search_item'])): ?>
    <h3>Search Results for "<?php echo htmlspecialchars($_GET['search_item']); ?>"</h3>
    <ul>
      <?php if (empty($search_results)): ?>
        <li>No items found.</li>
      <?php else: ?>
        <?php foreach ($search_results as $result): ?>
          <li><?php echo htmlspecialchars($result); ?></li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  <?php endif; ?>

  <!-- Display the full grocery list -->
  <h2>Full Grocery List</h2>
  <ul>
    <?php foreach ($_SESSION['grocery_list'] as $item): ?>
      <li><?php echo htmlspecialchars($item); ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>