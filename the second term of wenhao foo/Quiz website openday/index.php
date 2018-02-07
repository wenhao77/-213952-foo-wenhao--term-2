<?php // I ONLY IMPLEMENTED MATHIJS HIS CODE AND GAVE FEEDBACK, WENHAO ?>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</style>
<title> AO Quiz!</title>
</head>

<body>

<div id="center_wrapper">
<a class="centerlink" href="http://insert jelle's website here.com"> <div id="quiz"></div> </a>
</div>

<div id="center_wrapper">
<a class="centerlink" href="http://insert jelle's website here.com"> <div id="top_bar"></div> </a>
</div>

  <?php session_start(); $_SESSION['anonymous'] = false; ?>
<div id="question_area">
  <h2>als je wilt dan mag je je naam invullen</h2> <!-- design team, make this look good -->
  <form id="form" action="anonymous.php" method="POST">
    <input type="text" name="first_name" placeholder="voornaam">
    <input type="text" name="last_name" placeholder="achternaam">
    <button type="submit" name="submit">ga naar de quiz</button>
  </form>
  <a href="anonymous.php"><button type="button" name="button">overslaan</button></a>
</div>

</body>
</HTML>
