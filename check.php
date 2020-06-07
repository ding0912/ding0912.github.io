<?php

$mail=$_POST["mail"];
$password=$_POST["password"];


//echo $mail."<br/>";
//echo $password."<br/>";


$link = mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 資料庫使用者名稱 
            'kazma1999',  // 資料庫密碼
            'report');  // 預設使用的資料庫名稱


// if ( !mysqli_select_db($link, 'user') )
//    die("無法開啟 user 資料庫!<br/>");
// else
//    echo "資料庫: user 開啟成功!<br/>";
$SQL = "SELECT * FROM manager WHERE mail='$mail' AND password='$password'";
if($result=mysqli_query($link,$SQL)){
 if(mysqli_fetch_assoc($result)){ 
 echo "登入成功";
 

 header('Location:manageindex.php');
}
else{
 echo"登入失敗!";
 }
}


$SQL = "SELECT * FROM user WHERE mail='$mail' AND password='$password'";

if($result=mysqli_query($link,$SQL)){
 if(mysqli_fetch_assoc($result)){
  setcookie('mail',$_POST['mail'],time()+60*60*24*365);
 echo "登入成功";
 header('Location:index.php?mail='.$mail);
}
else{
 echo"登入失敗!";
 }
}

?>