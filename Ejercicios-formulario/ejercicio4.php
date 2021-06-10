<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <h1>Lanzamiento de moneditaass</h1></br>
    <form action="recibe4.php" method="GET" >
        <label for="numero">Elige el numero de monedas(1-20): </label>
        <input type="number" id="numero" name="numero" min="1" max="20">
        <label for="tipo"> y ademas elija el tipo de moneda: </label>
        <select name="tipo" id="tipo" >
            <option value="dollar">Dollar Estadounidense</option>
            <option value="euro">Euro</option>
            <option value="yen">Yen Japones</option>
            <option value="libra">Libra Esterlina</option>
            <option value="franco">Franco suizo</option>
        </select>
        <button type="submit">Enviar</button>
        <button type="reset">Limpiar</button>
    </form>
</body>
</html>