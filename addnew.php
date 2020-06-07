<?php
session_start();
$Pname=$_POST["Pname"];
$type=$_POST["type"];
$color=$_POST["color"];
$location=$_POST["location"];
$t_forregister=$_POST["t_forregister"];
$time=time();
$poster = $_SESSION["mail"];
//$status=$_GET["status"];




$con=mysqli_connect('localhost','root','kazma1999','report');
$SQL="INSERT INTO post(poster, Pname, type, color, location, t_forregister, t_post) 
VALUES ('$poster','$Pname','$type','$color','$location','$t_forregister','$time')";




if ($result=mysqli_query($con,$SQL)){
	echo "新增成功";
	header("Refresh:3;url=index.php");
 }else{echo "新增失敗";
}

?>