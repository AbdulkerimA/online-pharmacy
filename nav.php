<?php
require_once './inc/includes.inc.php';
session_start();
$obj = new View();
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/style/nav.css">
</head>
<nav>
    <div id="top">
        <div id="logo">
            <img src="./" alt="midick">
        </div>
        <div id="links">
            <span><a href="./">Home</a></span>
            <span><a href="./about.php">about us</a></span>
            <span><a href="./products.php">products</a></span>
            <?php if (isset($_SESSION['islogedin']) && $_SESSION['islogedin']): ?>
                <?php $res = $obj->displayProductsOnTheCart($_SESSION['user']); ?>
                <span id="uname">
                    <?= $_SESSION['user'] ?>
                    <a href="./logout.php">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a>
                </span>
                <span>
                    <a href="./cart.php">
                        <span id="count"><?= count($res) ?></span>
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>
                </span>
            <?php endif ?>
            <?php if (!isset($_SESSION['islogedin'])): ?>
                <span id="sub">
                    <a href="./loginandsignup.php"> subscribe </a>
                </span>
            <?php endif ?>

        </div>
    </div>

    <div id="bottom">
        <span>
            <a href="./">medcines</a>
        </span>
        <span>
            <a href="./">baby care</a>
        </span>
        <span>
            <a href="./">skine care</a>
        </span>
        <span>
            <a href="./">women care</a>
        </span>
        <span>
            <a href="./">medical equipments</a>
        </span>
    </div>

</nav>