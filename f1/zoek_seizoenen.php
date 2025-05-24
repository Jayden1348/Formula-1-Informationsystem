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
include 'menu_seizoenen.html';

if(isset($_POST['verzenden']))
{


          $query=$db->prepare("SELECT * FROM seizoenen where seizoennummer like '%".$_POST['zoek']."%'order by 1");
    	   $query->execute();
    	   
    	   
 $result= $query->fetchAll(PDO::FETCH_ASSOC);

   if (empty($result))
   {
   echo "<div class='extra'><h1>Geen resultaat</h1></div>";
   }
   else
   { echo " <tr><th>Seizoen id</th>    <th>Seizoennummer</th> <th>Aantal races</th> <th>Kampioen id</th> <th>Constructeurskampioen id</th></tr>";
      foreach($result as &$data){


        echo "<tr><td>".$data["seizoen_id"] . " ";
		echo "<td>". $data["seizoennummer"] . " ";
    echo "<td>". $data["aantalraces"] . " ";
    echo "<td>". $data["kampioen_id"] . " ";
    echo "<td>". $data["constructeurkampioen_id"] . " ";
       
	  }   }     }
?>
 </table>    <br>     <br>
 <form class='extra' method="POST" action="">
<label>Vul een (deel van) een seizoennummer in :</label>


   <input type="text" name="zoek" size="20">
</select>
 <input type="submit" name='verzenden' value="Zoek">
</form>
</BODY>
</HTML>
