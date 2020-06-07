<?php

$No=$_GET["No"];
include("conn.php");

//$con=mysqli_connect('localhost','root','junjun1126','product');

//$SQL= "SELECT * FROM product WHERE No='$No'";
$result=mysqli_query($con,$SQL);

while( $row = mysqli_fetch_assoc($result) ){
// $Pname=$_row["Pname"];
// $type=$_row["type"];
// $color=$_row["color"];
// //$picture=$_row["picture"];
// $location=$_row["location"];
$status=$_row["status"];

}




echo "<h1>Update Your Date</h1>";
echo "Product No:".$No."<br/>";
echo "<form action='updatecheck.php' method='post' enctype='multipart/form-data'>";
echo "<input type='text' name='status' value='".$status."'></br>";
echo "<input type='submit'><br/>";
echo "</form>";



?>