<HTML>
<HEAD>
 <TITLE>Statistieken aanpassen</TITLE>
   
</HEAD>
<BODY>

 <br>
<table border="1" width="100%">
<tr><th>Coureur_id</th>
    <th>Wins</th>
    <th>Poles</th> 
    <th>Podiums</th> 
    <th>DNF's</th>
    <th>Races</th>
    <th>Seizoenen</th>
    <th>Aanpassen</th>
    <th>Verwijderen</th></tr>

<?php
session_start();
include 'menu_statistieken.html';
include 'dbconnect.php';
if ($_SESSION["login"]== "waar"){
$query=$db->prepare("SELECT * FROM statistieken");
$query->execute();
      $result= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as &$data){

       
		    echo "<tr><td>". $data["coureur_id"] . " ";
        echo "<td>".$data["Wins"] . "<br />";
        echo "<td>".$data["Poles"] . "<br />";
        echo "<td>".$data["Podiums"] . "<br />";
        echo "<td>".$data["DNFs"] . "<br />";
        echo "<td>".$data["Races"] . "<br />";
        echo "<td>".$data["Seizoenen"] . "<br />";
       	echo "<td><a href='aanpassen_statistieken_form.php?coureur_id=".$data["coureur_id"]."'class='knop'>aanpassen </a>";
       	echo "<td><a href='statistiekenverwijderen.php?coureur_id=".$data["coureur_id"]."'class='knop'>verwijderen</a>";
    
    
    }
}
else{
  echo $_SESSION["login"];
         header ('location:eerstinloggen.php');
 
 }
  
?>


</BODY>
</HTML>