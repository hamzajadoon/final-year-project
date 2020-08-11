<?php
include('php/server.php');

include('php/quiz.php');

include("master/header.php");
?>

<body onload="myFunction()">
  <input type="hidden" id="endcheck" name="endcheck" value="<?php echo $status; ?>">
  <div class="quiz-middle-container">
    <div class="container">
      <div class="my_div">
        <h3><b>Let’s see how much have you learned so far about cricket! Here we will test your knowledge, simply start the quiz there will be 12 different questions with a 3 minutes timer Good Luck!</b></h3>
      </div>
      <?php
      if(!isset($_POST['submit']) && $count==0 && isset($_SESSION['user_id']) || !isset($_POST['submit']) && $count==0 && !isset($_SESSION['user_id']) )
      {
        ?>
        <div class="row">
          <div class="col-sm-12">
            <form  action="" method="post" class="quiz_form">
              <div id="clock"></div>
              <?php
              $i=1;
              foreach ($fetch_quiz as $value)
              {
                ?>
                <div id="question" class="question">
                  <input type="hidden" name="quest" value="<?php echo $i; ?>">
                  <h4><?php echo $i.": ".$value[1] ?></h4>

                  <input type="radio" name="question<?php echo $value[0] ?>" value="<?php echo $value[3] ?>">
                  <?php echo $value[3] ?>
                  <br>
                  <input type="radio" name="question<?php echo $value[0] ?>" value="<?php echo $value[4] ?>">
                  <?php echo $value[4] ?>
                  <br>
                  <input type="radio" name="question<?php echo $value[0] ?>" value="<?php echo $value[5] ?>">
                  <?php echo $value[5] ?>
                  <br>
                  <input type="radio" name="question<?php echo $value[0] ?>" value="<?php echo $value[6] ?>">
                  <?php echo $value[6] ?>
                </div>
                <?php
                $i++;
              }
              ?>
              <input type="submit" name="submit" style="display: none" value="submit">
              <button type="button" onclick="checkempty()"  class="btn btn-success">Next</button>
            </form>
          </div>
        </div>
        <?php
      }
      else
      {
        ?>
        <div class="jumbotron">
          <h3 style="text-align: center">Your Score is : <?php echo $score;  ?> out of 12.</h3>
          <?php
          if($score >= 7)
          {
            echo '<h1 class="display-3 text-center">Well done you did amazing</h1>';
            echo '<hr class="my-4">';
            echo '<a href="Quiz.php" class="button"> Play Again</a>';
          }
          elseif($score < 7 AND $score > 0)
          {
            echo '<h1 class="display-3 text-center">Very good, try to achieve higher next time</h1>';
            echo '<hr class="my-4">';
            echo '<a href="Quiz.php" class="button"> Play Again</a>';
          }
          elseif($score == 0)
          {
            echo '<h1 class="display-3 text-center"> Try Again </h1>';
            echo '<hr class="my-4">';
            echo '<a href="Quiz.php" class="button"> Play Again</a>';
          }
          else
          {
            echo "error";
          }
        }
        ?>
      </div>
    </div>
  </div>
</body>
<script>
  function myFunction()
  {
    alert("Welcome TO CricketCrazze Press OK to start the quiz");
  }

  function countdown(element, minutes, seconds) {
    // set time for the particular countdown
    var time = minutes*60 + seconds;
    var interval = setInterval(function() {
      var el = document.getElementById(element);
        // if the time is 0 then end the counter
        if (time <= 0) {
          var text = "Time Up";
          el.innerHTML = text;
          alert("Time Up");
          $("input[name='submit']").trigger("click");
          clearInterval(interval);
          return;
        }
        var minutes = Math.floor( time / 60 );
        if (minutes < 10) minutes = "0" + minutes;
        var seconds = time % 60;
        if (seconds < 10) seconds = "0" + seconds;
        var text = minutes + ':' + seconds;
        el.innerHTML = text;
        time--;
      }, 1000);
  }
  if ($("input[name='endcheck']").val() == "start")
  {
    countdown('clock', 3, 0);
  }
</script>

<?php include("master/footer.php"); ?>
