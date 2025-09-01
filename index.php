<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 3</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Conversor de bases númericas.</h1>

<form action="sistema.php" method="post">
   


<h3 class="met">Desde</h3><h3 class="set">Para</h3>

<br>
    <select name="bases" class="select1">

<option value="dec">Decimal</option>
<option value="octal">Octal</option>
<option value="bin">Binario</option>
<option value="hex">Hexadecimal</option>


    </select>

    <select name="bases1">
<option value="dec1">Decimal</option>
<option value="octal1">Octal</option>
<option value="bin1">Binario</option>
<option value="hex1">Hexadecimal</option>


    </select>
    <h2>Ingrese un número</h2>
     <input type="text" name="num1" value="">

    <input type="submit" name="boton" value="Convertir" >
    </form>


</body>
</html>

</html>

