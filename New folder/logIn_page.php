<?php
session_start();
$_SESSION["val_1"]= "";
$_SESSION["val_2"]= "";

 ?>


<html><head>
  <title>Electronic and Computer Repair</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/modernizr-1.js"></script>
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
      
    </header>
    
    <div id="site_content">
      
      <div class="content">
        <h1> Select User</h1>
        <div class="sidebar">
			<h3><a href="enter_info.php?id=CE">Cheif Engineer</a></h3>
        </div>
		<div class="sidebar">
			<h3><a href="enter_info.php?id=ME">Management Engineer</a></h3>
        </div>
		<div class="sidebar">
			<h3><a href="enter_info.php?id=OE">Operational Engineer</a></h3>
        </div>
		<div class="sidebar">
			<h3><a href="enter_info.php?id=ITS">IT specalist</a></h3>
        </div>
		<div class="sidebar">
			<h3><a href="enter_info.php?id=MC">Maintainance Crew</a></h3>
        </div>
      </div>
    </div><div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top"></a>
    </div>
    <footer>
      <p><img src="images/twitter.png" alt="twitter">&nbsp;<img src="images/facebook.png" alt="facebook">&nbsp;<img src="images/rss.png" alt="rss"></p>
      
      <p>Copyright © CodeMaveriks | <a href="#">Heart Internet Domain Names</a> | <a href="#">design from css3templates.co.uk</a></p>
    </footer>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>


</body></html>