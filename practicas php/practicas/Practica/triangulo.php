<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area triangulo</title>
</head>
<body>
    <form action="triangulo.php" method="POST">
    <center><table>
        <h1>Rellena todas las casillas</h1>
            <tr>
                <td>
                    <label>Escriba la Base :</label>
                    <input type="Text" name="alt">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Escriba la Altura:</label>
                    <input type="Text" name="bas">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="Submit" value="Area">
                </td>
            </tr>
        </table>
   
    </form>
    
</body>
</html>
<?php
if($_POST)
{
    $b= $_POST['alt'];
    $a= $_POST['bas'];

    $ba= $b * $a;
    $area = $ba / 2;
    echo("El area del triangulo es  ". $area);
}
?>
 </center>