<HTML>
<HEAD>
 <TITLE>Overzicht race uitslagen</TITLE>
</HEAD>
<BODY>
  <br>
 
<table border="1" width="70%">
    <th>ru_id</th>   
    <th>Race_id</th>       
    <th>Seizoen_id</th> 
    <th>Circuit_id</th> 
    <th>Team_id</th> 
    <th>Coureur_id</th> 
    <th>Punten</th> 
    <th>Sprintrace</th> </tr>
   
    <?php
include 'menu_race_uitslagen.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM race_uitslagen ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
          echo "<tr><td>".$data["ru_id"] . " ";
          echo "<td>".$data["race_id"] . " ";
          echo "<td>".$data["seizoen_id"] . " ";
          echo "<td>".$data["circuit_id"] . " ";
          echo "<td>".$data["team_id"] . " ";
        	echo "<td>".$data["coureur_id"] . "<br />";
          echo "<td>".$data["punten"] . "<br />";
          echo "<td>".$data["sprintrace"] . "<br />";
        	
      
    }
?>
    </table>
</BODY>
</HTML>