<HTML>
<HEAD>
 <TITLE>Functies aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr>  
 <th>Functie id</th>
 <th>Functie</th>
 <th>Aanpassen</th>
 <th>Verwijderen</th></tr>

<?php
session_start();
include 'menu_functies.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM functies");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

        echo "<tr><td>". $data["functie_id"] . "<br/> ";
		    echo "<td>". $data["functie"] . "<br/> ";
       	echo "<td><a href='aanpassen_functies_form.php?functie_id=".$data["functie_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='functieverwijderen.php?functie_id=".$data["functie_id"]."'class='knop'>verwijderen</a>";
         
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
