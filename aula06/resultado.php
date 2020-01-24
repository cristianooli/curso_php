<?php
$name = $_POST["name"];
$last_name = $_POST["last_name"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$operacao = $_POST["operacao"];

$last_name = $name . " " . $last_name;
//ou
//$last_name = "$name $last_name";

if ($operacao == "@") {
    $resultadoSoma = $n1 + $n2;
    $resultadoSub = $n1 - $n2;
    $resultadoMult = $n1 * $n2;
    $resultadoDiv = $n1 / $n2;
} else if ($operacao == "+" or $operacao == "-"or $operacao == "*" or$operacao == "/") {
    if ($operacao == "+") {
        $resultado = $n1 + $n2;
    } else
    if ($operacao == "-") {
        $resultado = $n1 - $n2;
    } else
    if ($operacao == "*") {
        $resultado = $n1 * $n2;
    } else
    if ($operacao == "/") {
        $resultado = $n1 / $n2;
    }
} else {
    $error = "Operador inválido";
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        if ($operacao == "@") {
            echo "Soma é " . $resultadoSoma."<br>";
            echo "Subtração é " . $resultadoSub."<br>";
            echo "Multiplicação é " . $resultadoMult."<br>";
            echo "Divisão é " . $resultadoDiv."<br>";
        } else {
            if ($operacao == "+" or $operacao == "-"or $operacao == "*" or$operacao == "/") {
                echo "O resultado é " . $resultado;
            } else {
                echo $error;
            }
        }
        ?>
    </body>
</html>

