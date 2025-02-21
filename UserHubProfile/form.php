<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Form</h1>
    <form action="invio-form.php" method="POST"> 
        
        <select name="SelezionaTaglia">
            <option>Seleziona la taglia </option>
            <option name="M">M</option>
            <option name="L">L</option>
            <option name="S">S</option>
            <option name ="XS">XS</option>
        </select>

        <select name="SelezionaNome">
            <option name="Mario">Mario </option>
            <option>Giuseppe </option>
        </select>

        <select name="SelezionaTaglia2">
            <option>Seleziona la taglia </option>
            <option name="M">M</option>
            <option name="L">L</option>
            <option name="S">S</option>
            <option name ="XS">XS</option>
        </select>
        <select name="SelezionaNome2">
            <option>Giuseppe </option>
            <option>Rinaldo </option>

        </select>

       <input type="submit" >
       
    </form>
</body>
</html>