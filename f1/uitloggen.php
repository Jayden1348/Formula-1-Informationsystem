<HTML>
<HEAD>
 <TITLE>Insert met form</TITLE>
  <link rel="stylesheet" type="text/css" href="handleiding.css">
</HEAD>
<BODY>
<button class="button1" onclick="history.back()"><a>Terug</a></button>

<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();


include 'dbconnect.php';
  echo "<div><h1>U bent uitgelogd</div></div>";
 

?>

</BODY>
</HTML>