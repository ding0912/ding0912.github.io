<?php

include("conn.php");

echo "所有失物";


$type=$_POST["type"];
$color=$_POST["color"];
$location=$_POST["location"];
$t_forcatch=$_POST["t_forcatch"];
$mail=$_POST["mail"];
$time=time();

$SQL="SELECT * FROM lost , post  WHERE type='$type' OR color = '$color' OR location = '$location' OR t_forcatch >= '$t_forcatch' OR mail='$mail'";
$result = mysqli_query($con, $SQL);
if ($result) {
    $num = mysqli_num_rows($result);
    echo "lost資料表有 " . $num . " 筆資料<br>";
}
echo "<table border='1'>";
echo "<tr><th>物品名稱</th><th>物品類型</th><th>物品顏色</th><th>物品圖片</th><th>遺失地點</th><th>遺失時間</th><th>掛失時間</th><th>學生</th><th>更新資料</th></tr>";
 while( $row = mysqli_fetch_assoc($result) ){
 echo "<tr>"; 
 date_default_timezone_set('Asia/Taipei');
 // $catchdate=date('Y-m-d H:i:s',$row["t_forcatch"]);
 $postdate=date('Y-m-d H:i:s',$row["t_forpost"]);
  echo "<td>".$row['Lname']."</td><td>".$row['type']."</td><td>".$row['color']."</td><td>"."<img width='150' src='".$row['picture']."'>"."</td><td>".$row['location']."</td><td>".$row['t_forcatch']."</td><td>".$postdate."</td><td>".$row['mail']."</td><td><a href=update.php?No=".$row["No"].">更新資料</a></td>";
 echo "</tr>";
}
echo "</table>";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="allthing.php"><button type="button">篩選</button></a>
</body>
</html>