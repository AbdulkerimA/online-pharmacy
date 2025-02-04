<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./asset/style/edit.css">
</head>
<section id="editproperty">
    <h2>
        edit your property image
    </h2>
    <div id="img">
        <img src="<?= $product['img'] ?>" alt="property image">
    </div>

    <div id="propertyinfo">
        <h2>
            property information
        </h2>
        <form action="./edit.php" method="post" enctype="multipart/form-data">
            <div id="productimg">
                <label for="file">update product img</label>
                <input type="file" name="file" id="file">
            </div>
            <input type="hidden" name="pid" value="<?= $product['pid'] ?>">
            <div id="name">
                <label for="pname">
                    product name
                </label>
                <input type="text" name="pname" id="pname" placeholder="<?= $product['name'] ?>">
            </div>
            <div id="catagory">
                <label for="pcatagory">catagory</label>
                <!-- <input type="text" name="pcatagory" id="pcatagory" placeholder=""> -->
                <select name="pcatagory" id="pcatagory">
                    <?php foreach ($catagories as $catagory): ?>
                        <option value="<?= $catagory['link'] ?>">
                            <?= $catagory['lable'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div id="price">
                <label for="price">price</label>
                <input type="number" name="price" id="price" placeholder="<?= $product['price'] ?>">
            </div>
            <div id="amount">
                <label for="amnt">product amount</label>
                <input type="number" name="amnt" id="amnt" placeholder="<?= $product['amnt'] ?>">
            </div>
            <div id="disc">
                <label for="disc">property location</label>
                <textarea name="disc" id="disc">
                    <?= $product['disc'] ?>
                </textarea>
            </div>

            <button type="submit">submit</button>
        </form>
    </div>
</section>

</html>