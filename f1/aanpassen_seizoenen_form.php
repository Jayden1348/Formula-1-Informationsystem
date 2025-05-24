<HTML>
<HEAD>
 <TITLE>Seizoenen aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_seizoenen.html';
include 'dbconnect.php';

     $seizoen_id=$_GET['seizoen_id'];
$query=$db->prepare("select * from seizoenen where seizoen_id='$seizoen_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){



    $seizoen_id = $data['seizoen_id'];
    $seizoennummer = $data['seizoennummer'];
    $kampioen_id = $data['kampioen_id'];
    $aantalraces = $data['aantalraces'];
    $constructeurskampioen_id = $data['constructeurkampioen_id'];
}


?>
<form method="post"action="update_seizoenen.php">
   <label>Seizoen id:</label> <br />

   <input type="text" name="seizoen_id" value="<?php echo $seizoen_id;?>"/><br /> <br />
   
   <label>Seizoennummer</label> <br />

   <input type="text" name="seizoennummer" value="<?php echo $seizoennummer;?>"/><br /> <br />
   
   <label>Kampioen id:</label> <br />

   <input type="text" name="kampioen_id" value="<?php echo $kampioen_id;?>"/><br /> <br />
   
   <label>Aantalraces:</label> <br />

   <input type="text" name="aantalraces" value="<?php echo $aantalraces;?>"/><br /> <br />
   
   <label>Constructeurskampioen id:</label> <br />

   <input type="text" name="constructeurkampioen_id" value="<?php echo $constructeurskampioen_id;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>