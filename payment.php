<?php
require "./inc/includes.inc.php";
session_start();

echo $_SESSION['user'];
echo $_SESSION['tid'];

if (!isset($_SESSION['tid'])) {
    header("Location:./cart.php?error=tid is not set");
}

if ($_GET['status'] == 'success') {

    $obj = new View();
    $products = $obj->displayProductsOnTheCart($_SESSION['user']);


    $contobj = new Controller();

    foreach ($products as $product) {
        $result = $contobj->setPayment($_SESSION['user'], $_SESSION['tid'], $product['pid'], $product['amnt']);
        if ($result == 'success') {
            $contobj->removeAllProductsFromCart($_SESSION['user'], $product['pid']);
        } else {
            echo $result;
            exit;
        }
    }
} else {
    header("Location:./cart.php?error=transaction fails");
}

header("Location:./products.php");
// echo $result;
