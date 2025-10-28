<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id    = $_POST['product_id'];
    $product_name  = $_POST['product_name'];
    $product_price = floatval(str_replace([',','₹'], '', $_POST['product_price']));
    $product_image = $_POST['product_image'];

    $cart_item = [
        "id" => $product_id,
        "name" => $product_name,
        "price" => $product_price,
        "image" => $product_image,
        "quantity" => 1
    ];

    if (isset($_SESSION["cart"])) {
        $ids = array_column($_SESSION["cart"], "id");

        if (in_array($product_id, $ids)) {
            foreach ($_SESSION["cart"] as &$item) {
                if ($item["id"] == $product_id) {
                    $item["quantity"]++;
                    break;
                }
            }
        } else {
            $_SESSION["cart"][] = $cart_item;
        }
    } else {
        $_SESSION["cart"][] = $cart_item;
    }

    header("Location: nav.php?added=true");
    exit();
}
?>
