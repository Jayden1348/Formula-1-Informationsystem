<HTML>
<HEAD>
 <TITLE>Statistieken aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_statistieken.html';
include 'dbconnect.php';

     $coureur_id=$_GET['coureur_id'];
$query=$db->prepare("select * from statistieken where coureur_id='$coureur_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){


     $coureur_id = $data['coureur_id'];
    $wins = $data['Wins'];
    $poles = $data['Poles'];
    $podiums = $data['Podiums'];
    $DNFs = $data['DNFs'];
    $races = $data['Races'];
    $seizoenen = $data['Seizoenen'];
}


?>
<form method="post"action="update_statistieken.php">
   <label>Coureur id:</label> <br />

   <input type="text" name="coureur_id" value="<?php echo $coureur_id;?>"/><br /> <br />
   
   <label>Wins:</label> <br />

   <input type="text" name="Wins" value="<?php echo $wins;?>"/><br /> <br />
   
   <label>Poles:</label> <br />

   <input type="text" name="Poles" value="<?php echo $poles;?>"/><br /> <br />

   <label>Podiums:</label> <br />

   <input type="text" name="Podiums" value="<?php echo $podiums;?>"/><br /> <br />

   <label>DNF's:</label> <br />

<input type="text" name="DNFs" value="<?php echo $DNFs;?>"/><br /> <br />

<label>Races:</label> <br />

<input type="text" name="Races" value="<?php echo $races;?>"/><br /> <br />

<label>Seizoenen:</label> <br />

<input type="text" name="Seizoenen" value="<?php echo $seizoenen;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>