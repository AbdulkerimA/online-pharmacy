<?php
include "./inc/includes.inc.php";
require_once("./nav.php");

if (!isset($_SESSION['islogedin'])) {
    header("Location:./loginandsignup.php");
    // echo "login first";
    return;
}


$_SESSION['tid'] = "tx-" . uniqid();

$viewovj = new View();
$productsOnCart =  $viewovj->displayProductsOnTheCart($_SESSION['user']);


$amountOfProducts = count($productsOnCart);
$isProductsOnCartEmpty = $amountOfProducts == 0 ? true : false;
$totalPrice = 0;

if (!$isProductsOnCartEmpty) {
    foreach ($productsOnCart as $p) {
        $totalPrice = $totalPrice + $p["price"] * $p["amnt"];
    }
}

//include the view 
require_once("./view/cart.view.php");

require_once("./footer.php");
