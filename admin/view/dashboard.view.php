<div id="dashboard">
    <div id="info">
        <div id="total">
            <span>
                $<?= $ppu['payment'] ?>
            </span>
            <span>
                earned
            </span>
        </div>
        <div id="pnum">
            <span>
                <?= $ppu['products']  ?>
            </span>
            <span>
                aveliable products
            </span>
        </div>
        <div id="sub">
            <span>
                <?= $ppu['users']  ?>
            </span>
            <span>
                subscribers
            </span>
        </div>
    </div>

    <div id="chart">

        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>

    </div>
    <div id="users">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>comment date</th>
                    <th>email</th>
                    <th>comment</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comments as $comment): ?>
                    <tr>
                        <td><?= $comment['date'] ?></td>
                        <td><?= $comment['uid'] ?></td>
                        <td><?= $comment['comment'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<script>
    // console.log(<?= json_encode($xaxis) ?>);
    // console.log(<?= json_encode($yaxis) ?>);
    var xValues = <?php echo json_encode($xaxis) ?>; // most sold products
    var yValues = <?php echo json_encode($yaxis) ?>; // valus
    var barColors = ["#2ECC71", "#E67E22", "#9B59B6", "#1ABC9C", "#2C3E50"]; // 

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {}
    });
</script>