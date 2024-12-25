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
                <h2>
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
                                <img src="<?= $product["pic"] ?>" alt="product">
                                <span id="info">
                                    product name <?= $product["proName"] ?>
                                    <br>
                                    price per unit <?= $product["pricePerUnit"] ?> birr
                                </span>
                                <div id="amount">
                                    <span id="add">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </span>
                                    <span id="value">
                                        <?= $product["productAmountAddedonTheCart"] ?>
                                    </span>
                                    <span id="decreas">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <span id="cancel">
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
                            <input type="hidden" name="public_key" value="YOUR_PUBLIC_API_KEY" />
                            <input type="hidden" name="tx_ref" value="negade-tx-12345678sss9" />
                            <input type="hidden" name="amount" value="<?= $totalPrice ?>" />
                            <input type="hidden" name="currency" value="ETB" />
                            <input type="hidden" name="email" value="israel@negade.et" />
                            <input type="hidden" name="first_name" value="Israel" />
                            <input type="hidden" name="last_name" value="Goytom" />
                            <input type="hidden" name="title" value="Let us do this" />
                            <input type="hidden" name="description" value="Paying with Confidence with cha" />
                            <input type="hidden" name="logo" value="https://chapa.link/asset/images/chapa_swirl.svg" />
                            <input type="hidden" name="callback_url" value="https://example.com/callbackurl" />
                            <input type="hidden" name="return_url" value="https://example.com/returnurl" />
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
</script>

</html>