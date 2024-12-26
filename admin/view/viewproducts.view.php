<div id="viewproducts">
    <h2>
        all products in the store
    </h2>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>product</th>
                <th>name</th>
                <th>price</th>
                <th>amount</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><img src="<?= $product['img'] ?>" alt="img" style="width: 100px; height:100px;"></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['amount'] ?></td>
                    <td style="width: 25vw;">
                        <a href="./edit.php?id=1">
                            <button>
                                edit
                            </button>
                        </a>
                        <a href="./delete.php?id=1">
                            <button id="delete">
                                delete
                            </button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>