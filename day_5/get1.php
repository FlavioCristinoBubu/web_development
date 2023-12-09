<?php

$estudante= [

[

'naran' => 'Flavio',
'sexo' => 'M',
'tinan' => 21,
'hela_fatin' => 'Becora'
],

[

    'naran' => 'Rui',
    'sexo' => 'M',
    'tinan' => 24,
    'hela_fatin' => 'Kampung Alor'
],
 [

    'naran' => 'Jana',
    'sexo' => 'F',
    'tinan' => 20,
    'hela_fatin' => 'Taibese'
 ],
 [

    'naran' => 'Lujida',
    'sexo' => 'F',
    'tinan' => 22,
    'hela_fatin' => 'Hera'
 ],

 [

    'naran' => 'Armando',
    'sexo' => 'M',
    'tinan' => 20,
    'hela_fatin' => 'Comoro'
 ]

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Aprende konaba GET</title>
</head>
<body>
    <h1>Aprende GET</h1>
    <ul>
        <?php foreach($estudante as $x) {?>
            <li>
                <a href="get.php?naran=<?=$x['naran']?>&sexo=<?= $x['sexo']?><?=$x['tinan']?><?=$x['hela_fatin']?>">
                    <?=$x['naran']?>
                </a>
            </li>
            <?php }?>


</body>
</html>