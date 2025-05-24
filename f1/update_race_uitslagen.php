<HTML>
<HEAD>
 <TITLE>Update Race uitslagen</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_race_uitslagen.html';
include 'dbconnect.php';

    $ru_id = $_POST['ru_id'];
    $race_id = $_POST['race_id'];
    $seizoen_id = $_POST['seizoen_id'];
    $circuit_id = $_POST['circuit_id'];
    $team_id = $_POST['team_id'];
    $coureur_id = $_POST['coureur_id'];
    $punten = $_POST['punten'];
    $sprintrace = $_POST['sprintrace'];
    
    $query=$db->prepare("update race_uitslagen set ru_id='$ru_id', race_id='$race_id', seizoen_id='$seizoen_id',circuit_id='$circuit_id',team_id='$team_id',coureur_id='$coureur_id',punten='$punten',sprintrace='$sprintrace' where ru_id='$ru_id' " );
$query->execute();

    
           header('location: race_uitslagen_aanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>
