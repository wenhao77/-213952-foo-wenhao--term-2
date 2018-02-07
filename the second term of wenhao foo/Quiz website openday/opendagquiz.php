<?php // I ONLY IMPLEMENTED MATHIJS HIS CODE AND GAVE FEEDBACK, WENHAO ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</style>
</head>

<body>

  <div id="center_wrapper">
  <a class="centerlink" href="http://insert jelle's website here.com"> <div id="quiz"></div> </a>
  </div>

  <div id="center_wrapper">
  <a class="centerlink" href="http://insert jelle's website here.com"> <div id="top_bar"></div> </a>
  </div>

<?php
  require_once "CSV.class.php"; /* The functions file for flatfile storage. */
  session_start();
  $question_amount = 16; // change this to acording to the amount of questions

  $firstnamereminder = $_SESSION['first_name'];
  $_SESSION['first_name'] = $firstnamereminder;
  $lastnamereminder = $_SESSION['last_name'];
  $_SESSION['last_name'] = $lastnamereminder;

  // echo $_SESSION['first_name'];
  // echo $_SESSION['last_name'];

  if (isset($_GET['q'])) {
    $question_id = $_GET['q'];
    $next_question = $question_id + 1;
    $csv = new CSV("vragenlijst.csv");
    $question = $csv->get_cell($question_id, 1); /* Gets the question from the flatfile */
    if (isset($_POST['score'])) {
      $score = $_POST['score'];
      $_SESSION['score'] = $_SESSION['score'] + $score;
    }
?>
  <!-- BEGIN DESIGN -->
  <div id="question_area">
  <center <?=($question_id == 0) ? 'style="display: none"' : ''?> id="quizContent">
      <h1>Vraag <?=$question_id?>: <?=$question?></h1> <!-- Shows the question you are on -->
      <h1>(<?=$question_id?>/<?=$question_amount?>) (Punten: <?=$_SESSION['score']?>)</h1> <!-- Shows the amount of points you earned, hidden for the public -->
      <form class="" action="opendagquiz.php?q=<?=$next_question?>" method="post">
        <br>
        <input type="radio" name="score" value="0" id="button1"><label for="button1"><b>Button 1</b></label>
        <input type="radio" name="score" value="1" id="button2"><label for="button2">Button 2</label>
        <input type="radio" name="score" value="2" id="button3"><label for="button3">Button 3</label>
        <input type="radio" name="score" value="3" id="button4"><label for="button4">Button 4</label>
        <input type="radio" name="score" value="4" id="button5" required><label for="button5">Button 5</label><br><br>
        <input type="submit" value="Volgende vraag!">
      </form>
    </div>
  </center>
  <!-- END DESIGN -->
  <!--<a href="main.php"> <button type="button" name="button">main</button> </a> --> <!--FOR DEBUGGING-->
<h1></h1>
<?php
}
  if ($_GET['q'] == 1){
    $_SESSION['score'] = 0;
  }
  if ($question_id > $question_amount) {
    header("location: main.php");
  }
 ?>
</body>
</html>
