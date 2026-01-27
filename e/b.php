<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มสมัครงาน - TechNova Innovations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .header-title {
            color: #0d6efd; /* Bootstrap Primary Color */
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <div class="text-center mb-5">
                <h2 class="header-title">กฤษทนาธิป เที่ยงทำ(มาร์ท)</h2>
                <h5 class="text-muted">TechNova Innovations Co., Ltd.</h5>
                <hr class="w-25 mx-auto text-primary">
                <h4>ใบสมัครงาน (Job Application Form)</h4>
            </div>
            
                <form action="" method="POST">
                
                <div class="mb-4">
                    <h5 class="text-primary mb-3"><i class="bi bi-briefcase-fill"></i> ข้อมูลการสมัคร</h5>
                    <div class="row">
                        <div class="col-12">
                            <label for="position" class="form-label">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                            <select class="form-select" id="position" name="position" required>
                                <option value="" selected disabled>-- กรุณาเลือกตำแหน่ง --</option>
                                <option value="frontend">Front-end Developer</option>
                                <option value="backend">Back-end Developer</option>
                                <option value="uxui">UX/UI Designer</option>
                                <option value="marketing">Digital Marketing Specialist</option>
                                <option value="hr">Human Resources Officer</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="mb-4">
                    <h5 class="text-primary mb-3">ข้อมูลส่วนตัว</h5>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                            <select class="form-select" id="prefix" name="prefix" required>
                                <option value="" selected disabled>เลือก</option>
                                <option value="mr">นาย</option>
                                <option value="mrs">นาง</option>
                                <option value="ms">นางสาว</option>
                            </select>
                        </div>
                        
                        <div class="col-md-5">
                            <label for="fullname" class="form-label">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="ระบุชื่อและนามสกุล" required>
                        </div>

                        <div class="col-md-4">
                            <label for="dob" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary mb-3">การศึกษาและความสามารถ</h5>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="education" class="form-label">ระดับการศึกษาล่าสุด <span class="text-danger">*</span></label>
                            <select class="form-select" id="education" name="education" required>
                                <option value="" selected disabled>-- เลือกระดับการศึกษา --</option>
                                <option value="highschool">มัธยมศึกษาตอนปลาย / ปวช.</option>
                                <option value="diploma">อนุปริญญา / ปวส.</option>
                                <option value="bachelor">ปริญญาตรี</option>
                                <option value="master">ปริญญาโท</option>
                                <option value="phd">ปริญญาเอก</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="skills" class="form-label">ความสามารถพิเศษ</label>
                            <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="เช่น ทักษะภาษาอังกฤษ, คอมพิวเตอร์, การขับรถ หรือใบรับรองต่างๆ"></textarea>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary mb-3">ประสบการณ์ทำงาน</h5>
                    <div class="row">
                        <div class="col-12">
                            <label for="experience" class="form-label">ประวัติการทำงาน (โดยสังเขป)</label>
                            <textarea class="form-control" id="experience" name="experience" rows="4" placeholder="ระบุชื่อบริษัท ตำแหน่ง และระยะเวลาที่เคยทำ (หากไม่มีให้ระบุว่า 'ไม่มีประสบการณ์')"></textarea>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                    <button class="btn btn-secondary me-md-2" type="reset">ล้างข้อมูล</button>
                    <button class="btn btn-primary px-5" type="submit" name="Submit">ส่งใบสมัคร</button>
                </div>

            </form>
        </div>
    </div>
    
	<?php
	if(isset($_POST['Submit'])){
              	$position = $_POST['position'];
				$prefix = $_POST['prefix'];
				$fullname = $_POST['fullname'];
				$dob = $_POST['dob'];
				$education = $_POST['education'];
				$skills = $_POST['skills'];
				$experience = $_POST['experience'];
				
				include_once("connectdb.php");
				
				$sql = "insert into application (a_position,a_perfix,a_name,a_date,a_class,a_skills,a_experience) values ('{$position}','{$prefix}','{$fullname}','{$dob}','{$education}','{$skills}','{$experience}')";
				mysqli_query($conn,$sql)  or die ("Insert ไม่ได้");
				
				echo"<script>";
				echo"alert('เพิ่มข้อมูลสำเร็จ')";
				echo"</script>";
	}?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>