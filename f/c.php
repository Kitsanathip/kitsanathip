<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กฤษนทาธิป เที่ยงทำ(มาร์ท)</title>
</head>

<body>
<h1>กฤษนทาธิป เที่ยงทำ(มาร์ท)</h1>
<form method="post" action="">
กรอกตัวเลข<input type="number" min="0" max="100" name="a" autofocus required>
<button type="submit" name="Submit"> OK</button>
</form>
<?php 
if(isset($_POST['Submit'])){
 $score = $_POST['a'] ; 
 if ($score >= 80) { 
 $grade = "A" ; 
 } else if ($score >= 70) { 
 $grade = "B" ; 
 } else if ($score >= 60) { 
 $grade = "C" ; 
 } else if ($score >= 50) { 
 $grade = "D" ; 
 } else { 
 $grade = "F" ; 
 }  
 echo "<hr>";
 echo "คะแนน $score ได้เกรด $grade" ; 
}
?>
</body>
</html>