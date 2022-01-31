<?php
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


$newArray = [];
$i = 0;
$max = 15;

while($i < count($max)){
    $number = rand(1, 20);
    !in_array($number, $newArray);
    $i++;

//     if (!in_array($number, $newArray)) {
//         $newArray[] = $number;
       
//     }

    var_dump($newArray);
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
    <p>
        <?php
            var_dump($newArray)
        ?>
    </p>
</body>
</html>