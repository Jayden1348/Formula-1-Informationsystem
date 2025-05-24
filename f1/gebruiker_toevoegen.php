<HTML>
<HEAD>
 <TITLE>Insert met form</TITLE>
  <link rel="stylesheet" href="login_menu.css">
</HEAD>
<BODY>


<?php
include 'dbconnect.php';
  
  if(isset($_POST['naam'])) {

    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];

    
  $query=$db->prepare( "INSERT INTO gebruikers(naam, wachtwoord)
       VALUES( '" . $naam . "' , '" .sha1( $wachtwoord ). "')");



       if( $query->execute()) {
     echo "<font color=black><h1><a>De nieuwe gegevens zijn toegevoegd</a></h1>";
          $naam = null;
          } else {
          echo "<font color=black><h1><a>Er is een fout ontstaan tijdens het toevoegen van de gegevens!</a></h1>";

          }
         echo "<br />";
       }
?>

<button class="button3"><a href="Hoofdmenu.html">Terug</a></button>

<form method="post" action="">
<div class="main">
    <div class="left-side">
        <img src="inlogmenu.jpg">
    </div> 
    <div class="right-side">
        <hr><hr>
        <h2>Nieuwe gebruiker</h2>
        <div>
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Enter naam" name="naam" required>
        </div>
        <div>
            <i class="fas fa-key"></i>
            <input type="password" placeholder="Enter wachtwoord" name="wachtwoord" required>
        </div>
        <h6> &nbsp</h6>
        <button type="submit" name="verzenden" value="Aanmaken">Aanmaken</button>
        <h2> &nbsp</h2>
  
    </div>
</div>
</BODY>
</HTML>