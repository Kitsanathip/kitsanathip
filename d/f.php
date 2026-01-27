<?php
// ตรวจสอบว่ามีการอัปโหลดไฟล์หรือไม่
if (isset($_FILES['uploaded_file'])) {
    $fileTmpPath = $_FILES['uploaded_file']['tmp_name'];
    $fileName = $_FILES['uploaded_file']['name'];
    $fileSize = $_FILES['uploaded_file']['size'];
    $fileType = $_FILES['uploaded_file']['type'];

    echo "<h2>ข้อมูลไฟล์ที่อัปโหลด</h2>";
    echo "ชื่อไฟล์: " . htmlspecialchars($fileName) . "<br>";
    echo "ขนาดไฟล์: " . $fileSize . " bytes<br>";
    echo "ชนิดไฟล์: " . htmlspecialchars($fileType) . "<br>";

    echo "<h2>เนื้อหาไฟล์</h2>";
    // อ่านและแสดงเนื้อหาไฟล์ (กรณีเป็น text-based เช่น txt, csv)
    $fileContent = file_get_contents($fileTmpPath);
	echo "<pre>" . htmlspecialchars($fileContent) . "</pre>";
