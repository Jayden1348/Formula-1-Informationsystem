<HTML>
<HEAD>
 <TITLE>Overzicht constructeurs</TITLE>
</HEAD>
<BODY>
  <br>
  
<table border="1" width="70%">
    <th>Constructeurskampioen_id</th>   
    <th>Team_id</th> 
    </tr>
   
    <?php
include 'menu_constructeurskampioen.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM constructeurskampioen ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        
        echo "<tr><td>".$data["constructeurskampioen_id"] . " <br/>";
	echo "<td>". $data["team_id"] . " "; 
       
    }
?>
    </table>
</BODY>
</HTML>