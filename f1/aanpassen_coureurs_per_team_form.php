<HTML>
<HEAD>
 <TITLE>Coureurs per team aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_coureurs_per_team.html';
include 'dbconnect.php';

     $cpt_id=$_GET['cpt_id'];
$query=$db->prepare("select * from coureurs_per_team where cpt_id='$cpt_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){


    $cpt_id = $data['cpt_id'];
    $seizoen_id = $data['seizoen_id'];
    $team_id = $data['team_id'];
    $coureur1 = $data['1e_coureur'];
    $coureur2 = $data['2e_coureur'];

}


?>
<form method="post"action="update_coureurs_per_team.php">
   <label>cpt id:</label> <br />

   <input type="text" name="cpt_id" value="<?php echo $cpt_id;?>"/><br /> <br />

   <label>seizoen id:</label> <br />

   <input type="text" name="seizoen_id" value="<?php echo $seizoen_id;?>"/><br /> <br />

   <label>team id:</label> <br />

   <input type="text" name="team_id" value="<?php echo $team_id;?>"/><br /> <br />

   <label>1e coureur id:</label> <br />

   <input type="text" name="1e_coureur" value="<?php echo $coureur1;?>"/><br /> <br />
   
   <label>2e coureur</label> <br />
   
   <input type="text" name="2e_coureur" value="<?php echo $coureur2;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>