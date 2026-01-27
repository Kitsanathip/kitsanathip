<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กฤษทนาธิป เที่ยงทำ(มาร์ท)</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .chart-container {
        width: 80%;
        margin: 20px auto;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .chart-box {
        width: 45%;
        min-width: 300px;
    }
</style>
</head>

<body>
<h1>กฤษทนาธิป เที่ยงทำ(มาร์ท)</h1>

<table border="1">
<tr>
    <td>ประเทศ</td>
    <td>ยอดขาย</td>
</tr>
<?php
    include_once("connectdb.php");
    $sql = "SELECT `p_country`, SUM(`p_amout`) AS total FROM `popsupermarket` GROUP BY `p_country`";
    $re = mysqli_query($conn, $sql);
    
    // เตรียมตัวแปรสำหรับเก็บข้อมูลไปทำกราฟ
    $labels = [];
    $values = [];

    while ($data = mysqli_fetch_array($re)){
        $labels[] = $data['p_country'];
        $values[] = $data['total'];
?>
<tr>
    <td><?php echo $data['p_country'];?></td>
    <td align="right"><?php echo number_format($data['total'], 0);?></td>
</tr>
<?php } ?>
</table>

<hr>

<div class="chart-container">
    <div class="chart-box">
        <h3>ยอดขายแยกตามประเทศ (Bar Chart)</h3>
        <canvas id="myBarChart"></canvas>
    </div>
    <div class="chart-box">
        <h3>สัดส่วนยอดขาย (Pie Chart)</h3>
        <canvas id="myPieChart"></canvas>
    </div>
</div>

<script>
    // 3. นำข้อมูลจาก PHP เข้าสู่ JavaScript
    const labels = <?php echo json_encode($labels); ?>;
    const dataValues = <?php echo json_encode($values); ?>;

    const chartColors = [
        'rgba(255, 99, 132, 0.7)',
        'rgba(54, 162, 235, 0.7)',
        'rgba(255, 206, 86, 0.7)',
        'rgba(75, 192, 192, 0.7)',
        'rgba(153, 102, 255, 0.7)',
        'rgba(255, 159, 64, 0.7)'
    ];

    // สร้าง Bar Chart
    const ctxBar = document.getElementById('myBarChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขายรวม',
                data: dataValues,
                backgroundColor: chartColors,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // สร้าง Pie Chart
    const ctxPie = document.getElementById('myPieChart').getContext('2d');
    new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: chartColors,
                hoverOffset: 4
            }]
        }
    });
</script>

</body>
</html>