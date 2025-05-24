<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_coureurs.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
<label><strong><h3>Nieuwe coureur invoeren</h3></strong></label> <br /> <br /> 
   <label>Naam:</label> <br />
   <input type="text" name="Naam" /><br /> <br />
   <label>Nationaliteit:</label> <br />
   <input type="text" name="Nationaliteit" /><br /> <br />
   <label>Startnummer:</label> <br />
   <input type="text" name="Startnummer" /><br /> <br />
   <label>Geboortedatum:</label> <br />
   <input type="date" name="Geboortedatum" /><br /> <br />
   <label>Coureur id:</label> <br />
   <input type="text" name="Coureur_id" /><br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$naam=$_POST['Naam'];
$nationaliteit=$_POST['Nationaliteit'];
$startnummer=$_POST['Startnummer'];
$geboortedatum=$_POST['Geboortedatum'];
$coureur_id=$_POST['Coureur_id'];



$query=$db->prepare("INSERT INTO coureurs(Naam, Nationaliteit, Startnummer, Geboortedatum, Coureur_id)
VALUES( '" . $naam . "' , '" . $nationaliteit . "' , '" . $startnummer . "' , '" . $geboortedatum . "', '" . $coureur_id . "')");

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