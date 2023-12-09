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
        'Hela_fatin' => 'Hera'  -->

        




    ],
];

?>


// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <title>Table Estudante</title>
// </head>
// <body>
//     <h1>Tabela Estudante</h1>
//     <table border="1">
//     <thead>
//          <tr>
//             <th>Nu</th>
//             <th>Naran</th>
//             <th>Tinan</th>
//             <th>Hela Fatin</th>
//             <th>Sexo</th>
//         </tr>
// </thead>
// </tbody>
// <?php
$no=1;
foreach($estudante as $x) {?>
// <tr>
//     <td> <?= $no++;?></td>
//     <td> <?= $x['naran']?> </td>
//     <td> <?= $x['tinan']?> </td>
//     <td> <?= $x['Hela_fatin']?> </td>
//     <td> <?= $x['sexo']?> </td>
// </tr>
// <?php
}
?>
// </tbody>
// </table>
// </body>
// </html>