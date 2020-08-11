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
 header("location: index.php");
}
if (isset($_GET['logout'])==2) {
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
          <div class="carousel-background"><img src="assets/images/5.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2></h2>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-background"><img src="assets/images/uk-2902050_1920.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2></h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-background"><img src="assets/images/3.jpg" alt=""></div>
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
    <h3><b>Welcome to the home of Cricket</b></h3>
    <p style="font-size:15px;"> <b>Cricket is a bat and a bowl game played between two teams where each time has 11 players on a side, cricket was invented in England in the 16th century but the first time  it was played  in the 18th century.  Cricket is second most famous sport in the world, cricket has nearly 2.5 billion fans around the globe. It is played on the grass but in countries like India and Pakistan it is played on rooftops, streets and small grounds. There are 6 balls in an over which can be bowled by one bowler. </b></p>
  </div>
  <div class="my_div_1">
    <h3><b>There are main three different types of cricket matches which can be played and those are: </b></h3>
  </div>
  <div class="row about-cols" style="padding-top: 15px;">
    <div class="col-md-4 wow fadeInUp">
      <div class="about-col text-center">
        <div class="img">
          <img src="assets/images/pak.png" alt="" class="img-fluid">
        </div>
        <h2 class="title"><a href="#">Twenty20 cricket</a></h2>
        <p class="col-md-12">
          T20 cricket is based on 20 overs which was the shortest game of cricket but recently T10 has been invented which is quicker than this cricket league. Coming back  to t20 cricket it was originally introduced by England and Wales cricket board called ECB in 2003. T20 world cup takes place every 2 years current t20 cricket champion is West indies cricket team.
        </p>
      </div>
    </div>
    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
      <div class="about-col">
        <div class="img">
          <img src="assets/images/do.jpeg" alt="" class="img-fluid">
        </div>
        <h2 class="title"><a href="#">Test Cricket</a></h2>
        <p class="col-md-12">


    Test cricket is the oldest cricket game which lasts for 5 days, two competitors play against each other for 5 days and then whoever wins on the fifth day wins an inning. An inning in cricket is one of the divisions of  a match where each time has its time to bat, did you know the official test match was played between England and Australia in 1877. The Ashes is one of the most favourite and thrilled test match series played between England  and Australia.
 </p>
      </div>
    </div>
    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
      <div class="about-col">
        <div class="img">
          <img src="assets/images/psk.jpg" alt="" class="img-fluid">
        </div>
        <h2 class="title"><a href="#">One Day International</a></h2>
        <p class="col-md-12">
One day international cricket is based on 50 overs, the first ODI was played on the January 1975 between Australia and England, cricket world cup is held every 4 years which is based on 50 overs. Currently England is ranked as number one in ODI matches and on the number 16th is Netherlands.</p>
      </div>
    </div>
  </div>
</div>
</section>

<h3 style="text-align: center; padding-top: 10px;"><b>Below you can see the live cricket updates </b></h3>
<div >
  <div class="container">
    <div class="row" id="cricketmatches" style="margin-bottom: 20px; height: 1000px; overflow-y: scroll;">
    </div>
  </div>
</div>

<?php include("master/footer.php"); ?>
