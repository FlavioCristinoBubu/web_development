<?php

// Built-in Function
// String Functions
// $originaliString="Helo, welcome";
// // echo strlen($originaliString) : //Output 13
// // echo str_relplace("World", "PHP,"$originaliStrin) : //Output : helo, PHP
// echo strtolwer($originaliString): // output : hello, world!
// echo strouper($originaliString) ://output : hello, world!
// echo ucfirst($originaliString) :


// Math Funtion
$number = -5.75;
echo abs($number); //output 5,75

$number=25;
// echo sqrt($number); //Output : 5
// echo round(4,5); //Output : 4
// echo pow(2, 3); //Output : 8
// echo cell(4,2); //Output : 5
// echo floor(4,8); //Output : 4


// echo rand(1, 10); //Output : Random number between 1 and 10
// echo mt_rand(1, 100); //Output : Random number between 1 and 100

// Date and Time Function :
// echo date('d-m-Y'); // Output : Current date and time in 'YYY-MM-DD'
// $timestamp =strtotime('next Sunday');
// echo date('Y-m-d',$timestamp); // Output : Current date and time in 'YYY-MM-DD'); // Output : Next Sunday

// File System Functions :
$file_nia_naran = 'file_koko.text';
// $kria_file = fopen($file_nia_naran, 'w'); // Hodi kria file 

$dados ='Diak ka lae bro';
file_put_contents($file_nia_naran, $dados);

$contens = file_get_contents($file_nia_naran, $dados);
echo $contens;


?>