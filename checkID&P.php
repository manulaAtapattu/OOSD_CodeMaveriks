<?php
    echo "damn";
    $conn=mysqli_connect("localhost","root","manula1234");
    echo "connected successfully";
        mysqli_select_db($conn,"sample");
    echo"DB connected successfully";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $output=null;
    $output=mysqli_query($conn,"select username from sample2 where username='$username'");

    if ($output==null){
        echo "Username not found. Try again.";
    }else{
      $realPassword=mysqli_query($conn,"select password from sample2 where username='$username'");
       if ($password!=realPassword){
        echo "Password incorrect";
        }else  {
           echo"done";
           header("Location:Electronic and Computer Repair4.html");
       }  
    }
    
?>