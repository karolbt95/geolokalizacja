<?php
// Słaba ale działająca
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
$miasto = $details->city; // -> "Mountain View"
$kraj = $details->country;
$region = $details->region;
$host = $details->hostname;
/*
echo "<br /><br />";
echo $kraj;
echo "<br /><br />";
echo $region;
echo "<br /><br />";
echo $miasto;
echo "<br /><br />";
*/
/*
 $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
 print_r($location);

$kraj = $location->country_code;
echo $kraj;

*/
?>