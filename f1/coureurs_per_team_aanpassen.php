<HTML>
<HEAD>
 <TITLE>Coureurs per team aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr> 
 <th>cpt id</th>     
 <th>Seizoen id</th>   
 <th>Team id</th>
 <th>1e coureur</th>
 <th>2e coureur</th>
 <th>Aanpassen</th>
 <th>Verwijderen</th></tr>

<?php
  session_start();
  include 'menu_coureurs_per_team.html';
  include 'dbconnect.php';
  if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM coureurs_per_team");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

        echo "<tr><td>". $data["cpt_id"] . " ";
		    echo "<td>". $data["seizoen_id"] . " ";
        echo "<td>".$data["team_id"] . "<br />";
        echo "<td>".$data["1e_coureur"] . "<br />";
        echo "<td>".$data["2e_coureur"] . "<br />";
       	echo "<td><a href='aanpassen_coureurs_per_team_form.php?cpt_id=".$data["cpt_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='coureurs_per_team_verwijderen.php?cpt_id=".$data["cpt_id"]."'class='knop'>verwijderen</a>";
         
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
