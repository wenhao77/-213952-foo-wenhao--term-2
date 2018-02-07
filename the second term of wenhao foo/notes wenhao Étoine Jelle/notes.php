<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
  </head>

  <body>
    <?php
    require_once 'ndb.php';
    require_once 'notes.database.php';
     $link = connect_to_db($dbServername, $dbUsername, $dbPassword, $dbName);
 // THIS IS THE CONNECT TO DATABASE FILE //
      // Collects the data from the index.php submit //
      $title = $_POST['title'];
      $text = mysqli_real_escape_string($link, $_POST['text']);
      $id = $_POST["id"];
      $date = $_POST["date"];
      $tag = $_POST["tag"];
      $table = "notes";

      // Insert stuff from the note in database //

      if ($id == null) {
        $sql = "INSERT INTO $table (`date`, `title`, `text`) Values ('$date', '$title', '$text')";
        mysqli_query($link, $sql);
        $sql = "INSERT INTO `Pivots` (`note_id`, `tag_id`) Values ((SELECT `id` FROM `Notes` WHERE (`title` = '$title')), (SELECT `id` FROM `Tags` WHERE (`tag` = '$tag')))";
        mysqli_query($link, $sql);
        echo "Upload succes!" . "</br>";
      }
      // Updates stuff from the note in database //
      else {
        $sql = "UPDATE $table SET `title` = '$title', `text` = '$text', `date` = '$date' WHERE (`id` = '$id')";
        mysqli_query($link, $sql);
        $sql = "UPDATE `Pivots` SET `note_id` = (SELECT `id` FROM `notes` WHERE (`title` = '$title')), `tag_id` = (SELECT `id` FROM `Tags` WHERE (`tag` = '$tag'))";
        mysqli_query($link, $sql);
        echo "Update succes!" . "</br>";
      }
    ?>
    <a href="search.php">Go to search.</a><br>
    <a href="index.php">Upload another text.</a>
  </body>
</html>
