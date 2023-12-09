<?php
include('koneksaun.php');
$kon = koneksaun();

// Querry
$query = "SELECT * FROM t_estudante";

// Prepare no Excecute
$sql = $kon->prepare($query);

$resultado = $sql->fetchALL(PDO::FETCH_ASSOC)
@var arrayfalse $resultado
$resultado =$sql->fetchALL(PDO::FETCH_ASSOC);

foreach($resultado as $a){
    echo $a['naran_estudante'].'<br>';
}



?>