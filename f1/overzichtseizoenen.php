<HTML>
<HEAD>
 <TITLE>Overzicht seizoenen</TITLE>
</HEAD>
<BODY>
  <br>
  
<table border="1" width="70%">
    <th>Seizoen_id</th>   
    <th>Seizoennummer</th> 
    <th>Kampioen_id</th> 
    <th>Aantal races</th> 
    <th>Constructeur kampioen id</th> </tr>
   
    <?php
include 'menu_seizoenen.html';
include 'dbconnect.php';

$query=$db->prepare("SELECT * FROM seizoenen ");
$query->execute();



      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){
       
        
        echo "<tr><td>".$data["seizoen_id"] . " ";
	echo "<td>". $data["seizoennummer"] . " ";
        echo "<td>".$data["kampioen_id"] . "<br />";
          echo "<td>".$data["aantalraces"] . "<br />";	
          echo "<td>".$data["constructeurkampioen_id"] . "<br />";
      
    }
?>
    </table>
</BODY>
</HTML>