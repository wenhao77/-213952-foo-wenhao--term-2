<?php
if (isset($_POST['submit'])) {
  require 'dbh.inc.php';
  require 'database.php';
  $link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);

  $uid = mysqli_real_escape_string($link, $_POST["uname"]);
  $pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
  //handeling errors
  //checking if input is empty
  if ((empty($uid)) || (empty ($pwd))) {
    header("location: ../index.php?login=emtpy");
    exit;
  }else {
    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
    $result = mysqli_query($link, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      header("location: ../index.php?login=wrong");
      exit();
    }else{
      if ($row = mysqli_fetch_assoc($result)) {

        $databasePass = $row['user_pwd'];
        $re = '/^(\d{1,3})([a-f]{1})([\da-f]+)$/im';
      preg_match_all($re /*What to search*/, $databasePass /*Where to search*/, $matches /*Stores the result in an array 'matches'*/, PREG_SET_ORDER /*Defines how result is being turned back*/);

        $id = $matches[0][1]; // --> 17
        $hash = $matches[0][3]; // --> 23b
        $hashedpwdCheck = custom_hash($pwd, $id);
        preg_match_all($re, $hashedpwdCheck, $matches, PREG_SET_ORDER);
        $shash = $matches[0][3]; // --> 23b
        if ($shash != $hash) {
          header("location: ../index.php?login=error");
          exit();
        }if ($shash == $hash) {
          //logging in to the website
          header("location: ../home.php");
          exit();
        }
      }
    }
  }
}else {
  header("location: ../index.php=skip");
}
?>
