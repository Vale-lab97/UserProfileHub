
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>inserisci utente</title>
</head>
<body>
    
    <h1 class="titolo-insert-user">Inserisci utente</h1>
    <p class="paragrafo-insert-user">Qui potrai inserire un utente all'interno del database</p>
    <form action="inserisci_utente.php" method="POST" class="form-insert-user">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="cognome" placeholder="cognome">
        <input type="text" name="via" placeholder="via">
        <br><br>
        <input type="submit" name="invia dati" value="inserisci utente">
        <input type="reset" name="pulisci dati" value="cancella">
        <a href="index.php" class="btn-a-back">Torna alla gestione utenti</a>
    </form>
</body>
</html>