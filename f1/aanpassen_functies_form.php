<HTML>
<HEAD>
 <TITLE>Functies aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_functies.html';
include 'dbconnect.php';

     $functie_id=$_GET['functie_id'];
$query=$db->prepare("select * from functies where functie_id='$functie_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){



    $functie_id = $data['functie_id'];
    $functie = $data['functie'];
}


?>
<form method="post"action="update_functies.php">
   <label>Functie id:</label> <br />

   <input type="text" name="functie_id" value="<?php echo $functie_id;?>"/><br /> <br />
   
   <label>Functie :</label> <br />

   <input type="text" name="functie" value="<?php echo $functie;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>
