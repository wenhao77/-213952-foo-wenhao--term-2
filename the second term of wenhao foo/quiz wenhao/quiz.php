<?php
if (isset($_GET['start'])) {
require 'qdb.php';
require 'quiz.database.php';
$link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);
  $id = $_GET['id'];
  $question =  $_GET['question'];
  $id_no =  $_GET['id_no'];
  $id_yes =  $_GET['id_yes'];
  $id_dontknow =  $_GET['id_dontknow'];


  $sql = "SELECT * FROM 'quiz' WHERE ('id'='$id') AND ('question'='$question'))";
  $result = mysqli_query($link, $sql);
  while
  } ($data = mysqli_fetch_assoc($result)) {
    $id = $data["id"];
    $question = $data["question"];
    $id_yes = $data["id_yes"];
    $id_no = $data["id_no"];
    $id_dontknow = $data["id_dontknow"];

    echo "id: ";
    print_r($id);
    echo "</br> question: ";
    print_r($question);
    echo "</br> id_yes: ";
    print_r($id_yes);
    exit;
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    button
  </body>
</html>
