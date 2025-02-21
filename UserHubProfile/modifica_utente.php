<style>
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica utente </title>
</head>
<body>
    <?php
        include 'dbConnection.php';
        $ID = $_POST ['ID'];
        $nome = $_POST['Nome'];
        $cognome = $_POST['Cognome'];
        $via = $_POST['Via'];


        $query = "UPDATE utenti 
        SET Nome = '$nome',
        Cognome= '$cognome' , 
        Via = '$via'
        WHERE ID = $ID";

        $result = mysqli_query($dblink, $query);

        if ($result == FALSE) {
            die("Errore nella query $query: " . mysqli_error($dblink));
        }
        else{
            echo "Dato aggiornato correttamente!";
        }
        mysqli_close($dblink);
    
    ?>
    <br>
    <a href="index.php">Torna alla gestione utenti</a>
</body>
</html>
