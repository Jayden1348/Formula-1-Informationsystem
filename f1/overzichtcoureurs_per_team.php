<HTML>
<HEAD>
 <TITLE>Overzicht coureurs_per_team</TITLE>
</HEAD>
<BODY>
  <br>
 
<table border="1" width="70%">
    <th>cpt_id</th> 
    <th>Seizoen_id</th>   
    <th>Team_id</th> 
    <th>1e coureur</th> 
    <th>2e coureur</th></tr>
   
    <?php
include 'menu_coureurs_per_team.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM coureurs_per_team ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        echo "<tr><td>".$data["cpt_id"] . " ";
        echo "<td>".$data["seizoen_id"] . " ";
	      echo "<td>". $data["team_id"] . " ";
        echo "<td>".$data["1e_coureur"] . "<br />";
        echo "<td>".$data["2e_coureur"] . "<br />";
        	
        	
      
    }
?>
    </table>
</BODY>
</HTML>