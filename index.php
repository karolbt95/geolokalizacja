
<!--
<form action="action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
-->
<center>
<form action="sprawdzanie.php" type="hidden">
<h2>Zaloguj Się!</h2>
<label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Wprowadź login" name="login" required>
<br /><br />
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Wprowadź hasło" name="haslo" required>
<br /><br />
    <button type="submit">Login</button>

</form>
</center>

<?php

//include ("rozmiar.php");

/*

WYKORZYSTANIE CIASTEK DO PRZEKAZANIA ROZMIARU

$cookie_name = "rozmiar";

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

*/



?>