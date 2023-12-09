<?php

// / user define Function

function koko(){
echo 'Diak ka lae';

}
// koko();

// Function Parameter
// function soma($a, $b){
//     $c = $a + $b;
//     echo $c;
// }
// soma(162, 456);


function soma($a, $b){  
    $c = $a + $b;
    return $c;
}
// echo soma (162, 325);

// Funcao ho Default parametro

function halokafe($type = "cappucino")
{
    return "Halo kafe ida konaba $type.";
}
// echo halokafe(); // halo kafe ida konaba cappucino.
echo halokafe("Torabica"); // halo kafe ida konaba cappucino.





?>