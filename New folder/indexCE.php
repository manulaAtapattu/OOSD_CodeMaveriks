<?php
include ('User.php');
session_start();
$newuser=$_SESSION["newuser"];
$unread=$newuser->__getUnreadm();

?>
<html>
<head>
  <title>Electronic and Computer Repair</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html" style="width:10px">Road Development Authority</a></h1>
          <h2>#POST#NAME</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="Messageboard.php">Message Board</a></li>
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
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Current Projects</h3>
          <ul>
            <li><a href="#">Project2</a></li>
            <li><a href="#">Project6</a></li>
            
            
          </ul>
        </div>
        <div class="sidebar">
          <h3>Finished Projects</h3>
          <ul>
            <li><a href="#">ProjectX</a></li>
            <li><a href="#">ProjectY</a></li>
            
            
          </ul>
        </div>
        <div class="sidebar">
          <h3>Upcoming projects</h3>
          <ul>
            <li><a href="#">ProjectA</a></li>
            <li><a href="#">ProjectB</a></li>
            
            
          </ul>
        </div>
      </div>
      <div class="content">
        <h1>Electronic and Computer Repair</h1>
        <div class="sidebar">
			<h2><a href="#">CREATE PROJECT</a>
			</h2>
        </div>
        <div class="sidebar">
			<h2><a href="#">READ COMPLAINTS</a>
			
			</h2>
          </div>
        <div class="sidebar">
			<h2><a href="#">REGISTER USER</a>
			</h2>
        </div>
        <div class="sidebar">
			<h6><a href="Messageboard.php"><?php echo 'unread messages '.$unread;?></a>
			</h2>
        </div>
        </div>
    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top"></a>
    </div>
    <footer>
      <p><img src="images/twitter.png" alt="twitter">&nbsp;<img src="images/facebook.png" alt="facebook">&nbsp;<img src="images/rss.png" alt="rss"></p>#
      <p><a href="index.html">Home</a> | <a href="examples.html">Message Board</a> | <a href="page.html">Other Projects</a> | <a href="another_page.html">Contact info</a> | <a href="contact.php">Log out</a></p>
      <p>Copyright © CodeMaveriks| <a href="#">RDA</a> | <a href="#">Electronic and Computer Repair System</a></p>
    </footer>
  </div>
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