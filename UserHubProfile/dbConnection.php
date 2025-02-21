<?php
$dbHostname = "localhost"; /*lavora in locale, identifica ip*/
$dbUsername = "root"; /*se non c'è nome utente, troviamo root*/
$dbPassword = "";
$dbName     = "db_userprofilehub";

$dblink = MYSQLI_CONNECT($dbHostname, $dbUsername, $dbPassword) OR DIE("Errore !! Impossibile connettersi al database");
/*scegli dove collegarsi*/
@mysqli_select_db($dblink,$dbName) or die( "Impossibile connettersi al database ".$dbName);











?>