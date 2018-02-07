<?php

session_start();
session_destroy();
?>


<!DOCTYPE html>
<html>
<style>
body{
  font-family: monospace;
  background-image: url(http://4493bz.1985t.com/uploads/allimg/141126/4-141126101632.jpg);
  background-size: cover;
}


input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 2px;
    margin: 8px 0;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 2px;
    margin: 8px 0;
    margin-left: 77px;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}
.imgcontainer {
    margin-left: 76px;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
}

label{
  color: white;
  font-size: 16px;
}
</style>
<body>

<form action="include/login.stuff.php" method="POST">
  <div class="imgcontainer">
    <img src="https://i.pinimg.com/170x/3e/ac/aa/3eacaa1f47964575bd81ff010921b771.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label>Username</label>
    <input type="text" placeholder="Enter Username" name="uname">
    <br>
    <label>Password</label>
    <input type="password" placeholder="Enter Password" name="pwd">
  </div>
    <div><button type="submit" name="submit">Login</button>
  </div>


</form>

</body>
</html>
