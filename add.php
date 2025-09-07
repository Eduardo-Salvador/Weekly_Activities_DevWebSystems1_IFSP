<?php

    session_start();

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $product = $_POST['product'];
        $price = floatval($_POST['price']);
        $quantity = intval($_POST['quantity']);

        $_SESSION['cart'][] = [
            'product' => $product,
            'price' => $price,
            'quantity' => $quantity
        ];
    }

    header("Location: products.php");
    exit();

?>