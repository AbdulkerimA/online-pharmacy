<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./lib/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/style/index.css">
    <title>MEDIAEVEN</title>
</head>

<body>
    <!-- nav -->
    <?php require_once("./nav.php") ?>
    <!-- main -->
    <main>
        <section id="sec1">
            <div id="headline">
                <h2>your trusted online pharmacy, deliverd to your door step</h2>
                <p>
                    quality medicines, Expert advice, and convenience you can count on
                </p>
            </div>

            <div id="search">
                <form action="./products.php" method="get">
                    <input type="text" name="key" id="searchinp" required placeholder="what are you looking for">
                    <label for="search">
                        <button type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </label>
                </form>
            </div>

            <div id="cta">
                <a href="./products.php">
                    <button>
                        shop now
                    </button>
                </a>
            </div>
        </section>

        <section id="sec2">
            <div id="left">
                <img src="./assets/pics/order.jpg" alt="order">
            </div>
            <div id="right">
                <h4>
                    how does it works
                </h4>
                <div id="cont">
                    <span id="">
                        <span id="num">1</span>
                        <p>
                            select your purchase and add to cart
                        </p>
                    </span>
                    <span id="">
                        <span id="num">2</span>
                        <p>
                            go to cart and check out
                        </p>
                    </span>
                    <span id="">
                        <span id="num">3</span>
                        <p>
                            we will confirm your order by calling
                        </p>
                    </span>
                    <span id="">
                        <span id="num">4</span>
                        <p>
                            now sit back, your medicen will be deliverd
                            to your door step.
                        </p>
                    </span>
                </div>
            </div>
        </section>

        <section id="sec3">
            <div id="notice">
                <h4>
                    cheapest products
                </h4>
                <span><i><a href="./products.php">view all ></a></i></span>
            </div>
            <div id="products">
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <div id="product">
                        <img src="<?= $cheap[$i]['img'] ?>" alt="product">
                        <span id="pname">
                            <?= $cheap[$i]['name'] ?>
                        </span>
                        <span id="price"><?= $cheap[$i]['price'] ?> ETB</span>
                        <!-- <span id="discount">20% off</span> -->
                        <button onclick="addtocart(<?= $prod['pid'] ?>,<?= $prod['amnt'] ?>)">
                            add to cart
                        </button>
                    </div>
                <?php endfor ?>
            </div>
        </section>

        <section id="sec4">
            <div id="headline">
                <p id="head">become a member today</p>
                <p>
                    get discount benefits
                </p>
            </div>
            <div id="attention">
                <p>
                    save 5% on every order,save 20% on daily essentials
                    <br>
                    get medicen refill every month
                </p>
                <a href="./loginandsignup.php">
                    <button id="sub">
                        Register now
                    </button>
                </a>
            </div>
            <div id="familypic">
                <img src="./assets/pics/PlusFamily.png" alt="become a member">
            </div>
        </section>

        <!-- products section -->
        <section id="sec5">
            <header>
                <h3>
                    products
                </h3>
            </header>
            <div id="products">
                <?php foreach ($newprod as $prod): ?>
                    <div id="product">
                        <img src="<?= $prod['img'] ?>" alt="product">
                        <span id="pname">
                            <?= $prod['name'] ?>
                        </span>
                        <span id="price"><?= $prod['price'] ?> ETB</span>
                        <button onclick="addtocart(<?= $prod['pid'] ?>,<?= $prod['amnt'] ?>)">
                            add to cart
                        </button>
                    </div>
                <?php endforeach ?>
            </div>
            <div id="explore">
                <a href="./products.php">
                    explore more <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </section>

        <!-- testimonials section -->
        <section id="sec6">
            <header>
                <h3>
                    testimonials
                </h3>
            </header>
            <div id="testimonialssection" class="swiper mySwiper">
                <!-- <div id="leftclick">
                    <
                </div> -->
                <div id="testimonialsbox" class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./" alt="user">
                        <p id="comment">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Sed magni voluptatem doloribus quasi illum itaque officiis sint voluptate
                            accusamus cupiditate voluptates tempore vitae, sapiente,
                            natus quaerat fugiat dolore cum labore?
                        </p>
                    </div>

                    <div class="swiper-slide">
                        <img src="./" alt="user">
                        <p id="comment">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Sed magni voluptatem doloribus quasi illum itaque officiis sint voluptate
                            accusamus cupiditate voluptates tempore vitae, sapiente,
                            natus quaerat fugiat dolore cum labore?
                        </p>
                    </div>
                </div>
                <!-- <div id="rightclick">
                    >
                </div> -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </section>

        <!-- subscribe -->
        <section id="sec4">
            <div id="headline">
                <p id="head">become a member today</p>
                <p>
                    get discount benefits
                </p>
            </div>
            <div id="attention">
                <p>
                    save 5% on every order,save 20% on daily essentials
                    <br>
                    get medicen refill every month
                </p>
                <a href="./loginandsignup.php">
                    <button id="sub">
                        Register now
                    </button>
                </a>
            </div>
            <div id="familypic">
                <img src="./assets/pics/PlusFamily.png" alt="become a member">
            </div>
        </section>
    </main>
    <!-- footer -->
    <?php require_once("./footer.php") ?>
    <script src="./lib/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        function addtocart(id, amnt) {
            // alert('product added to the cart');
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if (this.responseText == 'login first') {
                    window.location.assign("./loginandsignup.php");
                } else {
                    window.location.reload();
                }
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
</body>

</html>