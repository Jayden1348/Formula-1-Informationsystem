<HTML>
<HEAD>
 <TITLE>Race uitslagen aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr>    
 <th>ru id</th>   
 <th>Race id</th>   
 <th>Seizoen id</th>
 <th>Circuit id</th>
 <th>Team id</th>
 <th>Coureur id</th>   
 <th>Punten</th>
 <th>Sprintrace</th>
 <th>Aanpassen</th>
 <th>Verwijderen</th></tr>

<?php
session_start();
include 'menu_race_uitslagen.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM race_uitslagen");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

        echo "<tr><td>". $data["ru_id"] . " ";
		    echo "<td>". $data["race_id"] . " ";
        echo "<td>".$data["seizoen_id"] . "<br />";
        echo "<td>".$data["circuit_id"] . "<br />";
        echo "<td>".$data["team_id"] . "<br />";
        echo "<td>".$data["coureur_id"] . "<br />";
        echo "<td>".$data["punten"] . "<br />";
        echo "<td>".$data["sprintrace"] . "<br />";
       	echo "<td><a href='aanpassen_race_uitslagen_form.php?ru_id=".$data["ru_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='race_uitslagenverwijderen.php?ru_id=".$data["ru_id"]."'class='knop'>verwijderen</a>";
         
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
