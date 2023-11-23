<?php

include __DIR__ . '/function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class='container'>
        <div class='form-section'>
            <p>Inserisci la lunghezza della password</p>
            <form action="" method="get">
                <input type="number" name="passwordLen" id="">
                <input type="submit" value="invia">
            </form>
            <p> La tua password è: </p>
            <p class='password-color'> <?php echo getRandomPassword($password) ?> </p>
        </div>
    </div>
</body>
</html>
