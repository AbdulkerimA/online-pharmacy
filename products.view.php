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
                <?php for ($i = 0; $i < 16; $i++): ?>
                    <div id="product">
                        <img src="./assets/pics/face_wash_cleansers.png" alt="product">
                        <span id="pname">
                            product name
                        </span>
                        <span id="price">250 birr</span>
                        <button>
                            add to cart
                        </button>
                    </div>
                <?php endfor ?>
            </div>
        </section>
    </main>
</body>

</html>