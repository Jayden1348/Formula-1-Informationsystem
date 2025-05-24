<HTML>
<HEAD>
 <TITLE>Zoekformulier</TITLE>
 <link rel="stylesheet" type="text/css" href="style.css">

</HEAD>
<BODY>

 <br>
<table border="1" width="50%">


<?php

include 'dbconnect.php';
include 'menu_personeel.html';

if(isset($_POST['verzenden']))
{


          $query=$db->prepare("SELECT * FROM personeel where naam like '%".$_POST['zoek']."%'order by 1");
    	   $query->execute();
    	   
    	   
 $result= $query->fetchAll(PDO::FETCH_ASSOC);

   if (empty($result))
   {
   echo "<div class='extra'><h1>Geen resultaat</h1></div>";
   }
   else
   { echo " <tr><th>Naam</th>    <th>Geboortedatum</th> <th>Team id</th> <th>Functie id</th> <th>Personeel id</th></tr>";
      foreach($result as &$data){


        echo "<tr><td>".$data["naam"] . " ";
		echo "<td>". $data["geboortedatum"] . " ";
    echo "<td>". $data["team_id"] . " ";
    echo "<td>". $data["functie_id"] . " ";
    echo "<td>". $data["personeel_id"] . " ";
       
	  }   }     }
?>
 </table>    <br>     <br>
 <form class='extra' method="POST" action="">
<label>Vul een (deel van) een personeelslid in :</label>


   <input type="text" name="zoek" size="20">
</select>
 <input type="submit" name='verzenden' value="Zoek">
</form>
</BODY>
</HTML>
