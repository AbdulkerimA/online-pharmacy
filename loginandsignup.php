<?php

include "./inc/includes.inc.php";

$error = null;

if (isset($_GET['error'])) {
    $error = $_GET['error'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['user'] && $_POST['email'] && $_POST['tel'] && $_POST['pass'])) {
        $user = strtolower(htmlspecialchars($_POST['user']));
        $email = htmlspecialchars($_POST['email']);
        $tel = strtolower(htmlentities($_POST['tel']));
        $pass = strtolower(htmlspecialchars($_POST['pass']));

        $controllObj = new Controller();
        $controllObj->register($user, $pass, $email, $tel);
    } else if (!empty($_POST['luname']) && !empty($_POST['lpass'])) {

        $luname = strtolower(htmlspecialchars($_POST['luname']));
        $lpass = strtolower(htmlspecialchars($_POST['lpass']));

        $viewobj = new View();
        $viewobj->login($luname, $lpass);
    }
}

include './view/loginandsignup.view.php';
