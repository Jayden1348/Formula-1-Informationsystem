<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_functies.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
<label><strong><h3>Nieuwe functie invoeren</h3></strong></label> <br /> <br /> 
   <label>Functie id:</label> <br />
   <input type="text" name="functie_id" /><br /> <br />
   <label>Functie:</label> <br />
   <input type="text" name="functie" /><br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$functie_id=$_POST['functie_id'];
$functie=$_POST['functie'];



$query=$db->prepare("INSERT INTO functies(functie_id, functie)
VALUES( '" . $functie_id . "' , '" . $functie . "')");

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