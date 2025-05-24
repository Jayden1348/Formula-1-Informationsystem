<HTML>
<HEAD>
 <TITLE>Personeel aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_personeel.html';
include 'dbconnect.php';

     $personeel_id=$_GET['personeel_id'];
$query=$db->prepare("select * from personeel where personeel_id='$personeel_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){



    $team_id = $data['team_id'];
    $naam = $data['naam'];
    $geboortedatum = $data['geboortedatum'];
    $functie_id = $data['functie_id'];
    $personeel_id = $data['personeel_id'];
}


?>
<form method="post"action="update_personeel.php">
   <label>Team id:</label> <br />

   <input type="text" name="team_id" value="<?php echo $team_id;?>"/><br /> <br />
   
   <label>Naam:</label> <br />

   <input type="text" name="naam" value="<?php echo $naam;?>"/><br /> <br />
   
   <label>Geboortedatum:</label> <br />

   <input type="date" name="geboortedatum" value="<?php echo $geboortedatum;?>"/><br /> <br />
   
   <label>Functie id:</label> <br />

   <input type="text" name="functie_id" value="<?php echo $functie_id;?>"/><br /> <br />
   
   <label>Personeel id:</label> <br />

   <input type="text" name="personeel_id" value="<?php echo $personeel_id;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>