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
            <!-- <select name="filter by" id="filterby" onchange="sortBy(this.value)">
                <option value="alphabet">alphabet</option>
                <option value="pricelow">price:low to high</option>
                <option value="pricehigh">price: high to low</option>
            </select> -->
            <form action="./products.php" method="get">
                <input type="search" name="key" id="sproduct">
                <button type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </section>
        <section id="products">
            <div id="filterby">

                <div id="cont" class="cont">
                    <div id="header" class="active" onclick="makeActive()">
                        <span id="text">
                            catagory
                        </span>
                        <div id="icon">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div id="options">
                        <div id="option">
                            <a href="./products.php">all</a>
                        </div>
                        <?php foreach ($catagories as $cat): ?>
                            <div id="option">
                                <a href="./products.php?s=c&key=<?= $cat['link'] ?>"><?= $cat['lable'] ?></a>
                            </div>
                        <?php endforeach ?>
                    </div>

                </div>

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
            <!-- <p id="test">test</p> -->
        </section>
    </main>
</body>
<script>
    document.querySelectorAll(".options").forEach((optionsDiv) => {
        optionsDiv.addEventListener("click", () => {
            const checkbox = optionsDiv.querySelector("input[type='checkbox']");
            if (checkbox) {
                checkbox.checked = !checkbox.checked;
            }
        });
    });

    function makeActive() {
        let optionsIcon = document.getElementById("icon");
        let option = document.getElementById("cont");
        if (option.classList.contains("active")) {
            option.classList.remove("active");
            optionsIcon.innerHTML = "<i class='fa fa-plus' aria-hidden='true'></i>";
        } else {
            option.classList.add("active");
            optionsIcon.innerHTML = '<i class="fa fa-minus" aria-hidden="true"></i>';
        }

    }

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

</html>