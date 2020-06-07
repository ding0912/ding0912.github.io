<?php

$con=mysqli_connect('localhost','root','kazma1999','report');

include("conn.php");
echo "紀錄！";

$SQL= "SELECT * FROM lost";
$result=mysqli_query($con,$SQL);
echo "<table border='1'>";
echo "<tr><th>物品名稱</th><th>物品類型</th><th>物品顏色</th><th>圖片</th><th>遺失地點</th><th>遺失時間</th><th>掛失時間</th></tr>";
 while( $row = mysqli_fetch_assoc($result) ){
 echo "<tr>"; 
 date_default_timezone_set('Asia/Taipei');
 $newdate=date('Y-m-d H:i:s',$row["t_forpost"]);
     echo "<td>".$row['Lname']."</td><td>".$row['type']."</td><td>".$row['color']."</td><td>"."<img width='150' src='".$row['picture']."'>"."</td><td>".$row['location']."</td><td>".$row['t_forcatch']."</td><td>".$newdate."</td>";

echo "</tr>";
}
echo "</table>";


?>