<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_seizoenen.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
<label><strong><h3>Nieuw seizoen invoeren</h3></strong></label> <br /> <br /> 
   <label>seizoen id:</label> <br />
   <input type="text" name="seizoen_id" /><br /> <br />
   <label>Seizoennummer:</label> <br />
   <input type="text" name="seizoennummer" /><br /> <br />
   <label>Kampioen_id:</label> <br />
   <input type="text" name="kampioen_id"/> <br /> <br />
   <label>Aantal races:</label> <br />
   <input type="text" name="aantalraces"/> <br /> <br />
   <label>Constructeurskampioen_id:</label> <br />
   <input type="text" name="constructeurkampioen_id"/> <br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$seizoen_id=$_POST['seizoen_id'];
$seizoennummer=$_POST['seizoennummer'];
$kampioen_id=$_POST['kampioen_id'];
$aant_races=$_POST['aantalraces'];
$cons_kampioen=$_POST['constructeurkampioen_id'];

$query=$db->prepare("INSERT INTO seizoenen(seizoen_id, seizoennummer, kampioen_id, aantalraces, constructeurkampioen_id)
VALUES( '" . $seizoen_id . "' , '" . $seizoennummer . "', '" . $kampioen_id . "', '" . $aant_races . "', '" . $cons_kampioen . "')");

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