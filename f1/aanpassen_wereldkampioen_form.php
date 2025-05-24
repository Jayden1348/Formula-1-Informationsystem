<HTML>
<HEAD>
 <TITLE>Wereldkampioen aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_wereldkampioenen.html';
include 'dbconnect.php';

     $kampioen_id=$_GET['kampioen_id'];
$query=$db->prepare("select * from wereldkampioen where kampioen_id='$kampioen_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){



    $kampioen_id = $data['kampioen_id'];
    $coureur_id = $data['coureur_id'];
}


?>
<form method="post"action="update_wereldkampioen.php">
   <label>Kampioen id:</label> <br />

   <input type="text" name="kampioen_id" value="<?php echo $kampioen_id;?>"/><br /> <br />
   
   <label>Coureur id:</label> <br />

   <input type="text" name="coureur_id" value="<?php echo $coureur_id;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>
