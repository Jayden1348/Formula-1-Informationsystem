<HTML>
<HEAD>
 <TITLE>Update Personeel</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_personeel.html';
include 'dbconnect.php';

$team_id = $_POST['team_id'];
$naam = $_POST['naam'];
$geboortedatum = $_POST['geboortedatum'];
$functie_id = $_POST['functie_id'];
$personeel_id = $_POST['personeel_id'];
    
    $query=$db->prepare("update personeel set team_id='$team_id',naam='$naam',geboortedatum='$geboortedatum',functie_id='$functie_id',personeel_id='$personeel_id' where personeel_id='$personeel_id' " );
$query->execute();

    
           header('location: personeelaanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>