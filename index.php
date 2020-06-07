<?php 
$mail=$_GET["mail"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>失物招領系統</title>
</head>
<style>
		body{
			font-family: Microsoft JhengHei;
			background-color: white;

		}
		/*a{
			color: inherit;
			text-decoration: none;
			background-color: #46A3FF;
		}
		a:hover{
			background-color: #46A3FF;
			color: white;
		}*/
	</style>
<center>
<body>
<marquee width="400" scrollamount="9" behavior="alternate">歡迎進入失物招領系統</marquee>
<h2><center>歡迎進入失物招領系統</h2>
<a href="wholething.php"><button type="button">顯示所有失物</button></a>
<a href="allthing.php"><button type="button">篩選所有失物</button></a>
<a href="report.php"><button type="button">進入掛失系統</button></a>
<a href="history.php?mail=<?php echo $mail ?>"><button type="button">查看歷史紀錄</button></a>
<a href=""></a></center>
</body>

</html>