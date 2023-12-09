<?php
// array
// $naran=arrray("Maria","Flavio","Antonio");
// $naran=["Maria","Flavio Cristino Bubu","Antonio Lafo Caunan","Joanita Orlanda Bubu","Manuel Da Costa Pires",];
// var_dump($naran);
// echo $naran[2];

// foreach($naran as $x){
// echo $x."<br>";
// }

// for($i=1; $i < count($naran); $i++){
    // echo $naran[$i]."<br>"
// }

//Multidimentional Array
$estudante = [

    ['Flavio','26','M', 'Bidau'],
    ['Antonio','21','M', 'Hera'],
    ['Horacio','25','M', 'Palaban'],
    ['Flavio','26','M', 'Lifau'],
];
    // 00  01  02  03
    // 10  11  12  13
    // 20  21  22  23
    // 30  31  32  33

// var_dump($estudante);
// echo $estudante[2][1];
foreach($estudante as $x){
    // echo$x[0]."<br>";
    echo"Naran  : ".$x[0]."<br>";
    echo"Tinan  : ".$x[1]."<br>";
    echo"Sexo  : ".$x[2]."<br>" ;
    echo"Hela Fatin  : ".$x[3]."<br>";
    echo"_ _ _ _ _ _ _ _ <br>";
} 

// Associative array
// String
$estudante =[
    

    [
        'naran' => 'Jonas',
        'tinan' => '21', 
        'sexo' =>'M',
        'Hela_fatin' => 'Hera'
    ],
    [

        'sexo' => 'Flavio',
        'naran' => '21', 
        'tinan' => 'M', 
        'Hela_fatin' => 'Hera' 
    ],
];
?>