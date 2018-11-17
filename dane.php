<style>
	
	td{
		border-style:solid; 
		border-width:1px; 
		border-color:#000;
		width:100px;
	}

</style>
<center>
<form action="ponowny.php">
<h1>Ponów test</h1><br />
  <input style="width:300px;" type="submit" value="PONÓW TEST">
  <br /><br />
</form> 
</center>
<?php


require_once("system.php");
require_once("geolokalizacja.php");
require_once("IP.php");


require_once("polaczenie.php");


$szerokosc = $_GET['width'];
$wysokosc = $_GET['height'];

$rozmiar = "{$szerokosc} x {$wysokosc}";
// echo $rozmiar; 

if (isset($_COOKIE["login"])){
	$login = $_COOKIE["login"];
	$ciastka = "Tak" ;
}else {
	$ciastka = "Nie";
}



$sql = "INSERT INTO dane (login, system, przegladarka, jezyk, ip, kraj, miasto, region, rozmiar, ciastka )
VALUES ('$login', '$system', '$przegladarka', '$jezyk', '$ip', '$kraj', '$miasto', '$region', '$rozmiar' , '$ciastka')";

if ($polaczenie->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}







// WYŚWIETLANIE DANYCH



require_once("polaczenie.php");


$sql = "SELECT * FROM dane ORDER BY `idt` DESC";


$result = $polaczenie->query($sql);

echo '<center>';
echo '<table style="border-style:solid; border-width:1px; border-color:#000;">';
echo '<tr style="font-weight:700; border-style:solid; border-width:1px; border-color:#000;">';
echo "<b>";
        echo "<td>";
        echo "idt";
        echo "</td>";
        echo "<td>";
        echo "data"; 
        echo "</td>";
        echo "<td>";
        echo "login"; 
        echo "</td>";
        echo "<td>";
        echo "system"; 
        echo "</td>";
        echo "<td>";
        echo "przegladarka";
        echo "</td>";
        echo "<td>";
        echo "jezyk"; 
        echo "</td>";
        echo "<td>";
        echo "ip"; 
        echo "</td>";
        echo "<td>";
        echo "kraj"; 
        echo "</td>";
        echo "<td>";
        echo "miasto";
        echo "</td>";
        echo "<td>";
        echo "region"; 
        echo "</td>";
        echo "<td>";
        echo "rozmiar"; 
        echo "</td>";
        echo "<td>";
        echo "ciastka";
        echo "</td>";
        echo "</tr>";
echo "</b>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>";
        echo $row["idt"];
        echo "</td>";
        echo "<td>";
        echo $row["data"];
        echo "</td>";
        echo "<td>";
        echo $row["login"]; 
        echo "</td>";
        echo "<td>";
        echo $row["system"]; 
        echo "</td>";
        echo "<td>";
        echo $row["przegladarka"];
        echo "</td>";
        echo "<td>";
        echo $row["jezyk"]; 
        echo "</td>";
        echo "<td>";
        echo $row["ip"]; 
        echo "</td>";
        echo "<td>";
        echo $row["kraj"]; 
        echo "</td>";
        echo "<td>";
        echo $row["miasto"];
        echo "</td>";
        echo "<td>";
        echo $row["region"]; 
        echo "</td>";
        echo "<td>";
        echo $row["rozmiar"]; 
        echo "</td>";
        echo "<td>";
        echo $row["ciastka"];
        echo "</td>";
        echo "</tr>";
    }
} else {
    //echo "Brak wyników";

}

echo "</table>";
echo '</center>';












$polaczenie->close();


?>

