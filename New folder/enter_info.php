<html><head>
  <title>Electronic and Computer Repair</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/modernizr-1.5js"></script>
</head>

<body>
  
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <h1><a href="#" style="width:10px">Road Development Authority<span class="logo_colour">#link</span></a></h1>
          <h2>#POST#NAME</h2>
        </div>
      </div>
      
    </header>
    
    <div id="site_content">
      
      <div class="content">
        <h1>Insert UserId and Password</h1>
<?php
	//$val1="val1";
	//$val2="val2";
	
	
	session_start();
	$val1=$_SESSION["val_1"];
	$val2=$_SESSION["val_2"];
    $id=$_GET['id'];
	$_SESSION["id"]=$id;
	//echo $id;
	
?>
          
<form action="checkID&P.php" method="post">
    <input type="hidden" name="id" value=$id>
    UserId &nbsp; &nbsp; &nbsp;: &nbsp;
    <input type="text" name="userid" value=<?php echo  $_SESSION["val_1"];?>><br><br>
    Password : &nbsp;
    <input type="varchar" name="password" value=<?php echo  $_SESSION["val_2"];?>><br><br>
    <input type="submit" />
</form>  
</div>
</div><div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top"></a>
    </div>
    <footer>
      <p><img src="images/twitter.png" alt="twitter">&nbsp;<img src="images/facebook.png" alt="facebook">&nbsp;<img src="images/rss.png" alt="rss"></p>
      
      <p>Copyright © CSS3_bokeh | <a href="#">RDA</a> | <a href="#">Electronic and Computer Repair Center</a></p>
    </footer>
  </div><!-- javascript at the bottom for fast page loading -->
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