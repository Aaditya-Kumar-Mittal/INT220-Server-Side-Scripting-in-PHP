<?php

// Function to list all products from the database
function listProducts($conn) {
    $sql = "SELECT name, price, stock FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>";
        
        // Output the product data in rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['price'] . "</td>
                    <td>" . $row['stock'] . "</td>
                  </tr>";
        }
        
        echo "</table>";
    } else {
        echo "No products found!";
    }
}

// Function to search for a product by name
function searchProduct($conn, $searchTerm) {
    $sql = "SELECT name, price, stock FROM products WHERE name LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%$searchTerm%";  // Wildcard search
    $stmt->bind_param("s", $searchTerm);
    
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc(); // Return the first matching product
    } else {
        return null; // Return null if no product found
    }
}
?>
