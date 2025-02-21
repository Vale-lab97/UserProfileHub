<style>
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="visualizza-titolo">Visualizza utente</h1>
</body>
</html>

<?php
include 'dbConnection.php';
$query = "SELECT * FROM utenti";
$result = mysqli_query($dblink, $query);

if ($result == FALSE) {
    die("Errore nella query $query: " . mysqli_error($dblink));
}

/* RISULTATI DELLA QUERY ALL'INTERNO DI UNA TABELLA */
echo "<table border='6' cellspacing='0' cellpadding ='16' class='visualizza-table'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Via</th>
        </tr>";

while($row=mysqli_fetch_array($result)){	
    echo "<tr>
        <td>".$row['ID']."</td>".
        "<td>".$row['Nome']."</td>".
        "<td>".$row['Cognome']."</td>".
        "<td>".$row['Via']."</td>".
    "</tr>";
}
echo "</table>";
mysqli_close($dblink);
echo "<br>"."<a class='visualizza-link' href=index.php>Torna alla gestione utenti</a>";
?>
