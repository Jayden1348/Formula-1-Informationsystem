<HTML>
<HEAD>
 <TITLE>functie  verwijderen</TITLE>
  <link rel="stylesheet" type="text/css" href="bier.css">
</HEAD>
<BODY>
<?php
include 'menu_functies.html';
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



 $functie_id=$_GET['functie_id'];
 $query=$db->prepare("delete from functies where functie_id='$functie_id'");

 $query->execute();

echo "<div class='extra'>Het item is verwijderd.</div>";
 

?>

</BODY>
</HTML>