<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    </head>
    <body>
        <br>
        <h1>Calculadora</h1>
        <form action="calculos.php" method="post">
            <h2>Ingrese un número</h2>
        <input type="number" name="cal1" > 

        <h2>Ingrese otro número</h2>
                <input type="number" name="cal2"> 
                        <select name="calculo" id="">
            <option value="+">Sumar</option>
            <option value="-">Restar</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
        </select>
            <input type="submit" name="boton" value="Calcular" >

</form>
<br>
        
    </body>




</html>