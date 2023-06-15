<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
    <form action="salario.php" method="POST">
    <center><table><h1>Rellena todas las casillas</h1>
            <tr>
                <td>
                    <label>Ingresar horas trabajados :</label>
                    <input type="Text" name="trabajados">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Ingresar tarifa de sueldo :</label>
                    <input type="Text" name="tarifa">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Horas extras :</label>
                    <input type="Text" name="extra">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="Submit" value="Consultar">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>
<?php
if ($_POST) 
{
    $trabajado = $_POST['trabajados'];
    $tarifa = $_POST['tarifa'];
    $extra =$_POST['extra'];

    $sueldo = $trabajado * $tarifa;
    $sueldoextra = $extra * ($tarifa * 1.5);
    $sueldomensual = $sueldo + $sueldoextra;

   $impuesto=0;
    if ($sueldomensual > 20000) {
        $impuesto = 0.2 * $sueldomensual;
    }

    $salarioneto = $sueldomensual - $impuesto;

    echo (" Sueldo normal:$  " . $sueldo );
    echo (" Sueldo extras:$  " . $sueldoextra );
    echo (" Sueldo mensual:$  " . $sueldomensual );
    echo (" Impuestos:$  " . $impuesto );
    echo (" El Salario neto es:$  " . $salarioneto );
}
?>
 </center>
