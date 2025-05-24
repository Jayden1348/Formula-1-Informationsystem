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
include 'menu_statistieken.html';

if(isset($_POST['verzenden']))
{


          $query=$db->prepare("SELECT * FROM statistieken where coureur_id like '%".$_POST['zoek']."%'order by 1");
    	   $query->execute();
    	   
    	   
 $result= $query->fetchAll(PDO::FETCH_ASSOC);

   if (empty($result))
   {
   echo "<div class='extra'><h1>Geen resultaat</h1></div>";
   }
   else
   { echo " <tr><th>Coureur id</th>  <th>Races</th> <th>Seizoenen</th> <th>Podiums</th> <th>Wins</th> <th>DNFs</th> <th>Poles</th></tr>";
      foreach($result as &$data){


		echo "<tr><td>". $data["coureur_id"] . " ";
    echo "<td>".$data["Races"] . " ";
    echo "<td>".$data["Seizoenen"] . " ";
    echo "<td>".$data["Podiums"] . " ";
    echo "<td>".$data["Wins"] . " ";
    echo "<td>".$data["DNFs"] . " ";
    echo "<td>".$data["Poles"] . " ";
       
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
