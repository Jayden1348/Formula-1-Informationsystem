<HTML>
<HEAD>
 <TITLE>Overzicht circuits</TITLE>
</HEAD>
<BODY>
  <br>
  
<table border="1" width="70%">
    <th>Circuit_id</th>   
    <th>Circuitnaam</th> 
    <th>Land</th> 
    <th>Plaats</th> </tr>
   
    <?php
include 'menu_circuits.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM circuit ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        
        echo "<tr><td>".$data["circuit_id"] . " ";
	echo "<td>". $data["Circuitnaam"] . " ";
        echo "<td>".$data["Land"] . "<br />";
        	echo "<td>".$data["Plaats"] . "<br />";
        
        	
      
    }
?>
    </table>
</BODY>
</HTML>