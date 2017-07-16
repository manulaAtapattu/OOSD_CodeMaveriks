<?php

/* $conn=mysqli_connect("localhost","root","");
    //echo "connected successfully<br>";
mysqli_select_db($conn,"MessageBoard");
    //echo"DB connected successfully<br>";
$message=$_POST['message'];
$project=$_POST['project'];
$date = new DateTime();
$timezone = date_default_timezone_get();
date_default_timezone_set('Asia/Colombo');
$time1 = date('m/d/Y h:i:s a', time());
$username='1A';



$sql="INSERT INTO messages(DateTime,Username,Message,Project) VALUES ('$time1','$username','$message','$project')";
if ($conn->query($sql)==TRUE){
		//echo"recorded successfully<br>";}
        header("Location:MessageBoard%20-%20Copy.php");
		}
	else{
		echo"Error:".$sql."<br>".$conn->error;
		}
mysqli_close($conn); */
//include ('Database.php');
include ('Messageboardclass.php');
session_start();
//$Database=$_SESSION['db'];
$msgboard=$_SESSION['msbd'];
$message=$_POST['message'];
$project=$_POST['project'];
$user=$_SESSION['newuser'];



$msgboard->_sendmessage($user,$message,$project);
header("Location:Messageboard.php");
	
	


?>