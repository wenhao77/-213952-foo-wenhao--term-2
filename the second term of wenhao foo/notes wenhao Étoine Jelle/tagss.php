<?php
 if (isset($_GET['submit'])) {

 require 'ndb.php';
 require 'notes.database.php';
  $link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);

 $tags = mysqli_real_escape_string($link, $_GET['tags']);

   if (empty($tags)){
     header("location: ../tags.php?upload=invalid");
     exit();
   }else {
       $tagcheck= mysqli_query($link, $sql);
       $checkingtag= mysqli_num_rows($tagcheck);

       if ($checkingtag > 0) {
         header("location: ../tags.php?adding=duplicate");
         exit();
       } else{
     $sql = "INSERT INTO tags(tag) VALUES('$tags');";
     $result = mysqli_query($link, $sql);
     header("location: ../tags.php?upload=success");
     exit();
      }
    }
 }

 if (isset($_GET['delete'])) {
   require 'ndb.php';
   require 'notes.database.php';
    $link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);
  $dtag = mysqli_real_escape_string($link, $_GET['dtags']);
    if (empty($dtag)) {
      header("location: ../tags.php?upload=empty");
      exit();

    } else {
      $sql = "DELETE FROM `tags` WHERE `tag` = '$dtag'";
      $result = mysqli_query($link, $sql);
      header("location: ../tags.php?upload=deleted");
      exit();
    }
}
 ?>
