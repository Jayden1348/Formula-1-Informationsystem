<HTML>
<HEAD>
 <TITLE>Wereldkampioen aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
 <tr>  
 <th>Kampioen id</th>
 <th>Coureur id</th>
 <th>Aanpassen</th>
 <th>Verwijderen</th></tr>

<?php
 session_start();
 include 'menu_wereldkampioenen.html';
 include 'dbconnect.php';
 if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM wereldkampioen");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

        echo "<tr><td>". $data["kampioen_id"] . "<br/> ";
		    echo "<td>". $data["coureur_id"] . "<br/> ";
       	echo "<td><a href='aanpassen_wereldkampioen_form.php?kampioen_id=".$data["kampioen_id"]."' class='knop'>aanpassen</a>";
       	echo "<td><a href='wereldkampioenverwijderen.php?kampioen_id=".$data["kampioen_id"]."'class='knop'>verwijderen</a>";
         
    }}
    else{
      echo $_SESSION["login"];
             header ('location:eerstinloggen.php');
     
     }
  
?>

 </table>
</BODY>
</HTML>
