<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>กฤษทนาธิป เที่ยงทำ(มาร์ท)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .color-preview {
            width: 50px; 
            height: 50px; 
            border-radius: 50%; 
            border: 2px solid #dee2e6;
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0 text-center">
                        <i class="bi bi-person-vcard-fill"></i> สมัครสมาชิก
                    </h3>
                    <p class="text-center mb-0 small">กฤษทนาธิป เที่ยงทำ (มาร์ท)-Gemini</p>
                </div>
                
                <div class="card-body">
                    <form method="post" action="">
                        
                        <div class="mb-3">
                            <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="ระบุชื่อและนามสกุล" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="0xx-xxx-xxxx" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="height" class="form-label">ความสูง (ซม.) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="height" id="height" step="10" min="100" max="220" required>
                                <div class="form-text">ระบุได้ตั้งแต่ 100-220 ซม.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="color" class="form-label">สีที่ชอบ</label>
                                <input type="color" class="form-control form-control-color w-100" name="color" id="color" value="#563d7c" title="Choose your color">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="major" class="form-label">สาขาวิชา</label>
                            <select name="major" id="major" class="form-select">
                                <option value="การบัญชี">การบัญชี</option>
                                <option value="การจัดการ">การจัดการ</option>
                                <option value="การตลาด">การตลาด</option>
                                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                            </select>
                        </div>

                        <div class="d-grid gap-2 d-md-block text-center">
                            <button type="submit" name="Submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i> สมัครสมาชิก
                            </button>
                            <button type="reset" name="Reset" class="btn btn-warning text-dark">
                                <i class="bi bi-arrow-counterclockwise"></i> ลบข้อมูล
                            </button>
                            <button type="button" class="btn btn-info text-white" onClick="window.location='https://www.msu.ac.th'">
                                <i class="bi bi-globe"></i> MSU
                            </button>
                            <button type="button" class="btn btn-secondary" onClick="window.print()">
                                <i class="bi bi-printer"></i> พิมพ์
                            </button>
                        </div>

                    </form>
                </div>
            </div>

            <?php
            if(isset($_POST['Submit'])){
                $fullname = htmlspecialchars($_POST['fullname']); // เพิ่มความปลอดภัย
                $major = $_POST['major'];
                $color = $_POST['color'];
                $phone = htmlspecialchars($_POST['phone']);
                $height = $_POST['height'];
            ?>
            
            <div class="alert alert-success mt-4 shadow-sm" role="alert">
                <h4 class="alert-heading"><i class="bi bi-check2-square"></i> ข้อมูลการสมัคร</h4>
                <hr>
                <div class="row">
                    <div class="col-8">
                        <p class="mb-1"><strong>ชื่อ-สกุล:</strong> <?php echo $fullname; ?></p>
                        <p class="mb-1"><strong>เบอร์โทร:</strong> <?php echo $phone; ?></p>
                        <p class="mb-1"><strong>ความสูง:</strong> <?php echo $height; ?> ซม.</p>
                        <p class="mb-1"><strong>สาขา:</strong> <?php echo $major; ?></p>
                        <p class="mb-0"><strong>สีที่เลือก:</strong> <?php echo $color; ?></p>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <div class="color-preview shadow-sm" style="background: <?php echo $color; ?>;"></div>
                            <div class="small text-muted mt-1">ตัวอย่างสี</div>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>