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
include 'menu_circuits.html';

if(isset($_POST['verzenden']))
{


          $query=$db->prepare("SELECT * FROM circuit where Circuitnaam like '%".$_POST['zoek']."%'order by 1");
    	   $query->execute();
    	   
    	   
 $result= $query->fetchAll(PDO::FETCH_ASSOC);

   if (empty($result))
   {
   echo "<div class='extra'><h1>Geen resultaat</div>";
   }
   else
   { echo " <tr><th>Circuitnaam</th>    <th>Circuit id</th> <th>Land</th> <th>Plaats</th></tr>";
      foreach($result as &$data){


        echo "<tr><td>".$data["Circuitnaam"] . " ";
		echo "<td>". $data["circuit_id"] . " ";
    echo "<td>". $data["Land"] . " ";
    echo "<td>". $data["Plaats"] . " ";
       
	  }   }     }
?>
 </table>    <br>     <br>
 <form class='extra' method="POST" action="">
<label>Vul een (deel van) een circuit in :</label>


   <input type="text" name="zoek" size="20">
</select>
 <input type="submit" name='verzenden' value="Zoek">
</form>
</BODY>
</HTML>