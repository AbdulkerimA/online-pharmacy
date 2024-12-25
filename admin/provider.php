<?php

//echo 'wellcome';

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'addproduct') {
        $currentpage = './view/addproduct.view.php';
    } else if ($_GET['page'] == 'viewproducts') {
        $currentpage = './view/viewproducts.view.php';
    } else if ($_GET['page'] == 'customers') {
        $currentpage = './view/customers.view.php';
    } else {
        $currentpage = './view/dashboard.view.php';
    }
} else {
    $currentpage = './view/dashboard.view.php';
}

include_once './view/provider.view.php';
