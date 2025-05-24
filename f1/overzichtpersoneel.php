<HTML>
<HEAD>
 <TITLE>Overzicht personeel</TITLE>
</HEAD>
<BODY>
  <br>
 
<table border="1" width="70%">
    <th>Team_id</th>   
    <th>Naam</th> 
    <th>Geboortedatum</th> 
    <th>Functie_id</th> 
    <th>Personeel_id</th></tr>
   
    <?php
include 'menu_personeel.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM personeel ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        
        echo "<tr><td>".$data["team_id"] . " ";
	echo "<td>". $data["naam"] . " ";
        echo "<td>".$data["geboortedatum"] . "<br />";
        	echo "<td>".$data["functie_id"] . "<br />";
        	echo "<td>".$data["personeel_id"] . "<br />";
        	
      
    }
?>
    </table>
</BODY>
</HTML>