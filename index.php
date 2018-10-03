<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actividad02</title>
  </head>
  <body>
    <h1>Formulario actividad 2</h1>
    <?php

    $color1=$_POST["red"];
    $color1=$_POST["blue"];
    $color1=$_POST["green"];

     ?>

     <br>
     <form action="accion.php" method="post">
<p>Color1 <input type="text" name="red" /></p>
<p>Color2: <input type="text" name="blue" /></p>
<p>Color3: <input type="text" name="green" /></p>
<p><input type="submit" /></p>
</form>
           <br>
  </body>
</html>
