<HTML>
<HEAD>
 <TITLE>Zoekformulier</TITLE>
 <link rel='stylesheet' href='style_zoek.css'>


</HEAD>
<BODY>
  <?php

include 'dbconnect.php';

?>

<button class="button1"><a href="Hoofdmenu.html">Terug</a></button>

<form class='extra' method="POST" action="">

<br>  <label>Waar wil je op zoeken?</label>
 <br>
<select name="zoeken">
  <option  value="circuit">Circuits</option>
  <option  value="coureurs">Coureurs</option>
  <option  value="constructeurskampioen">Constructeurskampioen</option>
  <option  value="coureurs_per_team">Coureurs per team</option>
  <option  value="functies">Functies</option>
  <option  value="personeel">Personeel</option>
  <option  value="race_uitslagen">Race uitslagen</option>
  <option  value="seizoenen">Seizoenen</option>
  <option  value="statistieken">Statistieken</option>
  <option  value="teams">Teams</option>
  <option  value="wereldkampioen">Wereldkampioen</option>
</select>
 <input type="text" name="zoek" size="20">
 <input type="submit" name='verzenden' value="Zoek">
</form>

 <br>



<?php


if(isset($_POST['verzenden']))
{
    if ($_POST['zoeken']=="circuit")
    {$tabel="circuit";
     $kolom="Circuitnaam";
    }
    elseif ($_POST['zoeken']=="coureurs")
    {$tabel="coureurs";
     $kolom="Naam";
    }
    elseif ($_POST['zoeken']=="constructeurskampioen")
    {$tabel="constructeurskampioen";
     $kolom="constructeurskampioen_id";
    }
    elseif ($_POST['zoeken']=="coureurs_per_team")
    {$tabel="coureurs_per_team";
     $kolom="1e_coureur";
    }
    elseif ($_POST['zoeken']=="functies")
    {$tabel="functies";
     $kolom="functie";
    }
    elseif ($_POST['zoeken']=="personeel")
    {$tabel="personeel";
     $kolom="naam";
    }
    elseif ($_POST['zoeken']=="race_uitslagen")
    {$tabel="race_uitslagen";
     $kolom="coureur_id";
    }
    elseif ($_POST['zoeken']=="seizoenen")
    {$tabel="seizoenen";
     $kolom="seizoennummer";
    }
    elseif ($_POST['zoeken']=="statistieken")
    {$tabel="statistieken";
     $kolom="coureur_id";
    }
    elseif ($_POST['zoeken']=="teams")
    {$tabel="teams";
     $kolom="Teamnaam";
    }
    else
    {$tabel="wereldkampioen";
      $kolom="coureur_id";}

          $query=$db->prepare("SELECT  * FROM $tabel where $kolom like '%".$_POST['zoek']."%'order by 1");
    	   $query->execute();
    	   
         
 $result= $query->fetchAll(PDO::FETCH_ASSOC);
 echo "<div '>"; //uitkomst in een div zetten   
   if (empty($result))
   {
   echo "<h1>Geen resultaat</h1>";
   }
   else
   { echo " <table border='1' width='100%' ><tr><th>$kolom</th>    </tr>";
      foreach($result as &$data){
      echo "<tr><td>".$data["$kolom"] . " ";
	//	echo "<td>". $data["titel"] . " ";
       
	  }   
      }  
        }
?>
 </table>    <br>     <br>

</BODY>
</HTML>
