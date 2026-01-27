<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>กฤษทนาธิป เที่ยงทำ(มาร์ท)</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="m-0">กฤษทนาธิป เที่ยงทำ (มาร์ท)-GPT</h3>
                </div>
                <div class="card-body">

                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">ชื่อ-สกุล *</label>
                            <input type="text" name="fullname" class="form-control" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">เบอร์โทร *</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ความสูง (ซม.) *</label>
                            <input type="number" name="height" class="form-control" step="10" min="100" max="220" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สีที่ชอบ</label>
                            <input type="color" name="color" class="form-control form-control-color">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สาขาวิชา</label>
                            <select name="major" class="form-select">
                                <option value="การบัญชี">การบัญชี</option>
                                <option value="การจัดการ">การจัดการ</option>
                                <option value="การตลาด">การตลาด</option>
                                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" name="Submit" class="btn btn-success w-50 me-2">สมัครสมาชิก</button>
                            <button type="reset" name="Reset" class="btn btn-secondary w-50">ลบข้อมูล</button>
                        </div>

                        <div class="mt-3 d-flex justify-content-between">
                            <button type="button" onclick="window.location='https://www.msu.ac.th'" class="btn btn-info w-50 me-2">MSU</button>
                            <button type="button" onclick="window.print()" class="btn btn-dark w-50">พิมพ์</button>
                        </div>

                    </form>

                </div>
            </div>

            <div class="mt-4">
                <hr>
                <?php
                if(isset($_POST['Submit'])){
                    $fullname = $_POST['fullname'];
                    $major = $_POST['major'];
                    $color = $_POST['color'];

                    echo "<div class='alert alert-primary'>";
                    echo "ชื่อ-สกุล: ".$fullname."<br>";
                    echo "เบอร์: ".$_POST['phone']."<br>";
                    echo "ความสูง: ".$_POST['height']." ซม.<br>";
                    echo "สาขา: ".$major."<br>";
                    echo "สี: ".$color."<div style='width:30px; height:30px; background:{$color}; border:1px solid #000;'></div>";
                    echo "</div>";
                }
                ?>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
