<?php
// ## Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
// ## Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
// Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
// ## Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
// ## Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

// SNACK2

// Passare come parametri GET name, mail e age 
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$prova = '';

// che name sia più lungo di 3 caratteri
// che mail contenga un punto e una chiocciola
// che age sia un numero

if (strlen($name) > 3 ){

} if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {

} if (is_numeric($age)) {
    //stampa accesso riuscito
    $message = 'Accesso Riuscito';
} else {
    // stampa accesso non riuscito
    $message = 'Accesso non Riuscito';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p><?php echo $message; ?></p>
    
</body>
</html>