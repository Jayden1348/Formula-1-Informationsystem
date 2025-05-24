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
include 'menu_coureurs.html';

if(isset($_POST['verzenden']))
{


          $query=$db->prepare("SELECT * FROM coureurs where Naam like '%".$_POST['zoek']."%'order by 1");
    	   $query->execute();
    	   
    	   
 $result= $query->fetchAll(PDO::FETCH_ASSOC);

   if (empty($result))
   {
   echo "<div class='extra'><h1>Geen resultaat</h1></div>";
   }
   else
   { echo " <tr><th>Naam</th>    <th>Coureur id</th> <th>Geboortedatum</th> <th>Nationaliteit</th> <th>Startnummer</th></tr>";
      foreach($result as &$data){


        echo "<tr><td>".$data["Naam"] . " ";
		echo "<td>". $data["Coureur_id"] . " ";
        echo "<td>".$data["Geboortedatum"] . " ";
        echo "<td>".$data["Nationaliteit"] . " ";
        echo "<td>".$data["Startnummer"] . " ";
       
	  }   }     }
?>
 </table>    <br>     <br>
 <form class='extra' method="POST" action="">
<label>Vul een (deel van) een coureur in :</label>


   <input type="text" name="zoek" size="20">
</select>
 <input type="submit" name='verzenden' value="Zoek">
</form>
</BODY>
</HTML>
