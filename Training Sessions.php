<?php
session_start();
$date = date('Y-m-d');
if(!isset($_SESSION['username'])){
 $_SESSION['guest']=1;
}
if (!isset($_SESSION['username']) && !isset($_SESSION['guest'])) {
 $_SESSION['msg'] = "You must log in first";
 header('location: login.php');
}
if (isset($_GET['logout'])==1) {
 session_destroy();
 unset($_SESSION['username']);
 header("location: login.php");
}  if (isset($_GET['logout'])==2) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

include("master/header.php");
?>
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="carousel-background"><img src="assets/images/t1.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2></h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-background"><img src="assets/images/t2.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2></h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-background"><img src="assets/images/t3.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2></h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-background"><img src="assets/images/t4.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2></h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

<section id="about">
  <div class="container">
    <div class="my_div">
      <h3><b>Cricket Training</b></h3>
      <p style="font-size:20px;"><b>Are you ready to learn? here you will have a chance to learn about cricket and find some fascinating stuff about it, simply start by following the links below</b></p>
    </div>
    <div class="row about-cols" style="padding-top: 15px;">
      <div class="col-md-4 wow fadeInUp" >
        <div class="about-col">
          <div class="img">
            <img src="assets/images/f1.jpg" alt="" class="img-fluid">
          </div>
          <h2 class="title"><a href="bowling.php">Bowling Training</a></h2>
          <p>
          Bowling in cricket is an action taken when  a ball is being balled towards the wicket and standing batsman on the wickets defends it. There are different types of bowlers and each of them has their own variety and skills to bowl.  A bowler plays a vital part in a cricket match  because his or her aim is to get wickets and win the match.  If a bowler balls a wide ball the batting side gets 1 run, for a spinner baller he has a technique to swing the ball which gets LBW out which stands for Leg Before Wicket.
          <a href="bowling.php"><div class="icon"><i class="ion-ios-videocam"></i></div></a>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="about-col">
          <div class="img">
            <img src="assets/images/f2.png" alt="" class="img-fluid" style="width: 350px;">
          </div>
          <h2 class="title"><a href="batting.php">Batting Training</a></h2>
          <div class="icon"><a href="batting.php"><i class="ion-ios-videocam"></i></a></div>
          <p>
Batting training in cricket is based on a batsman playing against a bowler where both rivals aims are to better than each other, batting requires some skills and techniques which allows batsmen to see the fast bowl coming to them, batsman has a technique to time a ball and hit it for four which is when a ball goes to the boundary by touching a ground, batsman can also hit a 6 which is when a ball is been hit to the boundary without touching the ground.</p>
        </div>
      </div>
      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="about-col">
          <div class="img">
            <img src="assets/images/t3.jpg" alt="" class="img-fluid">
          </div>
          <h2 class="title"><a href="fielding.php">Fielding Training</a></h2>
          <div class="icon"><a href="fielding.php"><i class="ion-ios-videocam"></i></a></div>
          <p>
 Fielding training requires a lot of exercise and a stamina to chase a ball when its hit by a batsman. To be  a good fielder it requires so many skills from individuals as well as  requires them to be healthy. In the fielding session we will discuss more on this and we will teach you some training techniques which are needed to become a fielder.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("master/footer.php"); ?>
