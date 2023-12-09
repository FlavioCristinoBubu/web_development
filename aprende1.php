<?php


$estudante =[
    

    [
        'naran' => 'Jonas',
        'tinan' => '21', 
        'sexo' =>'M',
        'Hela_fatin' => 'Bidau'
    ],
    [

        'sexo' => 'M',
        'naran' => 'Flavio', 
        'tinan' => 21, 
        'Hela_fatin' => 'Hera'

        




    ],
];

$naran ='Flavio';

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Aprende GET</title>
</head>
<body>
    <h1>Pajina 1</h1>
    <?php foreach ($estudante as $x):?>
        <ul>
    <a href="aprende2.php?naran=<?= $naran; ?>">Kliik iha nee</a>
        <?php endforeach; ?>
</body>
</html>
