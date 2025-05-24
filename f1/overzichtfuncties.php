<HTML>
<HEAD>
 <TITLE>Overzicht functies</TITLE>
</HEAD>
<BODY>
  <br>
  
<table border="1" width="70%">
    <th>Functie_id</th>  
    <th>Functie</th></tr>
   
    <?php
include 'menu_functies.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM functies ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        
        echo "<tr><td>".$data["functie_id"] . " ";
	echo "<td>". $data["functie"] . " ";
        	
      
    }
?>
    </table>
</BODY>
</HTML>