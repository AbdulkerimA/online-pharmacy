<?php

include_once './inc/includes.inc.php';

$viewobj = new View();
$newprod = $viewobj->displaySingleTypeProduct('new', '');
$cheap = $viewobj->displaySingleTypeProduct('cheap', '');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uid = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);

    $contobj = new Controller();
    $result = $contobj->comment($uid, $comment);

    header("Location:./index.php");
}

require_once "./index.view.php";
