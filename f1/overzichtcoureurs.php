<HTML>
<HEAD>
 <TITLE>Overzicht coureurs</TITLE>
</HEAD>
<BODY>
  <br>

<table border="1" width="70%">
    <th>Naam</th>   
    <th>Nationaliteit</th> 
    <th>Startnummer</th> 
    <th>Geboortedatum</th> 
    <th>Coureur_id</th></tr>
   
    <?php
include 'menu_coureurs.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM coureurs ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        
        echo "<tr><td>".$data["Naam"] . " ";
	echo "<td>". $data["Nationaliteit"] . " ";
        echo "<td>".$data["Startnummer"] . "<br />";
        	echo "<td>".$data["Geboortedatum"] . "<br />";
        	echo "<td>".$data["Coureur_id"] . "<br />";
        	
      
    }
?>
    </table>
</BODY>
</HTML>