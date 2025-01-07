<div id="customers">
    <h2>
        all subscribed customers
    </h2>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>user name</th>
                <th>email</th>
                <th>phone number</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <!-- <td><img src="<?= $product['img'] ?>" alt="img" style="width: 100px; height:100px;"></td> -->
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['tel'] ?></td>
                    <td style="width: 25vw;">
                        <a href="./delete.php?uid=<?= $user['name'] ?>">
                            <button id="delete">
                                delete user
                            </button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</div>