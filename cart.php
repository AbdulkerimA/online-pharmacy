<?php

$productsOnCart = [
    [
        "pic" => "./assets/pics/face_wash_cleansers.png",
        "proName" => "name",
        "pricePerUnit" => 250,
        "productAmountAddedonTheCart" => 1
    ],
    [
        "pic" => "./assets/pics/face_wash_cleansers.png",
        "proName" => "name",
        "pricePerUnit" => 250,
        "productAmountAddedonTheCart" => 1
    ],
];

$amountOfProducts = count($productsOnCart);
$isProductsOnCartEmpty = $amountOfProducts == 0 ? true : false;
$totalPrice = 0;

if (!$isProductsOnCartEmpty) {
    foreach ($productsOnCart as $p) {
        $totalPrice = $totalPrice + $p["pricePerUnit"] * $p["productAmountAddedonTheCart"];
    }
}
require_once("./nav.php");
//include the view 
require_once("./view/cart.view.php");

require_once("./footer.php");
