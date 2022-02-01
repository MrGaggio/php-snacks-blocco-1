<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->



<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>

<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
        <div class="grey">
            <?php 

                // cicla direttamente su db['teacher']
                foreach ($db['teachers'] as $key => $teacher) {
                    echo ("<h2>".$teacher['name']."</h2>" . "<h2>".$teacher['lastname']."</h2>");
                }
            ?>
        </div>
                <div class="red">
                    <?php
                    foreach ($db['pm'] as $key => $pm) {
                        echo ("<h2>".$pm['name']."</h2>" . "<h2>" .$pm['lastname']."</h2>");
                    }
                    ?>
                </div>

</body>
</html>