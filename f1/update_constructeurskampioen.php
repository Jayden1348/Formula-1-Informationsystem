<HTML>
<HEAD>
 <TITLE>Update Constructeurskampioen</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_constructeurskampioen.html';
include 'dbconnect.php';

    $constructeurskampioen_id = $_POST['constructeurskampioen_id'];
    $team_id = $_POST['team_id'];

    
    $query=$db->prepare("update constructeurskampioen set constructeurskampioen_id='$constructeurskampioen_id',team_id='$team_id' where constructeurskampioen_id='$constructeurskampioen_id' " );
$query->execute();

    
           header('location: constructeurskampioen_aanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>
