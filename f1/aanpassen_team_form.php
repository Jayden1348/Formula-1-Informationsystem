<HTML>
<HEAD>
 <TITLE>Team aanpassen</TITLE>

</HEAD>
<BODY>

<?php
session_start();

include 'menu_teams.html';
include 'dbconnect.php';

     $team_id=$_GET['team_id'];
$query=$db->prepare("select * from teams where team_id='$team_id'" );
$query->execute();
  $result= $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($result as &$data){



    $team_id = $data['team_id'];
    $teamnaam = $data['Teamnaam'];
    $nationaliteit = $data['Nationaliteit'];
}


?>
<form method="post"action="update_team.php">
   <label>Team id:</label> <br />

   <input type="text" name="team_id" value="<?php echo $team_id;?>"/><br /> <br />
   
   <label>Teamnaam:</label> <br />

   <input type="text" name="teamnaam" value="<?php echo $teamnaam;?>"/><br /> <br />
   
   <label>Nationaliteit:</label> <br />

   <input type="text" name="nationaliteit" value="<?php echo $nationaliteit;?>"/><br /> <br />
   
   <input type="submit" name="verzenden"
   value= "Opslaan"/>
   </form>
</BODY>
</HTML>
