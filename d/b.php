<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กฤษทนาธิป เที่ยงทำ(มาร์ท)</title>
</head>

<body>
<h1>กฤษทนาธิป เที่ยงทำ(มาร์ท)</h1>
<form method="post" action="">
ชื่อ-สกุล <input type="text" name="fullname" required autofocus> * <br>
เบอร์โทร <input type="text" name="phone" required> * <br>
ความสูง <input type="number" name="height" step="10" min="100" max="220" required> ซม. * <br>
สี <input type="color" name="color"> <br>
สาขาวิชา
<select name="major">
	<option value="การบัญชี">การบัญชี</option>
    <option value="การจัดการ">การจัดการ</option>
    <option value="การตลาด">การตลาด</option>
    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
</select> <br>
<!--<input type="submit" name="Submit" value="สมัครสมาชิก">-->
<button type="submit" name="Submit">สมัครสมาชิก</button> 
<button type="reset" name="Reset">ลบข้อมูล</button>
<button type="button" onClick="window.location='https://www.msu.ac.th'">MSU</button>
<button type="button" onClick="window.print() ">พิมพ์</button>
</form>
<hr>
<?php
if(isset($_POST['Submit'])){
	$fullname = $_POST['fullname'];
	$major = $_POST['major'];
	$color = $_POST['color'];
	
	echo"ชื่อ-สกุล: ".$fullname."<br>";
	echo"เบอร์: ".$_POST['phone']."<br>";
	echo"ความสูง: ".$_POST['height']."ซม.<br>";
	echo"สาขา: ".$major."<br>";
	echo"สี: ".$color."<div style='background:{$color}'>.</div>";
}
?>
</body>
</html>
