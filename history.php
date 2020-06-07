<?php

$con=mysqli_connect('localhost','root','kazma1999','report');

include("conn.php");
echo "掛失物紀錄！";

$mail=$_GET["mail"];
$SQL= "SELECT * FROM post WHERE poster='$mail'";
$result=mysqli_query($con,$SQL);
echo "<table border='1'>";
echo "<tr><th>物品名稱</th><th>物品類型</th><th>物品顏色</th><th>遺失地點</th><th>遺失時間</th><th>掛失時間</th><th>掛失狀態</th></tr>";
 while( $row = mysqli_fetch_assoc($result) ){
 echo "<tr>"; 
 date_default_timezone_set('Asia/Taipei');
 $newdate=date('Y-m-d H:i:s',$row["t_post"]);
     echo "<td>".$row['Pname']."</td><td>".$row['type']."</td><td>".$row['color']."</td><td>".$row['location']."</td><td>".$row['t_forregister']."</td><td>".$newdate."</td><td>".$row['status']."</td>";

echo "</tr>";
}
echo "</table>";


?>