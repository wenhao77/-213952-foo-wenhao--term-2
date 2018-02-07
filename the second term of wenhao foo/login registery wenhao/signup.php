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
    margin: 8px 77px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 2px;
    margin: 8px 76px;
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
a-log{
  margin-left: 77px;
  color: white;
}
</style>
<body>

<form class="signup-form" action="include/signupinc.php" method="POST">
  <div class="imgcontainer">
    <img src="https://i.pinimg.com/170x/3e/ac/aa/3eacaa1f47964575bd81ff010921b771.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
  <input type="text" placeholder="Enter Username" name="uid">
  <br>
  <input type="password" name="pwd" placeholder="password">
  <br>
</div>
    <div><button type="submit" name="submit">sign up</button>
  </div>
  <a-log><div>already have an account?<a href="http://wenhaoportal.hopto.org/index.php"> click here></a></a-log>
  </div>

</form>

</body>
</html>

<?php

?>
