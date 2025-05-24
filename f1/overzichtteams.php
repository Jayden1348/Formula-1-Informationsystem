<HTML>
<HEAD>
 <TITLE>Overzicht teams</TITLE>
</HEAD>
<BODY>
  <br>
  
<table border="1" width="70%">
    <th>Team_id</th>   
    <th>Teamnaam</th> 
    <th>Nationaliteit</th></tr>
   
    <?php
include 'menu_teams.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM teams ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        
        echo "<tr><td>".$data["team_id"] . " ";
	echo "<td>". $data["Teamnaam"] . " ";
        echo "<td>".$data["Nationaliteit"] . "<br />";
        	
      
    }
?>
    </table>
</BODY>
</HTML>