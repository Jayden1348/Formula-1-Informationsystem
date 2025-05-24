<HTML>
<HEAD>
 <TITLE>Seizoenen aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr>    
<th>Seizoen id</th>   
<th>Seizoennummer</th>
<th>Kampioen id</th>
<th>Aantal races</th>
<th>Constructeurskampioen id</th>
<th>Aanpassen</th>
<th>Verwijderen</th></tr>

<?php
session_start();
include 'menu_seizoenen.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM seizoenen");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

       
		    echo "<tr><td>". $data["seizoen_id"] . " ";
        echo "<td>".$data["seizoennummer"] . "<br />";
        echo "<td>".$data["kampioen_id"] . "<br />";
        echo "<td>".$data["aantalraces"] . "<br />";
        echo "<td>".$data["constructeurkampioen_id"] . "<br />";
       	echo "<td><a href='aanpassen_seizoenen_form.php?seizoen_id=".$data["seizoen_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='seizoenenverwijderen.php?seizoen_id=".$data["seizoen_id"]."'class='knop'>verwijderen</a>";
         
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
