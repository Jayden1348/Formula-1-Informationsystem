<HTML>
<HEAD>
 <TITLE>Update Circuits</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_circuits.html';
include 'dbconnect.php';

    $circuit_id = $_POST['circuit_id'];
    $circuitnaam = $_POST['circuitnaam'];
    $land = $_POST['land'];
    $plaats = $_POST['plaats'];
    
    $query=$db->prepare("update circuit set circuit_id='$circuit_id',circuitnaam='$circuitnaam',land='$land',plaats='$plaats' where circuit_id='$circuit_id' " );
$query->execute();

    
           header('location: circuit_aanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>
