<?php

// var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<h2>Formulario Registrasaun Estudante FDCL nian : </h2>

<form action="" method="POST">
    <label>Naran kompletu :</label>
    <input type="text" name="naran">
    <br>

    <label>Sexo :</label>
    <select name="sexo">
        <option value="Mane">Mane</option>
        <option value="Feto">Feto</option>
    </select>
    <br>

    <label>Data_moris :</label>
    <input type="date" name="data_moris">
    <br>

    <label>Hela_fatin :</label>
    <textarea name="hela_fatin" cols="30" rows="1"></textarea>
    <br>

    <label>nu_telemovel :</label>
    <input type="text" name="nu_telemovel">
    <br>

    <label>e_mail :</label>
    <input type="text" name="E_mail">
    <br>

    <label>municipiu :</label>
    <input type="text" name="municipiu">
    <br>

    <button type="submit" name="haruka">Registu</Button>
    
    <?php if(isset($_POST['haruka']) ):?>
    <table border="1">/
        
    <thead>
        <th>Naran</th>
        <th>Sexo</th>
        <th>Data_moris</th>
        <th>Hela_fatin</th>
        <th>nu_telemovel</th>
        <th>E_mail</th>
        <th>municipiu</th>
    </head>
    <tbody>
        <td><?=$_POST['naran']?></td>
        <td><?=$_POST['sexo']?></td>
        <td><?=$_POST['data_moris']?></td>
        <td><?=$_POST['hela_fatin']?></td>
        <td><?=$_POST['nu_telemovel']?></td>
        <td><?=$_POST['E_mail']?></td>
        <td><?=$_POST['municipiu']?></td>

    </tbody>
    </table>

    <?php endif;?>
</form> 
</body>
</html>