<HTML>
<HEAD>
 <TITLE>Statistieken verwijderen</TITLE>

</HEAD>
<BODY>

<?php
include 'menu_statistieken.html';
include 'dbconnect.php';
?>

<?php
$coureur_id=$_GET['coureur_id'];
$query=$db->prepare("delete from statistieken where coureur_id ='$coureur_id'");

$query->execute();

echo "<div class='extra'>Het item is verwijderd.</div>";


?>  
   
</script>




</BODY>
</HTML>