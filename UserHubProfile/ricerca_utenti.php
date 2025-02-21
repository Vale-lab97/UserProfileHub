
<style>
    <?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina iniziale</title>
</head>
<body>
    <h1 class="form-titolo">Ricerca utente</h1>
    <form action="ricerca_utenti_dati.php" class="form-search" method="POST">
        <label for="Nome">Inserisci nome utente</label> <!-- ETICHETTA -->
        <input type="text" name="cerca">
        <input type="reset" value="Pulisci i campi">
        <input type="submit" value="Invio dati">
    </form>
   <a class="btn-a-back" href="index.php">Torna alla gestione utenti</a>
</body>
</html>
