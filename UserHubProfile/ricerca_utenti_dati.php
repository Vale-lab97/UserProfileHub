<style>
    <?php include 'style.css'; ?>
    
</style>

<?php
include 'dbConnection.php';

// Recupera il nome utente dalla richiesta POST
$cerca = $_POST["cerca"];

// Query di ricerca degli utenti
$query = "SELECT * FROM utenti WHERE nome LIKE '$cerca'";
$result = mysqli_query($dblink, $query);

if (!$result) {
	die("Errore nella query $query: " . mysqli_error($dblink));
}
$numero = mysqli_num_rows($result);
$num=0;

while($row=mysqli_fetch_array($result)){
	$num++;	
	echo "<br>"."ID: " . $row["ID"] . "<br>"."Nome: " . $row["Nome"] .
	 "<br>"."Cognome: " . $row["Cognome"] . "<br>"."Via: " .$row["Via"]. "<br>";
}

mysqli_close($dblink);
echo "<a href =index.php>Torna alla gestione utenti</a>"
?>
