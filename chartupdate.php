
<?php

include "./inc/includes.inc.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    //echo "working";
    $jsonData = file_get_contents('php://input');

    $data = json_decode($jsonData, true);

    // // Access the 'id' and 'newData' values
    $pid = $data['pid'];
    $newData = $data['amnt'];

    // // Use $id and $newData for updating the data
    // // Perform the update operation here

    // // Send a response back if needed
    $contobj = new Controller();
    $result = $contobj->changeAmountOnCart($_SESSION['user'], $pid, $newData);
    echo $result;
} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    //echo "working";
    $jsonData = file_get_contents('php://input');

    $data = json_decode($jsonData, true);

    // // Access the 'id' and 'newData' values
    $pid = $data['pid'];

    // // Use $id and $newData for updating the data
    // // Perform the update operation here

    // // Send a response back if needed
    $contobj = new Controller();
    $result = $contobj->removeAllProductsFromCart($_SESSION['user'], $pid);
    echo $result;
}
