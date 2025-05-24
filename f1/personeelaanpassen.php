<HTML>
<HEAD>
 <TITLE>Personeel aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr>    
<th>Team_id</th>   
<th>Naam</th>
<th>Geboortedatum</th>
<th>Functie id</th>
<th>Personeel id</th>
<th>Aanpassen</th>
<th>Verwijderen</th></tr>

<?php
session_start();
include 'menu_personeel.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM personeel");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

       
		    echo "<tr><td>". $data["team_id"] . " ";
        echo "<td>".$data["naam"] . "<br />";
        echo "<td>".$data["geboortedatum"] . "<br />";
        echo "<td>".$data["functie_id"] . "<br />";
        echo "<td>".$data["personeel_id"] . "<br />";
       	echo "<td><a href='aanpassen_personeel_form.php?personeel_id=".$data["personeel_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='personeelverwijderen.php?personeel_id=".$data["personeel_id"]."'class='knop'>verwijderen</a>";
         
    }
}
else{
  echo $_SESSION["login"]; header ('location: eerstinloggen.php');
 
 }
?>

 </table>
</BODY>
</HTML>
