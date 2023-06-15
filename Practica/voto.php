<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Si puede votar o no</title>
</head>
<body>
    <form action="voto.php" method="POST">
        <center><table><h1>Rellena todas las casillas</h1>
            <tr>
                <td>
                    <label>Escriba el sexo de la persona  :</label>
                    <input type="Text" name="sexo">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Escriba la edad de la persona:</label>
                    <input type="Text" name="edad">
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
    $sex = $_POST['sexo'];
    $ed = $_POST['edad'];

    if ($ed >= 18) {
        echo("La persona del sexo <font style='color: blue;'> ". $sex. "</font>  y edad <font style='color: blue;'>". $ed."</font>  Si puede Votar ");
    }
    
    if ($ed < 18) {
        echo("La persona del sexo <font style='color: blue;'> ". $sex. "</font>  y edad <font style='color: blue;'>". $ed."</font>  No puede Votar ");
    }

   
}
?>
 </center>