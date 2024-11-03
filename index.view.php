<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/style/index.css">
    <title>MEDIAEVEN</title>
</head>

<body>
    <nav>
        <div id="top">
            <div id="logo">
                <img src="./" alt="midick">
            </div>
            <div id="links">
                <span><a href="./">Home</a></span>
                <span><a href="./">about us</a></span>
                <span id="sub">subscribe</span>
                <span>
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </span>
            </div>
        </div>

        <div id="bottom">
            <span>
                <a href="./">medcines</a>
            </span>
            <span>
                <a href="./">baby care</a>
            </span>
            <span>
                <a href="./">skine care</a>
            </span>
            <span>
                <a href="./">women care</a>
            </span>
            <span>
                <a href="./">medical equipments</a>
            </span>
        </div>

    </nav>

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
                <form action="./index.php" method="get">
                    <input type="text" name="search" id="searchinp" placeholder="what are you looking for">
                    <label for="search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                </form>
            </div>

            <div id="cta">
                <a href="./">
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
                    today's best deal
                </h4>
                <span><i><a href="./">view all ></a></i></span>
            </div>
            <div id="products">
                <?php for ($i = 0; $i < 16; $i++): ?>
                    <div id="product">
                        <img src="./assets/pics/face_wash_cleansers.png" alt="product">
                        <span id="pname">
                            product name
                        </span>
                        <span id="price">250 birr</span>
                        <span id="discount">20% off</span>
                        <button>
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
                <button id="sub">
                    Register now
                </button>
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
                <?php for ($i = 0; $i < 16; $i++): ?>
                    <div id="product">
                        <img src="./assets/pics/beard_oil.png" alt="product">
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
            <div id="testimonialssection">
                <div id="leftclick">
                    <?php echo "<" ?>
                </div>
                <div id="testimonialsbox">
                    <div id="testimonial">
                        <img src="./" alt="user">
                        <p id="comment">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Sed magni voluptatem doloribus quasi illum itaque officiis sint voluptate
                            accusamus cupiditate voluptates tempore vitae, sapiente,
                            natus quaerat fugiat dolore cum labore?
                        </p>
                    </div>
                </div>
                <div id="rightclick">
                    >
                </div>
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
                <button id="sub">
                    Register now
                </button>
            </div>
            <div id="familypic">
                <img src="./assets/pics/PlusFamily.png" alt="become a member">
            </div>
        </section>
    </main>
    <footer>
        <div id="top">
            <h3>Navigation</h3>
            <ul>
                <li>home</li>
                <li>about us</li>
                <li>products</li>
            </ul>
        </div>
        <div id="bottom">
            <div id="copyright">
                all rights reserved by MEDIAEVEN &copy; 2024
            </div>
            <div id="getapp">
                <div id="android">
                    <img src="./assets/" alt="android">
                    <p>
                        download from playstore
                    </p>
                </div>
                <div id="ios">
                    <img src="./assets/pics/" alt="ios">
                    <p>
                        download from apple store
                    </p>
                </div>
            </div>
            <div id="socialmedias">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-telegram" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
        </div>
    </footer>
</body>

</html>