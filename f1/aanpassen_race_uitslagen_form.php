<HTML>
<HEAD>
 <TITLE>Race uitslagen  aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_race_uitslagen.html';
include 'dbconnect.php';

     $ru_id=$_GET['ru_id'];
$query=$db->prepare("select * from race_uitslagen where ru_id='$ru_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){


    $ru_id = $data['ru_id'];
    $race_id = $data['race_id'];
    $seizoen_id = $data['seizoen_id'];
    $circuit_id = $data['circuit_id'];
    $team_id = $data['team_id'];
    $coureur_id = $data['coureur_id'];
    $punten = $data['punten'];
    $sprintrace = $data['sprintrace'];

}


?>
<form method="post"action="update_race_uitslagen.php">
   <label>ru id:</label> <br />

   <input type="text" name="ru_id" value="<?php echo $ru_id;?>"/><br /> <br />

   <label>Race id:</label> <br />

   <input type="text" name="race_id" value="<?php echo $race_id;?>"/><br /> <br />

   <label>Seizoen id:</label> <br />

   <input type="text" name="seizoen_id" value="<?php echo $seizoen_id;?>"/><br /> <br />

   <label>Circuit id:</label> <br />

   <input type="text" name="circuit_id" value="<?php echo $circuit_id;?>"/><br /> <br />
   
   <label>Team id</label> <br />
   
   <input type="text" name="team_id" value="<?php echo $team_id;?>"/><br /> <br />
  
   <label>Coureur id:</label> <br />

<input type="text" name="coureur_id" value="<?php echo $coureur_id;?>"/><br /> <br />

<label>punten:</label> <br />

<input type="text" name="punten" value="<?php echo $punten;?>"/><br /> <br />

<label>sprintrace</label> <br />

<input type="text" name="sprintrace" value="<?php echo $sprintrace;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>