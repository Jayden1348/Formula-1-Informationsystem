<HTML>
<HEAD>
 <TITLE>Update coureurs per team</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_coureurs_per_team.html';
include 'dbconnect.php';
    $cpt_id = $_POST['cpt_id'];
    $seizoen_id = $_POST['seizoen_id'];
    $team_id = $_POST['team_id'];
    $coureur1 = $_POST['1e_coureur'];
    $coureur2 = $_POST['2e_coureur'];
    
    $query=$db->prepare("update coureurs_per_team set cpt_id='$cpt_id', seizoen_id='$seizoen_id',team_id='$team_id',1e_coureur='$coureur1',2e_coureur='$coureur2' where cpt_id='$cpt_id' " );
$query->execute();

    
           header('location: coureurs_per_team_aanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>
