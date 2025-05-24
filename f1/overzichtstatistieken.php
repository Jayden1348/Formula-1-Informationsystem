<HTML>
<HEAD>
 <TITLE>Overzicht statistieken</TITLE>
</HEAD>
<BODY>
  <br>

<table border="1" width="70%">
    <th>Coureur_id</th>   
    <th>Wins</th> 
    <th>Poles</th>
    <th>Podiums</th>  
    <th>DNF's</th>   
    <th>Races</th> 
    <th>Seizoenen</th> 
    </tr>
   
    <?php
include 'menu_statistieken.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM statistieken ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        
        echo "<tr><td>".$data["coureur_id"] . " ";
	echo "<td>". $data["Wins"] . " ";
        echo "<td>".$data["Poles"] . "<br />";
        	echo "<td>".$data["Podiums"] . "<br />";	
            echo "<td>". $data["DNFs"] . " ";
            echo "<td>".$data["Races"] . "<br />";
                echo "<td>".$data["Seizoenen"] . "<br />";
    }
?>
    </table>
</BODY>
</HTML>