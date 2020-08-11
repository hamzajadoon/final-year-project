<?php include('php/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register Cricket Crazzee | Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  <!-- web font -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- //web font -->

  <!-- Custom Theme files -->
  <link href="assets/css/login.css" rel="stylesheet" type="text/css" media="all" />
  <!-- //Custom Theme files -->

</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Register to become a member of Stoke Newington cricket club</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
        <form method="post" action="register.php">
         <?php include('errors.php'); ?>
         <input class="text" type="text" name="username"  placeholder="Username" required="">
         <input class="text email" type="email" name="email"  placeholder="Email" required="">
         <input class="text" type="password" id="password_1" name="password_1" placeholder="Password" required="" onkeyup="checkPass(); return false;" >
         <input class="text w3lpass" type="password" id="password_2" name="password_2" placeholder="Confirm Password" required="" onkeyup="checkPass(); return false;" >
         <div id="error-nwl"></div>
         <div class="wthree-text"><div class="clear"> </div></div>
         <input type="submit" name="reg_user" value="Register">
       </form>
       <p>Have an Account? <a href="login.php"> Login Now!</a></p>
       <br>
       <br>
       <center>
        <a href="index.php" style="color: white;">BACK TO HOME </a>
      </center>
    </div>
  </div>
  <!-- copyright -->
  <div class="colorlibcopy-agile">
   <p>© 2019 Hamza Jadoon. All rights reserved | Design by Hamza Jadoon</p>
 </div>
 <!-- //copyright -->
 <ul class="colorlib-bubbles">
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
 </ul>
</div>
<!-- //main -->
<script src="assets/js/index.js"></script>
</body>
</html>
