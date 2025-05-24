<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 
</head>
<body>
  <?php
  session_start();
include 'menu_wereldkampioenen.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
?>
<form method="post" action="">
<label><strong><h3>Nieuwe wereldkampioen invoeren</h3></strong></label> <br /> <br /> 
   <label>Kampioen id:</label> <br />
   <input type="text" name="kampioen_id" /><br /> <br />
   <label>Coureur id:</label> <br />
   <input type="text" name="coureur_id" /><br /> <br />
   <input type="submit" name="verzenden"    value= "Opslaan"/>
</form>
<?php

if (isset($_POST['verzenden'])){
$kampioen_id=$_POST['kampioen_id'];
$coureur_id=$_POST['coureur_id'];



$query=$db->prepare("INSERT INTO wereldkampioen(kampioen_id, coureur_id)
VALUES( '" . $kampioen_id . "' , '" . $coureur_id . "')");

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