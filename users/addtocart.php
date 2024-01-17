<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the posted data
    $qty = $_POST['qty'];
    $p_id = $_POST['p_id'];

    // Store the value in a PHP variable or process it as needed
    $storedQty = $qty;
    $idid = $p_id;

    // Insert data into the cart table (Assuming you have a database connection established)
    include 'conn.php';

    // Check if the product is already in the cart
    $result = $conn->query("SELECT * FROM cart WHERE product_id = $idid");
    $row = $result->fetch_assoc();
 
    if ($row) {
        // If the product is in the cart, update the quantity
        $conn->query("UPDATE cart SET quantity = $storedQty WHERE product_id = $idid");
    } else {
        // If the product is not in the cart, add it
        $conn->query("INSERT INTO cart (product_id, quantity) VALUES ($idid, $storedQty)");
    }

    // You can use $storedQty and $idid in your PHP code
    echo "Added to Cart: $storedQty , $idid";

} else {
    echo "Invalid request method.";
}
?>
