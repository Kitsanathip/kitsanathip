<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กฤษทนาธิป เที่ยงทำ(มาร์ท)</title>
</head>

<body>
<h1>กฤษทนาธิป เที่ยงทำ(มาร์ท)</h1>
<form method="post" action="">
คำค้น<input type="text"  name="a" autofocus>
<button type="submit" name="Submit"> OK</button>
</form>
<hr>


<table border="1">
<tr>
	<td>Order ID</td>
    <td>สินค้า</td>
    <td>ประเภทสินค้า</td>
    <td>วันที่</td>
    <td>ประเทศ</td>
    <td>จำนวนเงิน</td>
    <td>รูป</td>
</tr>
<?php
	include_once("connectdb.php");
	@$kw = $_POST['a'];
	$sql = "SELECT * FROM `popsupermarket`
	WHERE p_product_name LIKE'%{$kw}%' 
	OR p_category LIKE '%{$kw}%' 
	OR p_country LIKE '%{$kw}%' ";
	$re = mysqli_query($conn,$sql);
	$total =0;
	while ($data = mysqli_fetch_array($re)){
		$total += $data['p_amout'];
	
?>
<tr>
	<td><?php echo $data['p_order_id'];?></td>
    <td><?php echo $data['p_product_name'];?></td>
    <td><?php echo $data['p_category'];?></td>
    <td><?php echo $data['p_date'];?></td>
    <td><?php echo $data['p_country'];?></td>
    <td align="right"><?php echo number_format($data['p_amout'],0);?></td>
    <td><img src="<?php echo $data['p_product_name'];?>.jpg" width="55"</td>
</tr>
<?php } ?>
<tr>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><b><?php echo number_format ($total,0);?></td>
    <td>&nbsp;</td>
</tr>
</table>
</body>
</html>