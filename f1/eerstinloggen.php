<HTML>
<HEAD>
 <TITLE>Inloggen</TITLE>
  <link rel="stylesheet"  href="style_eerstinloggen.css">
</HEAD>
<BODY>	
<?php
session_start();
echo $_SESSION["inlog"];
//start de sessie, de sessie-variabele gaan we gebruiken om te kijken of er ingelogd is
// verbind met de database door het connectiebestand te importeren
// ook het bestand met het menu wordt geïmporteerd


include 'dbconnect.php';








if(isset($_POST['inloggen'])) {
    $username = filter_input(INPUT_POST, "naam", FILTER_SANITIZE_STRING);// eventuele extra code wordt weggehaald
    $password = sha1($_POST['wachtwoord']);// wachtwoord wordt versleuteld
   // hieronder wordt de gebruiker uit de database gehaald
   $query = $db->prepare("SELECT * FROM gebruikers 
                           WHERE naam = :user
                            AND wachtwoord = :pass");
    $query->bindParam("user", $username);
    $query->bindParam("pass", $password);
    $query->execute();
    // als er maar 1 rij gegevens wordt opgehaald, kloppen de gegevens
    if($query->rowCount() == 1) {
      
      $_SESSION["inlog"]= "waar"; 
      header ('location:hoofdmenu.html');
    } else {
      echo "Onjuiste gegevens!";
    } 
    echo "<br>";
  }
?>
<h2> U dient eerst in te loggen</h2>
<button class="button1" onclick="history.back()"><a>Ok</a></button>
<button class="button2" onclick="Login_menu.php"><a href="Login_menu.php">Naar inlogpagina</a></button>

</form>
</BODY>
</HTML>
