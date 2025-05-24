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
include 'menu_race_uitslagen.html';

if(isset($_POST['verzenden']))
{


          $query=$db->prepare("SELECT * FROM race_uitslagen where coureur_id like '%".$_POST['zoek']."%'order by 1");
    	   $query->execute();
    	   
    	   
 $result= $query->fetchAll(PDO::FETCH_ASSOC);

   if (empty($result))
   {
   echo "<div class='extra'><h1>Geen resultaat</h1></div>";
   }
   else
   { echo " <tr><th>Coureur id</th> <th>Team id</th> <th>Race id</th> <th>Circuit id</th> <th>Seizoen id</th> <th>Punten</th> <th>Sprintweekend</th></tr>";
      foreach($result as &$data){


        echo "<tr><td>". $data["coureur_id"] . " ";
        echo "<td>". $data["team_id"] . " ";
    echo "<td>".$data["race_id"] . " ";
    echo "<td>". $data["circuit_id"] . " ";
    echo "<td>". $data["seizoen_id"] . " ";
    echo "<td>". $data["punten"] . " ";
    echo "<td>". $data["sprintweekend"] . " ";
       
	  }   }     }
?>
 </table>    <br>     <br>
 <form class='extra' method="POST" action="">
<label>Vul een (deel van) een coureur id in :</label>


   <input type="text" name="zoek" size="20">
</select>
 <input type="submit" name='verzenden' value="Zoek">
</form>
</BODY>
</HTML>
