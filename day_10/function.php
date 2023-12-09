<?php
include('koneksaun.php');
$kon = koneksaun();
function select_tabela($naran_tabela){
    global $kon;

    $query ="SELECT * FROM $naran_tabela";
    // prepare no excucute
    $sql = $kon->prepare($query);
    $sql->execute();

    $resultado = $sql->fetchALL(PDO::FETCH_ASSOC);
    return $resultado;

}

?>