<HTML>
<HEAD>
 <TITLE>Update Seizoenen</TITLE>

</HEAD>
<BODY>


<?php
include 'menu_seizoenen.html';
include 'dbconnect.php';

$seizoen_id = $_POST['seizoen_id'];
$seizoennummer = $_POST['seizoennummer'];
$kampioen_id = $_POST['kampioen_id'];
$aantalraces = $_POST['aantalraces'];
$constructeurskampioen_id = $_POST['constructeurkampioen_id'];
    
    $query=$db->prepare("update seizoenen set seizoen_id='$seizoen_id',seizoennummer='$seizoennummer',kampioen_id='$kampioen_id',aantalraces='$aantalraces',constructeurkampioen_id='$constructeurskampioen_id' where seizoen_id='$seizoen_id' " );
$query->execute();

    
           header('location: seizoenenaanpassen.php');   // na de query weer doorsturen naar    aanpassen

       ?>

</BODY>
</HTML>