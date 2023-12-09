
<!DOCTYPE html>
<html lang="en">
<head>
    <title>KALKULATOR</title>
</head>
<body>
    <div class ="kalkulator">
        <form action "" method="$_GET">
        <h2 class="judul">KALKULATOR</h2>
        <input type "text" name "num1" autocomplete="off" placebolder="hakerek num">
        <p>
        <input type "text" name "num2" autocomplete="off" placebolder="hakerek num ">
        <p>
        <input type="submit" name="tambah" value= "+">
        <input type="submit" name="kurang" value="-">
        <input type="submit" name="kali" value="*">
        <input type="submit" name="bagi" value="/">
        </form>
    
</body>
</html>

<?php
$num1=$_GET["num1"];
$num2=$_GET["num2"];

if (isset($_GET['tambah'])) {
    $rejultadu=TAMBAH (num1,num2);
}

if (isset($_GET['kurang'])) {
    $rejultadu=KURANG (num1,num2);
}

if (isset($_GET['kali'])) {
    $rejultadu=KALI (num1,num2);
}

if (isset($_GET['bagi'])) {
    $rejultadu=BAGI (num1,num2);
}

function TAMBAH ($num1,$num2){
    return $num1+$num2;
}

function KURANG ($num1,$num2){
    return $num1-$num2;
}

function KALI ($num1,$num2){
    return $num1*$num2;
}

function BAGI ($num1,$num2){
    return $num1/$num2; 
}

?>
<html>
<input type ="text" value="<?php echo $rejultadu; ?>">
</html>

