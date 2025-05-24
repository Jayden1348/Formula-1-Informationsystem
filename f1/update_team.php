<HTML>
<HEAD>
 <TITLE>Update Teams</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_teams.html';
include 'dbconnect.php';

    $team_id = $_POST['team_id'];
    $teamnaam = $_POST['teamnaam'];
    $nationaliteit = $_POST['nationaliteit'];
    
    $query=$db->prepare("update teams set team_id='$team_id',teamnaam='$teamnaam',nationaliteit='$nationaliteit' where team_id='$team_id' " );
$query->execute();

    
           header('location: team_aanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>
