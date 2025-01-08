<?php
session_start();

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 'admin') {
        header("Location:../loginandsignup.php");
    }
} else {
    header("Location:../loginandsignup.php");
}

include "../inc/includes.admin.inc.php";

$error = null;

if (isset($_GET['error'])) {
    $error = $_GET['error'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['pname'] && $_POST['pcatagory'] && $_POST['price'] && $_POST['amount'] && $_POST['disc'])) {
        $pname = strtolower(htmlspecialchars($_POST['pname']));
        $pcatagory = strtolower(htmlspecialchars($_POST['pcatagory']));
        $price = htmlentities($_POST['price']);
        $amount = htmlspecialchars($_POST['amount']);
        $disc = strtolower(htmlspecialchars($_POST['disc']));

        if (!isset($_FILES['file'])) {
            header("Location:./provider.php?error=pleas upload a file");
        }
        $pic = $_FILES['file'];
        $filepath = "../assets/products/";
        $fileToUpload = $filepath . basename($pic['name']);

        $uploadStatus = move_uploaded_file($pic['tmp_name'], $fileToUpload);

        if ($uploadStatus) {
            $img = "/online-pharmacy/assets/products/" . basename($pic['name']);
            $controllObj = new Controller();
            $result = $controllObj->addProduct($img, $amount, $pname, $price, $pcatagory, $disc);
            header("Location:./provider.php?page=viewproducts&&result=" . $result);
        } else {
            $error = "can upload the file " . $pic['error'];
        }
    } else {
        header("Location:./provider.php?error=allfilds must be filled");
    }
}


if (isset($_GET['page'])) {
    if ($_GET['page'] == 'addproduct') {
        $currentpage = './view/addproduct.view.php';
    } else if ($_GET['page'] == 'viewproducts') {
        $viewobj = new View();
        $products = $viewobj->displayProductForUsers();
        $currentpage = './view/viewproducts.view.php';
    } else if ($_GET['page'] == 'customers') {
        $viewobj = new View();
        $users = $viewobj->displayAllUsers();
        $currentpage = './view/customers.view.php';
    } else {
        $viewobj = new View();
        $comments = $viewobj->fetchComment();
        $ppu = $viewobj->displayGeneralStat();
        $sells = $viewobj->displaySellsStat();
        $xaxis = array_column($sells, "date");
        $yaxis = array_column($sells, "amount");
        $currentpage = './view/dashboard.view.php';
    }
} else {
    $viewobj = new View();
    $comments = $viewobj->fetchComment();
    $ppu = $viewobj->displayGeneralStat();
    $sells = $viewobj->displaySellsStat();
    $xaxis = array_column($sells, "date");
    $yaxis = array_column($sells, "amount");
    $currentpage = './view/dashboard.view.php';
}

include_once './view/provider.view.php';
