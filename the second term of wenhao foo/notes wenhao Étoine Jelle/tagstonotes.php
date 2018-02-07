<?php
require 'ndb.php';
require 'notes.database.php';
 $link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);

$title = mysqli_real_escape_string($link, $_GET['title']);
$tags = mysqli_real_escape_string($link, $_GET['tags']);

  if ((empty($title)) || (empty($tags))){
    header("location: ../notes.php?upload=invalid");
    exit();
  }else {
    $sql = "INSERT INTO pivots('id_notes','id_tag') VALUES($title, $tags);";
    $result = mysqli_query($link, $sql);
    exit();


 ?>
