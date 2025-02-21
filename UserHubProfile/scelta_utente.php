<style>
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scegli utente</title>
</head>
<body>
    <h1 class="scelta-titolo">Scegli utente da modificare</h1>
    <p class="scelta-paragrafo">Scegli un'utente da modificare dal menù a tendina:</p>
    <form action="modifica_dati_utente.php" class="scelta-form" method="POST">
        <?php
        include 'dbConnection.php';
        $query = "SELECT * FROM utenti";
        $result = mysqli_query($dblink, $query);

        if($result == FALSE){
            die("Errore nella query $query: " . mysqli_error($dblink));
        }

        echo "<select name ='utente_da_modificare' class='btn-select-user'>";
        while($row=mysqli_fetch_array($result)){
            /* MEMORIZZO DATI UTENTE  */
            $ID = $row ['ID'];
            $nome = $row['Nome'];
            $cognome = $row['Cognome'];
            $via = $row['Via'];

            echo " <option value ='$ID'> 
            $nome $cognome $via</option>";
        }
        echo "</select>";
        echo "<input type ='submit' value='Modifica utente'class='scelta-btn'> <br>";
        echo " <a class='btn-back-scelta' href='index.php'>Torna alla gestione utenti</a>";
        mysqli_close($dblink);
    ?>
    </form>
</body>
</html>

