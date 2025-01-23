<?php

require_once "./inc/includes.inc.php";
// session_start();

// $viewobj = new View();
// $products = $viewobj->displayProductForUsers();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['search'])) {
        $searchKey = $_GET['search'];
    }
}

require_once("./nav.php");
require_once("./products.view.php");
require_once("./footer.php");
