<HTML>
<HEAD>
 <TITLE>Constructeurskampioen verwijderen</TITLE>
  <link rel="stylesheet" type="text/css" href="bier.css">
</HEAD>
<BODY>
<?php
include 'menu_constructeurskampioen.html';
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



 $constructeurskampioen_id=$_GET['constructeurskampioen_id'];
 $query=$db->prepare("delete from constructeurskampioen where constructeurskampioen_id='$constructeurskampioen_id'");

 $query->execute();

echo "<div class='extra'>Het item is verwijderd.</div>";
 

?>

</BODY>
</HTML>