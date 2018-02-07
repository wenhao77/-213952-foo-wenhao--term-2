<?php
require 'javascript32c.php';
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
  </style>

</head>
<body>
  <script> turn();</script> <div id="player1"style="float:left"> player 1 </div>
  <br><br>
  <div id="score1"> <?php echo $score1?> </div><br>
  <div id="board"></div>
  <script> newboard();</script>
</body>
</html>
