<HTML>
<HEAD>
 <TITLE>Constructeurskampioen aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_constructeurskampioen.html';
include 'dbconnect.php';

     $constructeurskampioen_id=$_GET['constructeurskampioen_id'];
$query=$db->prepare("select * from constructeurskampioen where constructeurskampioen_id='$constructeurskampioen_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){



    $constructeurskampioen_id = $data['constructeurskampioen_id'];
    $team_id = $data['team_id'];

}


?>
<form method="post"action="update_constructeurskampioen.php">
   <label>Constructeurskampioen id:</label> <br />

   <input type="text" name="constructeurskampioen_id" value="<?php echo $constructeurskampioen_id;?>"/><br /> <br />
   
   <label>Team id:</label> <br />

   <input type="text" name="team_id" value="<?php echo $team_id;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>