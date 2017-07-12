<?php
//Create connection
$conn=new mysqli('localhost','root','');

//Check connection
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}
//echo "DB connected successfully<br>";

//get the proposalId using post or Get---------------------------

//this will select the database DB_systemUsers
mysqli_select_db($conn,"DB_systemUsers");
//echo "\n DB_systemUsers is selected Successfully.<br>";
session_start();
//$proposal_id = $_SESSION['proposal_id'];
$complaint_id =1;
//create select query
$sqli = "SELECT * FROM tbl_complaint WHERE complaint_id='$complaint_id'";
$retval = mysqli_query( $conn,$sqli );


if ($retval){
	if(mysqli_num_rows($retval) == 1){
		$row = mysqli_fetch_array($retval, MYSQL_ASSOC);
	}else{
		echo "Database error <br>";
		echo "<br>"; 
	}	

}else{
	echo"Error" . $sqli . "<br>" . $conn->error;
}
//session_start();
//$_SESSION['proposal_id']=$row['proposal_id'];
mysqli_close($conn);

?>
<html class=><head>
  <title>Electronic and Computer Repair</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <script type="text/javascript" src="js/modernizr-1.5js"></script>
</head>

<body>
  
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html" style="width:10px">Road Development Authority<span class="logo_colour">#link</span></a></h1>
          <h2>#POST#NAME</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="MessageBoard.html">Message Board</a></li>
			<li><a href="contact info.html">Contact Info</a></li>
            <li><a href="#">Other Projects</a>
            <ul>
                <li><a href="#">Ongoing Projects</a>
				  <ul>
                    <li><a href="#">Project1</a></li>
                    <li><a href="#">Project3</a></li>
                    <li><a href="#">Project4</a></li>
                    
                  </ul>
				 </li>
                <li><a href="#">Finished Projects</a>
                  <ul>
                    <li><a href="#">ProjectZ1</a></li>
                    <li><a href="#">ProjectZ2</a></li>
                    <li><a href="#">ProjectZ3</a></li>
                    
                  </ul>
                </li>
                <li><a href="#">Upcoming Projects</a>
                  <ul>
                    <li><a href="#">ProjectC</a></li>
                    <li><a href="#">ProjectD</a></li>
                    <li><a href="#">ProjectE</a></li>
                
              </ul>
            </li>
			</ul>
            </li><li><a href="enter_info.php">Log out</a></li>
          
        </ul></div>
      </nav>
    </header>
    
    <div id="site_content">
        <h2>Complaint details</h2>
    <table class="table-fill">
		<thead>
		
		</thead>
		<tbody class="table-hover">
		<tr>
        <td class="text-left"><h3>Complaint Priority</h3></td>
		<td class="text-left"><?php echo $row['priority']?></td>
		</tr>
		<tr>
		<td class="text-left">Complaint Description</td>
		<td class="text-left"><?php echo $row['description']?></td>
		</tr>
		<tr>
		<td class="text-left">Location</td>
		<td class="text-left"><?php echo $row['location']?></td>
		</tr>
		<tr>
		<td class="text-left">Other details</td>
		<td class="text-left"><?php echo $row['details']?></td>
		</tr>
		<tr>
		<td class="text-left">Problems Caused</td>
		<td class="text-left"><?php echo $row['problemsCaused']?></td>
		</tr>
		<tr>
		<td class="text-left">Procedure of Completion</td>
		<td class="text-left"><?php echo $row['procedureOfCompletion']?></td>
		</tr>
        <tr>
		<td class="text-left">Estimated Project Duration</td>
		<td class="text-left"><?php echo $row['duration']?></td>
		</tr>
        <tr>
		<td class="text-left">Estimated Project Cost</td>
		<td class="text-left"><?php echo $row['cost']?></td>
		</tr>
        <tr>
		<td class="text-left">Employee Requirements</td>
		<td class="text-left"><?php echo $row['empRequirement']?></td>
		</tr>
            
		</tbody>
	</table>
	<input type='button' onclick='editText()' value='Edit'/>
    </div><div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top"></a>
    </div>
    <footer>
      <p><img src="images/twitter.png" alt="twitter">&nbsp;<img src="images/facebook.png" alt="facebook">&nbsp;<img src="images/rss.png" alt="rss"></p>
      
      <p>Copyright © CodeMaveriks| <a href="#">RDA</a></p>
    </footer>
  </div><!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery_003.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery_002.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>


</body></html>