<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati per modifica </title>
</head>
<body>
<?php
    
        include 'dbConnection.php';
        /* RECUPERO L'ID DELL'UTENTE DAL FORM CREATO  */
        $ID = $_POST['utente_da_modificare'];
        
        if(isset($_POST['utente_da_modificare'])){
            $ID = $_POST['utente_da_modificare'];
        }

        $query = "SELECT *  FROM utenti WHERE ID = $ID;";

        $result = mysqli_query($dblink, $query);

        if($result == FALSE){
            die("Errore nella query $query: " . mysqli_error($dblink));
        }

        $row=$result->fetch_array();
        $nome = $row['Nome'];
        $cognome = $row['Cognome'];
        $via = $row['Via'];

        mysqli_close($dblink);
    
?>
<h2>Modifica i dati dell'utente</h2>
<p>Compila il form con i nuovi dati</p>
<form action="modifica_utente.php" method="POST">
    <input type="hidden" name="ID" value="<?php echo $ID; ?>">
    Nome : <input type="text" name="Nome" value="<?php echo $nome; ?>"> <br>
    Cognome : <input type="text" name="Cognome" value="<?php echo $cognome; ?>"> <br>
    Via : <input type="text" name="Via" value="<?php echo $via; ?>"> <br>
    <input type ='submit' name ='invia_dati_modifica' value='Modifica i dati'>
    
</form>
</body>
</html>
