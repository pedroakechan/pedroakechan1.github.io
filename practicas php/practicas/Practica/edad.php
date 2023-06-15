<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad de una persona</title>
</head>
<body>
    <form action="edad.php" method="POST">
    <center><i><font size="4" color="Red"><table>
            <tr>
                <td>
                 <label>Escriba la edad :</label>
                 <input type="Text" name="edad">
                </td>
            </tr>
            <tr>
                <td>
                 <label>Escriba el año actual :</label>
                 <input type="Text" name="año">
                </td>
            </tr>
            <br><br><br>
            <tr>
                <td>
                    <input type="Submit" value="Calcular">
                </td>
            </tr>
        </table>
      <?php
      if($_POST)
       {
        $ed= $_POST['edad'];
        $añ= $_POST['año'];

         $nac= $añ-$ed;

        echo("El Año  de Nacimiento es ".$nac );
       }
      
      ?>
      </font></i>
      </center>

    </form>
</body>
</html>
