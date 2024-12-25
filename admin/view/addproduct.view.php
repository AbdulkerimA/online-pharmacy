<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="./asset/style/addproperty.css"> -->
</head>
<section id="addproduct">
    <div id="uploadimg">
        <h2>
            upload your property image here
        </h2>
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
                    product name
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
                <label for="disc">discription</label>
                <textarea name="disc" id="disc" placeholder="product discription">

                </textarea>
            </div>

            <button type="submit">submit</button>
        </form>
    </div>
</section>

</html>