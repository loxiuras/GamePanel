<?php
session_start();
require_once "../models/Shoppingcart.php";

$result = ['success' => false];

if(!empty($_POST)) {
    $ShoppingCart = new Shoppingcart();
    $articleNumber = !empty($_POST['articleNumber']) ? $_POST['articleNumber'] : "";
    $productUrl = !empty($_POST['productUrl']) ? $_POST['productUrl'] : "";
    $amount = !empty($_POST['amount']) ? $_POST['amount'] : "";

    $ShoppingCart->addProductToShoppingCart($articleNumber, $amount, $productUrl);
    $result['success'] = true;
}

echo json_encode($result);
exit;