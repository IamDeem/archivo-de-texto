<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo de Texto</title>
</head>
<body>
    <form action="guardar.php" method="post" name="formulario"><br>
Titulo:<br>
      <input type="text" name="nombre" /><br /><br /><br>
Contenido:<br>
      <textarea name="comentario"></textarea><br /><br />
      <input type="submit" value="Guardar datos" />
    </form> <br/> 

    <form action="leer.php" method="post" name="formulario">
      <input type="submit" value="Leer datos" />
    </form> 

    



</body>
</html>