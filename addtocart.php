<?php
session_start();
include './inc/includes.inc.php';

if (!isset($_SESSION['islogedin'])) {
    // header("Location:./loginandsignup.php");
    echo "login first";
    return;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = $_SESSION['user'];
    $pid = $_POST['pid'];

    $viewObj = new View();
    $data = $viewObj->getProductById($pid);

    $price = $data[0];

    // var_dump($data);
    // echo "$" . $data[0] . " " . $data[1];
    $contobj = new Controller();
    $result = $contobj->addProductinTheCart($pid, $uname, $price);
    echo $result;
}
