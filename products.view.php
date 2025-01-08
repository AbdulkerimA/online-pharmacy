<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/products.css">
    <title>products</title>
</head>

<body>
    <main id="productsmain">
        <section id="head">
            <span id="text">filter by</span>
            <select name="filter by" id="filterby">
                <option value="alphabet">alphabet</option>
                <option value="pricelow">price:low to high</option>
                <option value="pricehigh">price: high to low</option>
            </select>
        </section>
        <section id="products">
            <div id="filterby">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <div class="cont ">
                        <div id="header">
                            <span id="text">
                                catagory
                            </span>
                            <span id="icon">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <!--<i class="fa fa-minus" aria-hidden="true"></i>-->
                            </span>
                        </div>
                        <?php for ($j = 0; $j < 3; $j++): ?>
                            <div id="options">
                                <div id="option">
                                    <input type="checkbox" name="personalcare" id="pcare">
                                    <label for="prsonalcare">personal care</label>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                <?php endfor ?>
            </div>
            <div id="productscont">
                <?php foreach ($products as $product): ?>
                    <div id="product">
                        <img src="<?= $product['img'] ?>" alt="product">
                        <span id="pname">
                            <?= $product['name'] ?>
                        </span>
                        <span id="price"><?= $product['price'] ?> ETB</span>
                        <button onclick="addtocart(<?= $product['pid'] ?>,<?= $product['amnt'] ?>)">
                            add to cart
                        </button>
                    </div>
                <?php endforeach ?>
            </div>
            <p id="test">test</p>
        </section>
    </main>
</body>
<script>
    function addtocart(id, amnt) {
        alert(id);
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("test").innerHTML = this.responseText;
        }
        var data = {
            pid: id,
            amnt: amnt
        };

        // Convert the data object to a JSON string
        var jsonData = JSON.stringify(data);
        xhttp.open("POST", "addtocart.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(jsonData);
    }
</script>

</html>