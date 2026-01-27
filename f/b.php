<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กฤษทนาธิป เที่ยงทำ(มาร์ท)</title>
</head>

<body>
<h1>กฤษทนาธิป เที่ยงทำ(มาร์ท)</h1>
<form method="post" action="">
กรอกตัวเลข<input type="number" name="a" autofocus required>
<button type="submit" name="Submit"> OK</button>
</form>

<?php
if(isset($_POST['Submit'])) {
	$gender = $_POST['a'];
	if($gender == 1){
	echo "เพศชาย";
	} else if ($gender == 2){
		echo "เพศหญิง";
	} else if ($gender == 3){
		echo "เพศทางเลือก";
	} else {
		echo "อื่นๆ";
	}
	
}
?>

</body>
</html>