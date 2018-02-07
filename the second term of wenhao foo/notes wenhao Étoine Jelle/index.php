<?php
require_once 'ndb.php';
require_once 'notes.database.php';
 $link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);
 // THIS IS THE CONNECT TO DATABASE FILE //
  $title = '';
  $text = '';
  $value = '';
  $id = null;
  $date = null;
  // still need to work on tags //

  $editmode = isset($_GET["action"]) && $_GET["action"] == 'edit';
  $id = $_GET["id"];
  if ($editmode) {
    $table = "notes";
    $sql = "SELECT * FROM $table WHERE (`id` = '$id')";
    $result = mysqli_query($link, $sql);

    while ($data = mysqli_fetch_assoc($result)) {
      $id = $data["id"];
      $text = $data["text"];
      $title = $data["title"];
    }
  }
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" text="IE=chrome">
</head>

<body>
  <form method="post" action="notes.php">
    <input type="text" value="<?=$title?>" name="title" placeholder="title"><br>
    <input type="hidden" value="<?=$id?>" name="id"><br>
    <textarea name="text" rows="8" cols="80" placeholder="text input area"><?= $text ?></textarea>
    <select name="tag" size="6">
      <option disabled>TAGS</option>
      <option value="school">school</option>
      <option value="portal">portal</option>
      <option value="home">home</option>
      <option value="tox">tox</option>
      <option value="ao17">ao17</option>
    </select> </br>
    <input type="date" name="date" value="<?= $date ?>"><br>
    <button type="submit">Submit</button>
  </form>
  <a href="search.php">Go to searching</a>
</body>
</html>
