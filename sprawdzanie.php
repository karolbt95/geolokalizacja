<?php

$login = $_GET['login'];
$haslo = $_GET['haslo'];

//echo $haslo;

require_once("polaczenie.php");


$sql = "SELECT * FROM users WHERE login = '$login'";


$result = $polaczenie->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $haslo1 = $row["haslo"];
      
    }
} else {
    //echo "Brak wyników";

}





$polaczenie->close();

if ($haslo == $haslo1){
	setcookie("login", $login, time()+3600);

	echo '<input type="hidden" id="login1" name="login1" value="login1">';
	echo '<script type="text/javascript">window.location.href = "http://karolbt22.pl/daneuzytkownika/dane.php?width=" + window.innerWidth + "&height=" + window.innerHeight;</script>';
}else{
	header("Location: http://karolbt22.pl/daneuzytkownika/");
}





?>
