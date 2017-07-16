<?php
	//include ('Database.php');
	include ('User.php');
	$newuser=null;
	session_start();

	$userid=$_POST['userid'];
	$_SESSION["userid"]=$userid;
	echo $userid.'____userid___';
    $password=$_POST['password'];
	$id=$_SESSION['id'];
	
	if($userid=="insert_userid" or $password=="insert_only_alphanumerics_here"){
		header("location:enter_info.php");
		exit();		
	}
	if($userid=="insert_userid" or $password=="insert_only_alphanumerics_here"){
		header("location:enter_info.php");
		exit();		
	}
	if(empty($userid) and empty($password)){
		$_SESSION["val_1"]="insert_username";
		$_SESSION["val_2"]="insert_password";
		header("location:enter_info.php");
		exit();		
	}
	if(empty($userid)){
		$_SESSION["val_1"]="insert_username";
		//echo $_SESSION["val_2"];
		header("location:enter_info.php");
		exit();		
	}
	if(empty($password)){
		//echo 'empty';
		$_SESSION["val_2"]="insert_password";
		//echo $_SESSION["val_2"];
		header("location:enter_info.php");
		exit();		
	}
	if(!ctype_alnum($userid)){
		//echo 'username alnum';
		$_SESSION["val_1"]="insert_only_alphanumerics_here";
		header("location:enter_info.php");
		exit();		
	}
	if(!ctype_alnum ($password)){
		//echo 'password alnum';
		$_SESSION["val_2"]="insert_only_alphanumerics_here";
		header("location:enter_info.php");
		exit();		
	}
	

	
    $conn=mysqli_connect("localhost","root","");
    $sqltable1=null;
	echo "connected successfully<br>";
    mysqli_select_db($conn,"messageboard");
	
	if ($id=="CE")
	{
	$sqltable1=mysqli_query($conn,"SELECT * FROM ce" ) or die('error1');
	}
	if ($id=="OE")
	{
	$sqltable1=mysqli_query($conn,"SELECT * FROM oe" ) or die('error1');
	}
	

    $output=FALSE;

	while($newArray=mysqli_fetch_array($sqltable1)){
	if($userid==$newArray["UserID"] and $password==$newArray["PSWord"]){
		$newuser=new User($newArray["UserID"],$newArray["PSWord"],$newArray["Unreadm"],$id);
		$_SESSION["newuser"]=$newuser;
		$output=TRUE;
	}
}
    if ($output==FALSE){
        echo "Userid not found. Try again.";
    }else{
 
        
        if ($id=="CE"){
            header("Location:indexCE.php");
        }elseif($id=="ME"){
            header("Location:indexME.html");
        }elseif($id=="OE"){
            header("Location:indexOE.html");
        }elseif($id=="ITS"){
            header("Location:indexITS.html");
        }elseif($id=="MC"){
            header("Location:indexMC.html");
        }
       
    }
    
?>