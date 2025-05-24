<HTML>
<HEAD>
 <TITLE>Wereldkampioen verwijderen</TITLE>
  <link rel="stylesheet" type="text/css" href="bier.css">
</HEAD>
<BODY>
<?php
include 'menu_wereldkampioenen.html';
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



 $kampioen_id=$_GET['kampioen_id'];
 $query=$db->prepare("delete from wereldkampioen where kampioen_id='$kampioen_id'");

 $query->execute();

echo "<div class='extra'>Het item is verwijderd.</div>";
 

?>

</BODY>
</HTML>
