<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area circulo</title>
</head>
<body>
    <form action="circulo.php" method="POST">
    <center><table><h1>Rellena todas las casillas</h1>
            <tr>
                <td>
                    <label>Escriba su radio :</label>
                    <input type="Text" name="rad">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Escriba valor de PI :</label>
                    <input type="Text" name="pi">
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
    $r= $_POST['rad'];
    $p= $_POST['pi'];

    $ra= $r * $r;
    $area = $ra * $p;
    echo("El area del circulo es  ". $area);
}
?>
 </center>