<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/cart.css">
    <title>product</title>
</head>

<body>
    <main id="cartmain">
        <section id="cart">
            <header>
                <h2 id="test">
                    my cart
                </h2>
                <h3>
                    <?= $amountOfProducts ?>
                    items in your cart
                </h3>
            </header>
            <div id="thecart">
                <?php if ($amountOfProducts >= 1): ?>
                    <div id="itemscont">
                        <?php foreach ($productsOnCart as $product): ?>
                            <div id="itemoncart">
                                <img src="<?= $product["img"] ?>" alt="product">
                                <span id="info">
                                    product name <?= $product["pname"] ?>
                                    <br>
                                    price per unit <?= $product["price"] ?> birr
                                </span>
                                <div id="amount">
                                    <span id="add" onclick="increaseamnt(<?= $product['pid'] ?>,<?= $product['amnt'] ?>,<?= $product['amntinStore'] ?>)">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </span>
                                    <span id="value">
                                        <?= $product["amnt"] ?>
                                    </span>
                                    <span id="decreas" onclick="decreaseamnt(<?= $product['pid'] ?>,<?= $product['amnt'] ?>)">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <span id="cancel" onclick="deleteProduct(<?= $product['pid'] ?>)">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div id="checkout">
                        <span id="total">
                            total: <?= $totalPrice ?> birr
                        </span>
                        <form method="POST" action="https://api.chapa.co/v1/hosted/pay">
                            <input type="hidden" name="public_key" value="CHAPUBK_TEST-3USL2taXMjXSLtG9VdZ3Qv7zaZTUtxfL" />
                            <input type="hidden" name="tx_ref" value="<?= $_SESSION['tid'] ?>" />
                            <input type="hidden" name="amount" value="<?= $totalPrice ?>" />
                            <input type="hidden" name="currency" value="ETB" />
                            <input type="hidden" name="email" value="degualemayehu7@gmail.com" />
                            <input type="hidden" name="first_name" value="someone" />
                            <input type="hidden" name="last_name" value="Goytom" />
                            <input type="hidden" name="title" value="Let us do this" />
                            <input type="hidden" name="description" value="Paying with Confidence with cha" />
                            <input type="hidden" name="logo" value="https://chapa.link/asset/images/chapa_swirl.svg" />
                            <input type="hidden" name="callback_url" value="" />
                            <input type="hidden" name="return_url" value="http://localhost/online-pharmacy/payment.php?status=success" />
                            <input type="hidden" name="meta[title]" value="test" />
                            <button>
                                checkout
                            </button>
                        </form>

                    </div>
                <?php endif ?>

                <?php if ($amountOfProducts < 1): ?>
                    <div id="noitem">
                        <h2>
                            There is nothing in your cart pleas
                            app a product first
                        </h2>
                        <a href="./products.php">
                            <button>
                                back to products
                            </button>
                        </a>
                    </div>
                <?php endif ?>
            </div>
        </section>
    </main>
</body>
<script>
    /*document.getElementById("cartmain").style.height = window.innerHeight - 150;*/
    function decreaseamnt(id, amnt) {
        // alert(` function s ${id} ${amnt}`);

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            // document.getElementById("test").innerHTML = this.responseText;
            // alert(this.responseText);
            location.reload();
        }
        amnt--;
        var data = {
            pid: id,
            amnt: amnt
        };

        if (amnt >= 1) {
            // Convert the data object to a JSON string
            var jsonData = JSON.stringify(data);
            xhttp.open("PUT", "chartupdate.php");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(jsonData);
        }
    }

    function increaseamnt(id, amnt, amntinStore) {
        // alert(` function s ${id} ${amnt} ${amntinStore}`);

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            // document.getElementById("test").innerHTML = this.responseText;
            // alert(this.responseText);
            location.reload();
        }
        if (amnt < amntinStore) {
            amnt++;
        }
        var data = {
            pid: id,
            amnt: amnt
        };

        // Convert the data object to a JSON string
        var jsonData = JSON.stringify(data);
        xhttp.open("PUT", "chartupdate.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(jsonData);
    }

    function deleteProduct(id) {
        // alert(` function s ${id}`);

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            // document.getElementById("test").innerHTML = this.responseText;
            alert(this.responseText);
            location.reload();
        }
        var data = {
            pid: id,
        };

        // Convert the data object to a JSON string
        var jsonData = JSON.stringify(data);
        xhttp.open("DELETE", "chartupdate.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(jsonData);
    }
</script>

</html>