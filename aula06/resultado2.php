<?php
$name = $_POST["name"];
$last_name = $_POST["last_name"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$operacao = $_POST["operacao"];

$last_name = $name . " " . $last_name;

// array assossiativo
$result_asso = array();
$result_asso['+'] = $n1 + $n2;
$result_asso['-'] = $n1 - $n2;
$result_asso['*'] = $n1 * $n2;
$result_asso['/'] = $n1 / $n2;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultado</title>
    </head>
    <body

        <?php
        if ($operacao == "@") {
            echo "passou aqui<br>";
            echo "Soma é "          .$result_asso['+']."<br>";
            echo "Subtração é "     .$result_asso['-']."<br>";
            echo "Multiplicação é " .$result_asso['*']."<br>";
            echo "Divisão é "       .$result_asso['/']."<br>";
        } else {
            if ($operacao == '+' or $operacao == "-"or $operacao == "*" or$operacao == "/") {
                echo "--<br>";
                echo "O resultado é " . $result_asso[$operacao]."<br>";
            } else {
                echo "Operador inválido<br>";
            }
        }
        ?>
    </body>
</html>

