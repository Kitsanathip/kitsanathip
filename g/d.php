<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กฤษทนาธิป เที่ยงทำ(มาร์ท)</title>
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
	$sql = "SELECT `p_country`,SUM(`p_amout`)AS total FROM `popsupermarket` GROUP BY `p_country`";
	$re = mysqli_query($conn,$sql);
	while ($data = mysqli_fetch_array($re)){
	
?>
<tr>
    <td><?php echo $data['p_country'];?></td>
    <td align="right"><?php echo number_format($data['total'],0);?></td>
<?php } ?>
</tr>
</table>
</body>
</html>