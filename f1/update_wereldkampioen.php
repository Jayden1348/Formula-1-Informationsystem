<HTML>
<HEAD>
 <TITLE>Update Wereldkampioen</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_wereldkampioenen.html';
include 'dbconnect.php';

    $kampioen_id = $_POST['kampioen_id'];
    $coureur_id = $_POST['coureur_id'];
    
    $query=$db->prepare("update wereldkampioen set kampioen_id='$kampioen_id',coureur_id='$coureur_id' where kampioen_id='$kampioen_id' " );
$query->execute();

    
           header('location: wereldkampioen_aanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>
