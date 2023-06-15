<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres Numeros</title>
</head>
<body>
    <form action="mayor.php" method="POST">
            <center><h1>Rellena todas las casillas</h1>
            <table>
            <tr>
                <td>
                    <label>Escriba el primer numero :</label>
                    <input type="Text" name="num1">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Escriba el segundo numero:</label>
                    <input type="Text" name="num2">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Escriba el tercer numero:</label>
                    <input type="Text" name="num3">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="Submit" value="Mayor">
                </td>
            </tr>
        </table>
       
    </form>
    
</body>
</html>
<?php
if ($_POST)
 {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];

    if ($n1 > $n2 && $n1 > $n3) {
        echo("El primer numero= ". $n1." ,el segundo= ". $n2." y tercero = ". $n3. " el mayor es el primer numero = ". $n1);
    }

    if ($n2 > $n1 && $n2 > $n3) {
        echo("El primer numero= ". $n1." ,el segundo= ". $n2." y tercero = ". $n3. " el mayor es el segundo numero = ". $n2);
    }

    if ($n3 > $n2 && $n3 > $n1) {
        echo("El primer numero= ". $n1." ,el segundo= ". $n2." y tercero = ". $n3. " el mayor es el tercer numero = ". $n3);
    }
}
?>
</center>