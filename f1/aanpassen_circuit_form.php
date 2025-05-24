<HTML>
<HEAD>
 <TITLE>Circuit aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_circuits.html';
include 'dbconnect.php';

     $circuit_id=$_GET['circuit_id'];
$query=$db->prepare("select * from circuit where circuit_id='$circuit_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){



    $circuit_id = $data['circuit_id'];
    $circuitnaam = $data['Circuitnaam'];
    $land = $data['Land'];
    $plaats = $data['Plaats'];
}



?>
<form method="post"action="update_circuit.php">
   <label>Circuit id:</label> <br />

   <input type="text" name="circuit_id" value="<?php echo $circuit_id;?>"/><br /> <br />
   
   <label>Circuitnaam:</label> <br />

   <input type="text" name="circuitnaam" value="<?php echo $circuitnaam;?>"/><br /> <br />
   
   <label>Land:</label> <br />

   <input type="text" name="land" value="<?php echo $land;?>"/><br /> <br />

   <label>Plaats:</label> <br />

   <input type="text" name="plaats" value="<?php echo $plaats;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>