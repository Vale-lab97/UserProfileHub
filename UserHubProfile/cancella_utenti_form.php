<style>
    <?php include 'style.css'; ?>
    
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancella pullman</title>
</head>
<body>
    <h1 class="delete-user">Elimina utente da database</h1>
    <p class="p-delete-user">Scegli l'utente da eliminare dal menù a tendina:</p>
    <form action="cancella_utenti.php" method="POST" class="form-delete">
        <?php
            include 'dbConnection.php';

            $query ="SELECT * FROM utenti";
            $result = mysqli_query($dblink, $query);
            if($result == FALSE){
                die("Errore nella query $query: " . mysqli_error($dblink));
            }
            echo "<select name ='utente_da_eliminare' class='btn-select-user'>";
            while($row=mysqli_fetch_array($result)){
                /* MEMORIZZO DATI UTENTI */ 
                $ID = $row ['ID'];
                $nome = $row['Nome'];
                $cognome = $row['Cognome'];
                $via = $row['Via'];
                echo " <option value ='$ID'> 
                $nome  $cognome $via</option>";
            }
            echo "</select>";

            echo "</form>";

            echo "<input type ='submit' value='Elimina utente' class='btn-delete-user'><br>";
            echo "<a class='btn-back-user' href='index.php'>Torna alla gestione utenti</a'><br>";
            mysqli_close($dblink);
            ?>
        </form>

</body>
</html>

