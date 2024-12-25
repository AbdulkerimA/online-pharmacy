<?php

// display the recored to be edited 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./asset/style/edit.css">
</head>
<section id="editproperty">
    <div id="img">
        <h2>
            edit your property image
        </h2>
        <img src="../asset/pics/alexander-andrews-A3DPhhAL6Zg-unsplash.jpg" alt="property image">
        <form action="./" method="post">
            <input type="file" name="" id="">
        </form>
    </div>

    <div id="propertyinfo">
        <h2>
            property information
        </h2>

        <form action="./" method="post">
            <div id="name">
                <label for="pname">
                    property name
                </label>
                <input type="text" name="pname" id="pname">
            </div>
            <div id="catagory">
                <label for="pcatagory">catagory</label>
                <input type="text" name="pcatagory" id="pcatagory">
            </div>
            <div id="price">
                <label for="price">price</label>
                <input type="number" name="price" id="price">
            </div>
            <div id="for">
                <label for="pfor">property for</label>
                <input type="text" name="pfor" id="pfor" placeholder="rent">
            </div>
            <div id="squerfoot">
                <label for="squearfoot">squear foot</label>
                <input type="number" name="squearfoot" id="squearfoot">
            </div>
            <div id="location">
                <label for="location">property location</label>
                <input type="text" name="location" id="location" placeholder="Enter properties location">
            </div>

            <button type="submit">submit</button>
        </form>
    </div>
</section>

</html>