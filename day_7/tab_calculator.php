
<?php
if(isset($_POST['calculator'])){
    $num1 = $_POST['nuum1'];
    $num2 = $_POST['nuum2'];
    $oper = $_POST['operator'];

    if(is_numeric($num1) && is_numeric(num2)){
        // include('../function.php');
        $cal = operator($num1, $num2, $oper);
        $rejultado ="Ressultadu husi $num1 $oper $num2=$cal";
    
    } else {
        $rejultado ='Dados laos numeric';

    }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini calculator</title>
</head>
<body>

<h1>Mini calculator</h1>
<form action "" method "post">
    <ul>
        <li>
            <label for ="num1">Numeru 1 : </label>
            <input type="text" name="num1" id="num1" placeholder="ense numeru1">
        </li>
        <li>
            <label for ="operator">operator : </label>
            <select name="operator" id="operator">
                <option value="" selected hidden>hili operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </li>
        <li>
            <label for="num2">Numeru 2: <?label>
            <input type="text" name2= id="num2" placeholder="ense numeru 2">
        </li>
        <li>
            <input type="submit" name="calcular">
        </li>
        <h4>
        <?= isset($rejultado) ? $rejultado : ''?>
        </h4>
    </ul>


</form>
</body>
</html>