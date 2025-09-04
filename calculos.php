<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cal1 = $_POST["cal1"];
    $cal2 = $_POST["cal2"];
    $op = $_POST["calculo"];
    $resultado = 0;

    switch ($op) {
        case "+":
            $resultado = $cal1 + $cal2;
            break;
        case "-":
            $resultado = $cal1 - $cal2;
            break;
        case "*":
            $resultado = $cal1 * $cal2;
            break;
        case "/":
            if ($cal2 != 0) {
                $resultado = $cal1 / $cal2;
            } else {
                $resultado = "Error: División por cero";
            }
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }


    $binario = base_convert($resultado, 10, 2);   
    $octal = base_convert($resultado, 10, 8);     
    $hexadecimal = base_convert($resultado, 10, 16);


    echo "<h1>Resultado decimal: $resultado. Binario: $binario. Octal: $octal. Hexadecimal: $hexadecimal.</h1>";
}
  echo '<a href="index.php"><button>Volver</button></a>'
?>