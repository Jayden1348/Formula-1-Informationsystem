<HTML>
<HEAD>
 <TITLE>Coureurs aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr>    
 <th>Naam</th>   
 <th>Nationaliteit</th>
 <th>Startnummer</th>
 <th>Geboortedatum</th>
 <th>Coureur id</th>
 <th>Aanpassen</th>
 <th>Verwijderen</th></tr>

<?php
session_start();
include 'menu_coureurs.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM coureurs");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

		    echo "<tr><td>". $data["Naam"] . " ";
        echo "<td>".$data["Nationaliteit"] . "<br />";
        echo "<td>".$data["Startnummer"] . "<br />";
        echo "<td>".$data["Geboortedatum"] . "<br />";
        echo "<td>".$data["Coureur_id"] . "<br />";
       	echo "<td><a href='aanpassen_coureurs_form.php?Coureur_id=".$data["Coureur_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='coureursverwijderen.php?Coureur_id=".$data["Coureur_id"]."'class='knop'>verwijderen</a>";
         
    }
}
else{
  echo $_SESSION["login"];
         header ('location:eerstinloggen.php');
 
 }
  
?>

 </table>
</BODY>
</HTML>
