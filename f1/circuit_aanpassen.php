<HTML>
<HEAD>
 <TITLE>Circuit aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr>    
 <th>Circuit id</th>   
 <th>Circuitnaam</th>
 <th>land</th>
 <th>Plaats</th>
 <th>Aanpassen</th>
 <th>Verwijderen</th></tr>

<?php
session_start();
include 'menu_circuits.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM circuit");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

       
		    echo "<tr><td>". $data["circuit_id"] . " ";
        echo "<td>".$data["Circuitnaam"] . "<br />";
        echo "<td>".$data["Land"] . "<br />";
        echo "<td>".$data["Plaats"] . "<br />";
       	echo "<td><a href='aanpassen_circuit_form.php?circuit_id=".$data["circuit_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='circuitverwijderen.php?circuit_id=".$data["circuit_id"]."'class='knop'>verwijderen</a>";
         
    }

}
else{
  echo $_SESSION["login"];
         header ('location:eerstinloggen.php');
 
 }
?>

 </table>
</BODY>
</HTML>
