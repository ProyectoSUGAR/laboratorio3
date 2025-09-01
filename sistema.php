<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = trim($_POST["num1"]);
    $baseOrigen = $_POST["bases"];
    $baseDestino = $_POST["bases1"];

    switch ($baseOrigen) {
        case "dec":   $baseEntrada = 10; break;
        
        case "octal": $baseEntrada = 8;  break;
        case "bin":   $baseEntrada = 2;  break;
        
        case "hex":   $baseEntrada = 16; break;
    }

    switch ($baseDestino) {
        case "dec1":   $baseSalida = 10; break;

        case "octal1": $baseSalida = 8;  break;

        case "bin1":   $baseSalida = 2;  break;

        case "hex1":   $baseSalida = 16; break;
    }

    function aDecimal($numero, $base) {
        $partes = explode('.', strtoupper($numero));
        $entero = intval($partes[0], $base);
        $decimal = 0;
        if (!empty($partes[1])) {
            $digitos = str_split($partes[1]);
            foreach ($digitos as $i => $digito) {
                $digito = ctype_alpha($digito) ? ord($digito) - 55 : intval($digito);
                    $decimal += $digito / pow($base, $i + 1);
            }



        }
        return $entero + $decimal;
    }



    function desdeDecimal($numero, $base, $precision = 5) {
        $entero = floor($numero);
        $resultado = strtoupper(base_convert($entero, 10, $base));
        $decimal = $numero - $entero;
        if ($decimal > 0) {
            $resultado .= '.';
              for ($i = 0; $i < $precision; $i++) {
                $decimal *= $base;
        $digito = floor($decimal);
               $resultado .= $digito < 10 ? $digito : chr($digito + 55);
        $decimal -= $digito;
            }
        }
        return $resultado;
    }

    echo '<!DOCTYPE html><html><head><link rel="stylesheet" href="style.css"></head><body>';

    if ($numero === '') {
        echo "<h1>Ingrese un número válido</h1>";
    } else {
        $numeroDecimal = aDecimal($numero, $baseEntrada);
        $resultado = desdeDecimal($numeroDecimal, $baseSalida);
        echo "<h1>Resultado: $resultado</h1>";
    }

    echo '<a href="index.php"><button>Volver</button></a>';
    echo '</body></html>';
}

?>

