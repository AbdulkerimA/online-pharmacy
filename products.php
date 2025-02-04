<?php

require_once "./inc/includes.inc.php";
// session_start();

$viewobj = new View();
$products = $viewobj->displayProductForUsers();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['key'])) {
        $searchKey = $_GET['key'];
        $stype = isset($_GET['s']);
        if ($stype) {
            // echo $searchKey;
            $products = $viewobj->displaySingleTypeProduct('catagory', $searchKey);
        } else {
            $products = $viewobj->displaySingleTypeProduct('sort', $searchKey);
        }
    }
}


require_once("./nav.php");
require_once("./catagories.php");
require_once("./products.view.php");
require_once("./footer.php");
