<html>
<head>
    <link rel="stylesheet" href="login_menu.css">
</head>
<body>
<?php
session_start();

include 'dbconnect.php';



if(isset($_POST['inloggen'])) {
    $username = filter_input(INPUT_POST, "naam", FILTER_SANITIZE_STRING);
    $password = sha1($_POST['wachtwoord']);

    $query = $db->prepare("SELECT * FROM gebruikers 
                           WHERE naam = :user
                            AND wachtwoord = :pass");
    $query->bindParam("user", $username);
    $query->bindParam("pass", $password);
    $query->execute();

    if($query->rowCount() == 1) {
    echo "<font color=black><h1><a>U bent ingelogd</a></h1>";
      $_SESSION["login"]=TRUE; 
    
    } else {
        echo "<font color=black><h1><a>Onjuiste Gegevens!</a></h1>";
    } 
    echo "<br>";
  }


?>
<button class="button3"><a href="Hoofdmenu.html">Terug</a></button>

<form class='extra' method="post" action="">
<div class="main">
    <div class="left-side">
        <img src="inlogmenu.jpg">
    </div> 
    <div class="right-side">
        <hr><hr>
        <h1>Inloggen</h1>
        <div>
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Enter naam" name="naam" required>
        </div>
        <div>
            <i class="fas fa-key"></i>
            <input type="password" placeholder="Enter wachtwoord" name="wachtwoord" required>
        </div>
        <h6> &nbsp</h6>
        <button type="submit" name="inloggen" value="Inloggen">Log in</button>
        <h2> &nbsp</h2>
  
    </div>
</div>
</form>
</body>
</html>