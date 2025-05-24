<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
try{
    $db=new PDO("mysql:host=localhost;dbname=formule1", "root", "");
//echo "Verbinding gelukt!";
}catch(PDOException $e){

die("Fout!:".$e-> getMessage());}
?>
</BODY>
</HTML>