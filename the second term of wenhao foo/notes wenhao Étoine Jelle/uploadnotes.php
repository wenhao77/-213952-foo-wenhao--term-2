<?php
 if (isset($_GET['submit'])) {

 require 'ndb.php';
 require 'notes.database.php';
  $link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);

 $date = time();
 $text = mysqli_real_escape_string($link, $_GET['text']);
 $title = mysqli_real_escape_string($link, $_GET['title']);

   if ((empty($date)) || (empty($text)) || (empty($title))){
     header("location: ../notes.php?upload=invalid");
     exit();
   }else {
     $sql = "INSERT INTO notes(`text`, `date`, title) VALUES('$text', '$date', '$title');";
     $result = mysqli_query($link, $sql);
     header("location: ../notes.php?upload=success");
     exit();
   }
 } else {
   header("location: ../notes.php?upload=skip");
   exit();
 }
 ?>
