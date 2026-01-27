<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กฤษนทาธิป เที่ยงทำ(มาร์ท)</title>
</head>

<body>
<h1>กฤษนทาธิป เที่ยงทำ(มาร์ท)</h1>

<form method="post" action="">
รหัสนิสิต<input type="number" min="2"  name="a" autofocus required>
<button type="submit" name="Submit"> OK</button>
</form>

<?php
if(isset($_POST['Submit'])){
$m = $_POST['a'] ;
	for($i=1;$i<=12;$i++){
	$b = $m * $i ;
	echo "($m) x ($i) = ($b) <br>";
	}
}
?>
</body>
</html>