<HTML>
<HEAD>
 <TITLE>Team aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr>    
<th>Team_id</th>   
<th>Teamnaam</th>
<th>nationaliteit</th>
<th>Aanpassen</th>
<th>Verwijderen</th></tr>

<?php
session_start();
include 'menu_teams.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM teams");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

       
		    echo "<tr><td>". $data["team_id"] . " ";
        echo "<td>".$data["Teamnaam"] . "<br />";
        echo "<td>".$data["Nationaliteit"] . "<br />";
       	echo "<td><a href='aanpassen_team_form.php?team_id=".$data["team_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='teamsverwijderen.php?team_id=".$data["team_id"]."'class='knop'>verwijderen</a>";
         
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
