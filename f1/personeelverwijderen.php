<HTML>
<HEAD>
 <TITLE>Personeel verwijderen</TITLE>

</HEAD>
<BODY>

<?php
include 'menu_personeel.html';
include 'dbconnect.php';
?>

<?php
$personeel_id=$_GET['personeel_id'];
$query=$db->prepare("delete from personeel where personeel_id ='$personeel_id'");

$query->execute();

echo "<div class='extra'>Het item is verwijderd.</div>";


?>  
   
</script>




</BODY>
</HTML>