<?php
$Lname=$_POST["Lname"];
$type=$_POST["type"];
$color=$_POST["color"];
$location=$_POST["location"];
$t_forcatch=$_POST["t_forcatch"];
$time=time();
//$status=$_GET["status"];


for($i=0;$i<1;$i++){
if(isset($_FILES["picture"]["name"][$i])){
$picture[$i]=$_FILES["picture"]["name"][$i];
$path[$i]=pathinfo($picture[$i]);

$NewName[$i]="../report/".$Name.".".$path[$i]["extension"];
copy($_FILES["picture"]["tmp_name"][$i], $NewName[$i]);
}
}

$con=mysqli_connect('localhost','root','kazma1999','report');
$SQL="INSERT INTO lost(Lname, type, color, picture,location, t_forcatch, t_forpost) 
VALUES ('$Lname','$type','$color','$NewName[0]','$location','$t_forcatch','$time')";




if ($result=mysqli_query($con,$SQL)){
	echo "新增成功";
	header("Refresh:3;url=manageindex.php");
 }else{echo "新增失敗";
}

?>