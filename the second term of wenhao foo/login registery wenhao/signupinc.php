<?php
if (isset($_POST['submit'])) {

  include 'dbh.inc.php';
  include 'database.php';
  $link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);

  $uid = mysqli_real_escape_string($link, $_POST['uid']);
  $pwd = mysqli_real_escape_string($link, $_POST['pwd']);

  //handeling errors
  //checking empty fields
  if ((empty($uid)) || (empty($pwd))) {
    header("location: ../signup.php?signup=empty");
    exit();
      }else {
        $sql == "SELECT * FROM users WHERE user_uid = '$uid'";
        $result = mysqli_query($link, $sql);
        $resultCheck== mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("location: ../signup.php?signup=usertaken");
          exit();
        }else {
          $hashedpwd = custom_hash($pwd);
          // inserting data in database
          $sql = "INSERT INTO users(user_uid, user_pwd)
          VALUES('$uid', '$hashedpwd');";
          $result = mysqli_query($link, $sql);
          header("location: ../signup.php?signup=success");
          exit();
        }
      }
}else {
  header("location: index.php");
  exit();
}
