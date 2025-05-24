<HTML>
<HEAD>
 <TITLE>Update Statistieken</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_statistieken.html';
include 'dbconnect.php';

    $coureur_id = $_POST['coureur_id'];
    $wins = $_POST['Wins'];
    $poles = $_POST['Poles'];
    $podiums = $_POST['Podiums'];
    $DNFs = $_POST['DNFs'];
    $races = $_POST['Races'];
    $seizoenen = $_POST['Seizoenen'];
    
    $query=$db->prepare("update statistieken set coureur_id='$coureur_id',Wins='$wins',Poles='$poles',Podiums='$podiums',DNFs='$DNFs',Races='$races',Seizoenen='$seizoenen' where coureur_id='$coureur_id' " );
$query->execute();

    
     header('location: statistiekenaanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>
