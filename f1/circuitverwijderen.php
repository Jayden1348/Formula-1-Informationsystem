<HTML>
<HEAD>
 <TITLE>Circuit verwijderen</TITLE>
  <link rel="stylesheet" type="text/css" href="bier.css">
</HEAD>
<BODY>
<?php
include 'menu_circuits.html';
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



 $circuit_id=$_GET['circuit_id'];
 $query=$db->prepare("delete from circuit where circuit_id='$circuit_id'");

 $query->execute();

echo "<div class='extra'>Het item is verwijderd.</div>";
 

?>

</BODY>
</HTML>
