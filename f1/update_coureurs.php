<HTML>
<HEAD>
 <TITLE>Update Coureurs</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_coureurs.html';
include 'dbconnect.php';

    $naam = $_POST['Naam'];
    $nationaliteit = $_POST['Nationaliteit'];
    $startnummer = $_POST['Startnummer'];
    $geboortedatum = $_POST['Geboortedatum'];
    $coureur_id = $_POST['Coureur_id'];
    
    $query=$db->prepare("update coureurs set Naam='$naam',Nationaliteit='$nationaliteit',Startnummer='$startnummer',Geboortedatum='$geboortedatum',Coureur_id='$coureur_id' where Coureur_id='$coureur_id' " );
$query->execute();

    
           header ('location: coureurs_aanpassen.php' ) // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>
