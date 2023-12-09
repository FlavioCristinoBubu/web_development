<?php
// 1. Arithmetic (+-x %)
// $X=11;
// $y= 2;
// echo $X * $y;

// 2. concanate
//$naran ="Flavio"

// 3. Assigment
// $dados=50;
// $dados=.10;
// 4. comparassion

/*
T && T=T
T && T=F
F && T=F
F && F =F
*/
// $x=6;
// var_dump($x < 10 && $x + 2 ==8 );


// T||T=T
// T||F=T
// F||T=T
// F||F=F


// $x =4;
// var_dump($x < 10 && $x +2 == 8);

// Repetition

// for($i =1; $i <= 10; $i++){
//     echo $i."Diak ka Lae<br>";
// }
// while($i <= 10){
//     echo "Flavio<br>";
//     $i++;
// }

// do while
// $k = 1;
// do{
//     echo "Sarra Tilman <br>I Love You<br> Flavio<br>";
//     $k++;
// }while ($k <= 10);

// 1.4 Foreach : sei aprende

// Condition :
// If else
// $idade= 20;
// if($idade<=17){//0-17
// echo"Labele Namora lai, Ama siak";
// }else if($idade >"&&"$idade <=24){// 18 - 24
//     echo "bele maibe hafuhu malu hela";
// }else{
//     echo "Bele ona, Tanba tuan ona";//25 ba leten
// }

// Ternary
// $sexo = "M";
// $a =($sexo== "M")? "Sr." : "Sra.";
// echo "Flavio Cristino Bubu $a";
  
// Switch
// $loron =date("l");
// switch($loron){
//     case "Sunday";
//     echo "Domingo ".date("d-M-Y");
//     break;
// case "Monday":
//     echo "Segunda-feira";
//     break;
// case "Tuesday":
//     echo "Tersa-feira";
//     break;
// case "Wednesday":
//     echo "Kuarta - feira";
//     break;
// case "Thursday":
//     echo "Kinta-feira";
//     break;
// case "Wdnesday":
//     echo "Sesta - feira";
//     break;
// case "Friday":
//     echo "Sesta-feira"
// }
$valor = "";
switch($valor){
    case "A":
    case "B":
    case "C": 
        echo "PASSA";
        break;
    case "D":
        echo "RECURSO";
        break;
    case "E":
        echo "LA PASSA";
        break;
    default:
    echo "LA EZISTE";
    break;  
    
}



?>