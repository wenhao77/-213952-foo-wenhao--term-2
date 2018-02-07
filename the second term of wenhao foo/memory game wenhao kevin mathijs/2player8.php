<?php
require 'javascript8c.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <style>
  div#player1{
  font-size: 40px;
  overflow: hidden;
  position: absolute;
  }

  div#player2{
  font-size: 40px;
  overflow: hidden;
  }

  </style>

</head>
<body>
  <script> turn();</script> <div id="player1"style="float:left"> player 1 </div>
  <script> turn();</script><div id="player2"style="float:right"> player 2 </div>
  <br><br>
  <div id="score1"> <?php echo $score1?> </div><br>
  <div id="score2" style="float:right"> <?php echo $score2?> </div>
  <center><div id="counter"><?php echo "$player_turn"; ?></div></center>
  <div id="board"></div>
  <script> newboard();</script>
</body>
</html>
