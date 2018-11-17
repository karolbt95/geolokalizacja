<script type="text/javascript">
//var w = 0;
document.write(window.innerWidth);
document.write(window.innerHeight);

var rozmiar1= window.innerWidth + "x" + window.innerHeight;

// Ciasto z rozmiarem okna

	
document.cookie = "rozmiar"+"="+rozmiar1;

// -------------------------






// Przekazanie zmiennych do adresu

/*
function myJavascriptFunction() { 
  var javascriptVariable = "John";

  window.location.href = "?width=" + window.innerWidth + "?height=" + window.innerHeight; 

}

myJavascriptFunction();
*/

</script>

<?php 
echo '<script type="text/javascript">window.location.href = "?width=" + window.innerWidth + "?height=" + window.innerHeight;</script>';
 ?>
