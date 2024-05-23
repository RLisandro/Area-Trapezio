<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>

<body>
    <!--Escreva um algoritmo que receba três valores, 
    calcule e apresente a área de um trapézio.
"B → base maior do trapézio
b → base menor do trapézio
h → altura do trapézio"-->
    <label>
        <h1>Cálculo Trapézio</h1>
        <form method="POST">
            Base Maior: <input type="text" name="baseMaior"><br><br>
            Base Menor: <input type="text" name="baseMenor"><br><br>
            Altura: <input type="text" name="altura"><br><br>
            <input type="submit" value="Calcular"><br><br>
        </form>
    </label>

</body>
<?php
if (isset($_POST['baseMaior']) && isset($_POST['baseMenor']) && isset($_POST['altura'])) {
    $baseMaior = $_POST['baseMaior'];
    $baseMenor = $_POST['baseMenor'];
    $altura = $_POST['altura'];
    $area = ($baseMaior + $baseMenor) * $altura / 2;
    echo " A base maior do trapézio é $baseMaior" . " cm.<br><br>";
    echo " A base menor do trapézio é $baseMenor" . " cm.<br><br>";
    echo " A altura do trapézio é $altura" . " cm<br><br>";
    echo "A área do trapézio é  $area " . " cm².";
}
?>

</html>