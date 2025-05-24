<HTML>
<HEAD>
 <TITLE>Update Functies</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_functies.html';
include 'dbconnect.php';

    $functie_id = $_POST['functie_id'];
    $functie = $_POST['functie'];
    
    $query=$db->prepare("update functies set functie_id='$functie_id',functie='$functie' where functie_id='$functie_id' " );
$query->execute();

    
           header('location: functies_aanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>
