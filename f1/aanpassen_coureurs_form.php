<HTML>
<HEAD>
 <TITLE>Coureurs aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_coureurs.html';
include 'dbconnect.php';

     $coureur_id=$_GET['Coureur_id'];
$query=$db->prepare("select * from coureurs where Coureur_id='$coureur_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){


     $naam = $data['Naam'];
    $nationaliteit = $data['Nationaliteit'];
    $startnummer = $data['Startnummer'];
    $geboortedatum = $data['Geboortedatum'];
    $coureur_id = $data['Coureur_id'];
}


?>
<form method="post"action="update_coureurs.php">
   <label>Naam:</label> <br />

   <input type="text" name="Naam" value="<?php echo $naam;?>"/><br /> <br />
   
   <label>Nationaliteit:</label> <br />

   <input type="text" name="Nationaliteit" value="<?php echo $nationaliteit;?>"/><br /> <br />
   
   <label>Startnummer:</label> <br />

   <input type="text" name="Startnummer" value="<?php echo $startnummer;?>"/><br /> <br />

   <label>Geboortedatum:</label> <br />

   <input type="date" name="Geboortedatum" value="<?php echo $geboortedatum;?>"/><br /> <br />

   <label>Coureur id:</label> <br />

<input type="text" name="Coureur_id" value="<?php echo $coureur_id;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>