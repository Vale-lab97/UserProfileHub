
<style>
    <?php include 'style.css'; ?>
    
</style>
<?php

include 'dbConnection.php';

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$via = $_POST['via'];


if(isset($_POST['nome']) && $_POST['cognome']){
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
}
if(isset($_POST ['eta'])){
    $eta = $_POST['eta'];
}
$query = "INSERT INTO utenti (Nome , Cognome , Via) 
VALUES ('$nome', '$cognome', '$via')";
$result = mysqli_query($dblink, $query);

if ($result == TRUE) {
    echo "Dato inserito correttamente!";
}
else{
    die("Errore nella query $query: " . mysqli_error($dblink));
}


mysqli_close($dblink);
echo "<br>"."<a href=index.php>Torna alla gestione utenti</a>";
?>
