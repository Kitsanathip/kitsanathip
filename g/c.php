<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>กฤษทนาธิป เที่ยงทำ(มาร์ท) - Sales Report</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet">
    
    <style>
        body { background-color: #f8f9fa; font-family: 'Sarabun', sans-serif; }
        .card { border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .table-img { width: 50px; height: auto; border-radius: 5px; }
    </style>
</head>

<body>
<div class="container py-5">
    <div class="card bg-white p-4">
        <h1 class="text-center mb-4 text-primary">รายงานการสั่งซื้อ: กฤษทนาธิป เที่ยงทำ(มาร์ท)</h1>
        
        <div class="table-responsive">
            <table id="example" class="table table-striped table-hover" style="width:100%">
                <thead class="table">
                    <tr>
                        <th>Order ID</th>
                        <th>สินค้า</th>
                        <th>ประเภทสินค้า</th>
                        <th>วันที่</th>
                        <th>ประเทศ</th>
                        <th class="text-end">จำนวนเงิน</th>
                        <th class="text-center">รูป</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once("connectdb.php");
                        $sql = "SELECT * FROM `popsupermarket`";
                        $re = mysqli_query($conn, $sql);
                        $total = 0;
                        
                        while ($data = mysqli_fetch_array($re)) {
                            $total += $data['p_amout'];
                    ?>
                    <tr>
                        <td><?php echo $data['p_order_id']; ?></td>
                        <td><?php echo $data['p_product_name']; ?></td>
                        <td><span class="badge bg-info text-dark"><?php echo $data['p_category']; ?></span></td>
                        <td><?php echo date('d/m/Y', strtotime($data['p_date'])); ?></td>
                        <td><?php echo $data['p_country']; ?></td>
                        <td class="text-end fw-bold"><?php echo number_format($data['p_amout'], 0); ?></td>
                        <td class="text-center">
                            <img src="<?php echo $data['p_product_name']; ?>.jpg" 
                                 alt="Product Image" 
                                 class="table-img" 
                                 onerror="this.src='https://via.placeholder.com/50x50?text=No+Img'">
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot class="table-secondary">
                    <tr>
                        <th colspan="5" class="text-end">รวมทั้งสิ้น:</th>
                        <th class="text-end text-danger h5"><?php echo number_format($total, 0); ?></th>
                        <th>บาท</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.13.7/i18n/th.json" // ภาษาไทย
            },
            "order": [[ 0, "desc" ]], // เรียงตาม Order ID ล่าสุด
            "pageLength": 10
        });
    });
</script>
</body>
</html>