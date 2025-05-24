<HTML>
<HEAD>
 <TITLE>Constructeurskampioen aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr>    
 <th>Constructeurskampioen id</th>   
 <th>Team id</th>
 <th>Aanpassen</th>
 <th>Verwijderen</th></tr>

<?php
session_start();
include 'menu_constructeurskampioen.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM constructeurskampioen");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

       
		    echo "<tr><td>". $data["constructeurskampioen_id"] . " ";
        echo "<td>".$data["team_id"] . "<br />";
       	echo "<td><a href='aanpassen_constructeurskampioen_form.php?constructeurskampioen_id=".$data["constructeurskampioen_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='constructeurskampioenverwijderen.php?constructeurskampioen_id=".$data["constructeurskampioen_id"]."'class='knop'>verwijderen</a>";
         
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
