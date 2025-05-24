<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_circuits.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
   <label><strong><h3>Nieuw circuit invoeren</h3></strong></label> <br /> <br /> 
   <label>Circuit id:</label> <br />
   <input type="text name="circuit_id" /><br /> <br />
   <label>Circuitnaam:</label> <br />
   <input type="text" name="Circuitnaam" /><br /> <br />
   <label>Land:</label> <br />
   <input type="text" name="Land" /><br /> <br />
   <label>Plaats:</label> <br />
   <input type="text" name="Plaats" /><br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$circuit_id=$_POST['circuit_id'];
$circuitnaam=$_POST['Circuitnaam'];
$land=$_POST['Land'];
$plaats=$_POST['Plaats'];



$query=$db->prepare("INSERT INTO circuit(circuit_id, Circuitnaam, Land, Plaats)
VALUES( '" . $circuit_id . "' , '" . $circuitnaam . "' , '" . $land . "' , '" . $plaats . "')");

$query->execute();
}
}
else{
  echo $_SESSION["login"];
         header ('location:eerstinloggen.php');
 
 }
?>

</body>
</html>