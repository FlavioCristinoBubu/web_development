<?php 
include('function.php');
$dados = select_tabela('t_materia');

if (isset($_POST['gravar'])){
    if(!empty($_POST['materia']))
        $materia = $_POST['materia'];
        $resultadu = insert_materia($materia);
        header('Location: materia.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>
<?php if (!isset($_GET['insert'])) { ?>
<h1>Lista Materia</h1>

<p><a href="index.php">Lista Estudante</a></p>
<p><a href="materia.php?insert=true">Insert</a></p>

<table border="1">
    <thead>
        <td>No</td>
        <td>Materia</td>
    </thead>
    <tbody>
        <?php
        $no = 1; 
        foreach($dados as $a){
        ?>
        <tr>
            <td><?= $no++?></td>
            <td><?= $a['materia']?></td>
        </tr>
        <?php }?>
    </tbody>
</table>

</body>

<?php
    }
    if (isset($_GET['insert']) && $_GET['insert'] == 'true') {
    ?>

        <h2>Insert dados Materia</h2>
        <form action="materia.php" method="post">
            <ul>
                <li>
                    <label for="materia">Materia:</label>
                    <input type="text" name="materia" id="materia">
                </li>
                <li>
                    <button type="submit" name="gravar">Save</button>
                </li>
            </ul>
        </form>

    <?php
    }
    ?>


</html>
