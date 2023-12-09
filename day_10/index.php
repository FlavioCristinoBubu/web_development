<?php
include('function.php');
$dados = select_tabela('t_estudante');

// foreach($dados as $a){
//     echo $a['naran_estudante'].'<br>';
    
// }

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>
    <h1>Lista Estudante</h1>

    <p><a href="materia.php">Lista Materia</a></p>
    

    <table border="1">
        <thead>
            <td>No</td>
            <td>Naran Estudante</td>
            <td>Sexo</td>
            <td>Data Moris</td>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($dados as $a){
            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $a['naran_estudante']?></td>
                <td><?= $a['sexo']?></td>
                <td><?= $a['data_moris']?></td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    
        
        
    ?>
</body>
</html>