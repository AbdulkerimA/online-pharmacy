<div id="dashboard">
    <div id="info">
        <div id="total">
            <span>
                $<?= '2000' ?>
            </span>
            <span>
                earned
            </span>
        </div>
        <div id="pnum">
            <span>
                <?= 40 ?>
            </span>
            <span>
                aveliable products
            </span>
        </div>
        <div id="sub">
            <span>
                <?= 1000 ?>
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
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<script>
    var xValues = ["monday", "tuesday", "wednesday", "thiersday", "friday", "saterday", "sunday"]; // most sold products
    var yValues = [55, 49, 44, 24, 15, 30, 50, 70]; // valus
    var barColors = ["red", "green", "blue", "orange", "brown", "yellow"]; // 

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