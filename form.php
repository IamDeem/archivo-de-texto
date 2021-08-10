<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilomenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <title> Archivo txt  </title>
</head>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

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