<?php

require '../inc/includes.admin.inc.php';
if (isset($_GET['id'])) {
    $contobj = new Controller();
    $result = $contobj->removeProduct($_GET['id']);
    header("Location:./provider.php?page=viewproducts&&result=$result");
} else if (isset($_GET['uid'])) {
    $contobj = new Controller();
    $result = $contobj->deleteUser(strtolower($_GET['uid']));
    header("Location:./provider.php?page=customers&&result=$result");
}
