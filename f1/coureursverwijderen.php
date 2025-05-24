<HTML>
<HEAD>
 <TITLE>Coureurs verwijderen</TITLE>
  <link rel="stylesheet" type="text/css" href="bier.css">
</HEAD>
<BODY>
<?php
include 'menu_coureurs.html';
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



 $coureur_id=$_GET['Coureur_id'];
 $query=$db->prepare("delete from coureurs where Coureur_id='$coureur_id'");

 $query->execute();

echo "<div class='extra'>Het item is verwijderd.</div>";
 

?>

</BODY>
</HTML>