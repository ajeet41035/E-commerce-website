<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve product information from the form
    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];

    // Initialize the cart if it doesn't exist
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }

    // Add the product to the cart
    $cart_item = array(
        "product_id" => $product_id,
        "product_name" => $product_name,
        "product_price" => $product_price
    );

    $_SESSION["cart"][] = $cart_item;

    // Redirect back to the product page or wherever you want
    header("Location: index.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-commerce</title>
    <link rel="stylesheet" href="../css/addcart.css">
</head>
<body>
    <div class="product">
        <img src="product_image.jpg" alt="Product Image">
        <h3>Product Name</h3>
        <p>Price: $19.99</p>
        <form action="addToCart.php" method="post">
            <input type="hidden" name="product_id" value="1">
            <input type="hidden" name="product_name" value="Product Name">
            <input type="hidden" name="product_price" value="19.99">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
</body>
</html>
