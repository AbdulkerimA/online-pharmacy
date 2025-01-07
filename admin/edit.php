<?php

require '../inc/includes.admin.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        header("Location:./provider.php");
    }
    $obj = new View();

    $product =  $obj->getProductById($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pid = $_POST['pid'];
    $obj = new View();

    $product =  $obj->getProductById($pid);

    $pname = $product['name'];
    $price = $product['price'];
    $catagory = $product['catagory'];
    $amnt = $product['amnt'];
    $disc = $product['disc'];

    if (!empty($_POST['pname'])) {
        $pname = $_POST['pname'];
    }
    if (!empty($_POST['price'])) {
        $price = $_POST['price'];
    }
    if (!empty($_POST['pcatagory'])) {
        $catagory = $_POST['pcatagory'];
    }
    if (!empty($_POST['amnt'])) {
        $amnt = $_POST['amnt'];
    }
    if (!empty($_POST['disc'])) {
        $disc = $_POST['disc'];
    }

    // echo "<script>alert('wait')</script>";
    // echo $pname, $price, $catagory, $amnt, $disc;

    $contobj = new Controller();
    $result =  $contobj->updateProductTable($pid, $pname, $price, $amnt, $catagory, $disc);
    echo "<script>alert('" . $result . "')</script>";
    header("Location:./provider.php?page=viewproducts");
}



require './view/edit.view.php';
