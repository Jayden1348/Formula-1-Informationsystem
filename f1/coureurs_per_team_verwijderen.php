<HTML>
<HEAD>
 <TITLE>Coureur per team verwijderen</TITLE>
  <link rel="stylesheet" type="text/css" href="bier.css">
</HEAD>
<BODY>
<?php
include 'menu_coureurs_per_team.html';
include 'dbconnect.php';
?>
<script>

  confirm("Weet je het zeker?")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }


</script>


<?php



 $cpt_id=$_GET['cpt_id'];
 $query=$db->prepare("delete from coureurs_per_team where cpt_id='$cpt_id'");

 $query->execute();

echo "<div class='extra'>Het item is verwijderd.</div>";
 

?>

</BODY>
</HTML>
