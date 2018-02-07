<?php // I TRIED TO IMPLEMENT MATHIJS HIS CODE BUT IT I DIDNT KNOW HOW TO DO IT, WENHAO ?>
<?php
include_once ("database.php");
session_start();
$max_score = 16 /* Question_amount */ * 5; // the max score you can have in the quiz
$name = $_SESSION['first_name'];
// echo $name = $_SESSION['first_name'];;
$last_name = $_SESSION['last_name'];
// echo $last_name = $_SESSION['last_name'];;
$score = $_SESSION['score'] . "/" . $max_score;
// echo "Score: $score<br>\n";
// echo "Name: $name<br>\n";
// echo "Last name: $last_name<br>\n";
$sql = "INSERT INTO `quiz_opendag_database`(`name`, `last_name`, `score`) VALUES ('$name', '$last_name', '$score')";
mysqli_query($link, $sql);
// print_r($sql);
$score_pro = $score * 100 / $max_score;
// echo "Score_pro: $score_pro%<br>\n";

/* DESIGN */

// these sayings should be changed, but i have no idea how to politely tell someone to fuck off if they get a score of less then 10
if ($score_pro >= 90) {
  $score = "je zou goed op deze opleiding passen. ";
}
elseif ($score_pro >= 60) {
  $score = "je zou hier wel passen. ";
}
elseif ($score_pro >= 50) {
  $score = "het kan een leuke uitdaging worden. ";
}
elseif ($score_pro >= 30) {
  $score = "ik zou deze opleiding niet aanraden. ";
}
// iemand zet hier een aardige manier neer om tegen iemand te zeggen dat die op moet fucken dankje :) liefs wenhao
elseif ($score_pro >= 10) {
  $score = "ik denk dat je maar over een andere opleiding moet nadenken. ";
}
else{
  $score = "je had " . $score_pro . "% ik denk niet dat je hier goed zou passen, sorry. ";
}
echo "Message: $score";
?>
 <h1>Bedankt voor het meedoen<?= ($_SESSION['anonymous'] == true) ? ", " : " " . $name . ", ";?><?=$score ?></h1>
<a href="index.php"> <button type="button" name="button">Ga terug</button> </a>
<!-- END DESIGN -->
