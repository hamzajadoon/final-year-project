<?php include('php/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Cricket Crazzee | Login</title>
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
	<div class="colorlibcopy-agile">
		<h1>Login Here</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
       <form method="post" action="login.php">
         <?php include('errors.php'); ?>
         <input class="text" type="text" name="username"  placeholder="Username" required="">
         <input class="text" type="password" name="password" placeholder="Password" required="">
         <div class="wthree-text"><div class="clear"></div></div>
         <input type="submit" name="login_user" value="Login">
       </form>
       <p>Not yet a member? <a href="register.php">Sign up</a></p>
       <br><br>
       <a href="index.php" style="color: white; padding-right: 15px;" >BACK TO HOME</a>
       <a href="index.php" style="color: white; " >LOGIN AS GUEST</a>
     </div>
   </div>
   <!-- copyright -->
   <div class="colorlibcopy-agile">
     <p>© 2019 Hamza Jadoon. All rights reserved | Design by Hamza Jadoon</p>
   </div>
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
   <!-- //copyright -->
 </div>
 <!-- //main -->
</body>
</html>
