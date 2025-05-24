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
include 'menu_coureurs_per_team.html';

if(isset($_POST['verzenden']))
{


          $query=$db->prepare("SELECT * FROM coureurs_per_team where 1e_coureur like '%".$_POST['zoek']."%' or 2e_coureur like '%".$_POST['zoek']."%'order by 1");
    	   $query->execute();
    	   
    	   
 $result= $query->fetchAll(PDO::FETCH_ASSOC);

   if (empty($result))
   {
   echo "<div class='extra'><h1>Geen resultaat</h1></div>";
   }
   else
   { echo " <tr><th>Seizoen id</th>    <th>Team id</th> <th>1e coureur</th> <th>2e coureur</th></tr>";
      foreach($result as &$data){


        echo "<tr><td>".$data["seizoen_id"] . " ";
		echo "<td>". $data["team_id"] . " ";
    echo "<td>". $data["1e_coureur"] . " ";
    echo "<td>". $data["2e_coureur"] . " ";
       
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