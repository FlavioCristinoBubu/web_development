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

if (!isset($_GET['naran'])){
    header("Location: aprende1.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aprende GET</title>
</head>
<body>
    <h1>Bemvindo Admin <?=$_GET['naran'];?></h1>
    <a href="aprende1.php">Back</a>
</body>
</html>