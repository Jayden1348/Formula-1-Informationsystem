<HTML>
<HEAD>
 <TITLE>Overzicht wereldkampioenen</TITLE>
</HEAD>
<BODY>
  <br>

<table border="1" width="70%">
    <th>Coureur_id</th>   
    <th>Kampioen_id</th></tr>
   
    <?php
include 'menu_wereldkampioenen.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM wereldkampioen ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        
        echo "<tr><td>".$data["coureur_id"] . " ";
        echo "<td>".$data["kampioen_id"] . "<br />";
        
        	
      
    }
?>
    </table>
</BODY>
</HTML>