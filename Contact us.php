<?php
session_start();
$date = date('Y-m-d');
if(!isset($_SESSION['username']))
{
 $_SESSION['guest']=1;
}
if (!isset($_SESSION['username']) && !isset($_SESSION['guest'])) 
{
 $_SESSION['msg'] = "You must log in first";
 header('location: login.php');
}
if (isset($_GET['logout'])==1) 
{
 session_destroy();
 unset($_SESSION['username']);
 header("location: login.php");
}  
if (isset($_GET['logout'])==2) 
{
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

include("master/header.php"); 
?>

<div class="chat-middle-container">
  <div class="container">
    <div class="my_div">
      <h3><b>Contact us</b></h3>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">In this page you can ask us questions using Chat bot</h5>
      </div>
      <img style=" display: block;" src="assets/images/cmt.jpg" alt="Card image">
    </div>
  </div>
</div>
<div>
  <div id="chat-button"><i class="fa fa-3x fa-comments" aria-hidden="true"></i></div>
</div>
<div id="chat-box">
  <div id="chat-head">Chat-Bot<i id="cancel" class="fa fa-times"></i></div>
  <div id="converse"></div>
  <div id="controls">
    <textarea id="textbox" name="textbox" class="controls-elements" placeholder="Say something..."></textarea>
    <button id="send" class="controls-elements"><i id="send-icon" class="fa fa-paper-plane"></i></button>
  </div>
</div>
<a href="#" class="float">
  <i class="fa fa-plus my-float"></i>
</a>


<?php include("master/footer.php"); ?>
