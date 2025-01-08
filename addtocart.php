<?php
session_start();
include './inc/includes.inc.php';

if (!isset($_SESSION['islogedin'])) {
    // header("Location:./loginandsignup.php");
    echo "login first";
    return;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jsonData = file_get_contents('php://input');
    $data = json_decode($jsonData, true);

    $uname = $_SESSION['user'];
    $pid = $data['pid'];
    $amnt = $data['amnt'];

    // var_dump($_POST);
    $viewObj = new View();
    $data = $viewObj->getProductById($pid);

    $price = $data['price'];

    // var_dump($data);
    // echo "$" . $data[0] . " " . $data[1];
    $contobj = new Controller();
    $result = $contobj->addProductinTheCart($pid, $uname, $price);
    echo $result;
}
