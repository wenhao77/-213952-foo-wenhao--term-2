
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "hello " . htmlspecialchars($_POST['stuff']);
}

?>

     <form method="POST">
    <div>
     <input id="stuff" name="stuff"></input>
    </div>
    <div>
      <button type="submit">submit</button>
    </div>
   </form>
   </body>
 </html>
