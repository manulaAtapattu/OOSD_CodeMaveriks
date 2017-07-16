<html><head>
  <title>Electronic and Computer Repair</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="logIn_page_files/modernizr-1.js"></script>
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
 <?php include ('Messageboardclass.php'); 
		//include ('User.php');
		session_start();
		$_SESSION["newuser"]-> __readUnreadm();
		/* $_SESSION["newuser"]-> __readUnreadm();
		$Database=new Database;
		$Database->connect();
		$id=$_SESSION["id"];
		$userid=$_SESSION["userid"];
		$sqli=null;

		if($id=="CE"){
			
		$sqli="UPDATE ce SET  Unreadm='0' WHERE UserID='$userid'";
		$Database->executeQuery($sqli);
		}
		if($id=='OE')
		{
		$sqli="UPDATE oe SET  Unreadm='0' WHERE UserID='$userid'";
		$Database->executeQuery($sqli);
		} */
		
		
 ?>
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
   <div class="container-fluid">
			<div class="row-fluid">
				<h1>Message Board</h1>
				<table class="table table-bordered table-striped">
					<caption>Messages</caption>
					<thead>
						<tr>
							<th>
								Time
								
							</th>
							<th>
								Username
							</th>
                            <th>
								Message
								
							</th>
							<th>
								Project
							</th>
							
						</tr>
					</thead>
					
					<tbody>
					
					
					<?php
							
							//$conn=mysqli_connect("localhost","root","","MessageBoard");
							//$sql="SELECT DateTime,Username,Message,Project FROM messages";
							//$result=$conn->query($sql);
							
							//$Database=new Database;
							$msgboard=Messageboardclass::__getmessageboard();
							//$msgboard->__construct($Database);
							//$_SESSION['db']=$Database;
							$_SESSION['msbd']=$msgboard;
							$result=$msgboard-> __getcontentDB();
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
									?>
									<tr> <td>
									<?php echo $row["DateTime"];?> 
									</td> <td>
									<?php echo $row["Username"];?> 
									</td> <td>
									<?php echo $row["Message"];?> 
									</td> <td>
									<?php echo $row["Project"];?> 
									
							<?php	}
							} else {
								//echo "0 results";
								?><td colspan="3">No messages</td><?php
							//$conn->close();
							}
							?>
							 
								
						
						<tr>
							
						</tr>
						
					</tbody>
					
				</table>
			</div>
			<div class="row-fluid">
				<form action="sendMessage.php" id="new-user" method="post">
					<input type="text" name="message" placeholder="Message" />
                    <input type="text" name="project" placeholder="Project(Optional)" />
                    <input type="submit" class="btn btn-primary"   value="Send"/>
                    <!--<a input type="submit" href="sendMessage.php" id="send" class="btn btn-primary">SEND</a>-->
				</form>		
			</div>
		</div>
    </div><div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top"></a>
    </div>
    <footer>
      <p><img src="images/twitter.png" alt="twitter">&nbsp;<img src="images/facebook.png" alt="facebook">&nbsp;<img src="images/rss.png" alt="rss"></p>
      
      <p>Copyright © CodeMaveriks | <a href="#">Heart Internet Domain Names</a> | <a href="#">design from css3templates.co.uk</a></p>
    </footer>

<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>

</body></html>