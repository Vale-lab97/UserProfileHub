<style>
    <?php include 'style.css'; ?>
    
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elimina utente</title>
</head>

<?php
include 'dbConnection.php';
/* RECUPERO L'ID DELL'UTENTE DAL FORM CREATO  */
$ID = $_POST['utente_da_eliminare'];
if (isset($_POST['utente_da_eliminare'])) {
    $ID = $_POST['utente_da_eliminare'];
} 

$query = "DELETE FROM utenti WHERE ID = $ID;";

$result = mysqli_query($dblink, $query);
if($result == FALSE){
    die("Errore nella query $query: " . mysqli_error($dblink));
}else{
    echo ("Hai eliminato l'utente numero $ID , correttamente!");
}
mysqli_close($dblink);
?>
<body>
<a href="index.php">Torna a gestione utenti</a>
</body>
</html>