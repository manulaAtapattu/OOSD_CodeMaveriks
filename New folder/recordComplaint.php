<?php
    
    /* require 'classes/Database.php';
    
    $DB=new Database;
    $DB->connect(); */


        $priority=$_POST['priority'];
        $info=$_POST['reguarding'];
        $location=$_POST['complaintLocation'];
        $other=$_POST['other'];
        $problems=$_POST['problems'];
        $procedure=$_POST['procedure'];
        $time=$_POST['estimatedTime'];
        $cost=$_POST['estimatedCost'];
        $emp=$_POST['empReq'];
		
	if(empty($priority) )	
	{	
		echo "<script>
		alert('please input priority');
		window.location.href='createComplaint1.html';
		</script>";
		exit;
		//exit;

	}
	if(empty($info) )	
	{	
		echo "<script>
		alert('please input Reguarding');
		window.location.href='createComplaint1.html';
		</script>";
		exit;
		//exit;

	}	
	if(empty($location) )	
	{	
		echo "<script>
		alert('please input Location');
		window.location.href='createComplaint1.html';
		</script>";
		exit;
		//exit;

	}
	if(empty($procedure) )	
	{	
		echo "<script>
		alert('please input Procedure');
		window.location.href='createComplaint1.html';
		</script>";
		exit;
		//exit;

	}
	
	
	if(!ctype_digit($time) )	
	{	
		echo "<script>
		alert('please input a valid Estimated time');
		window.location.href='createComplaint1.html';
		</script>";
		exit;
		//exit;

	}
	if(!ctype_digit($cost) )	
	{	
		echo "<script>
		alert('please input a valid Estimated cost');
		window.location.href='createComplaint1.html';
		</script>";
		exit;
		//exit;

	}
	
	if(empty($emp) )	
	{	
		echo "<script>
		alert('please input Employ requirements');
		window.location.href='createComplaint1.html';
		</script>";
		exit;
		//exit;

	}
    //$values=[$priority,$info,$location,$other,$problems,$procedure,$time,$cost,$emp];
    //$rows="priority,description,location,details,problemsCaused,procedureOfCompletion,duration,cost,empRequirement";
    //$table="complaints";
    //$DB->insert($table,$values ,$rows);
	//INSERT

	//$sql="INSERT INTO complaints(priority,description,location,details,problemsCaused,procedureOfCompletion,duration,cost,empRequirement ) VALUES ('$priority','$info','$location','$other','$problems','$procedure','$time','$cost','$emp')";

	
    //$DB->disconnect();
