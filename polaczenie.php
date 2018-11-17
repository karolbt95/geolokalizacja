<?php
// nawiazujemy polaczenie 
//$connection = @mysql_connect('46.242.174.112', '00082290_z10', 'KJlyP_Im') or die('Brak połączenia z serwerem MySQL.<br />Błąd: '.mysql_error()); 
// połączenie nawiązane ;-) 

// nawiązujemy połączenie z bazą danych 
//$db = @mysql_select_db('00082290_z10', $connection) or die('Nie mogę połączyć się z bazą danych<br />Błąd: '.mysql_error()); 
// połączenie nawiązane ;-) 

// zamykamy połączenie

$polaczenie = mysqli_connect("localhost", "00082290_dane", "1mU_npq", "00082290_dane");

?>