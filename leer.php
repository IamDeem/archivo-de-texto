<?php

$archivo=fopen("archivo.txt","r")
or die ("Error al abrir el archivo");

    while(!feof($archivo))
    {
        $traer = fgets($archivo);
        $saltodelinea = nl2br($traer);
        echo $saltodelinea;
    }

?>

<style>
.boton {
   padding: 15px;
   background-color: red;
   color: white;
}
</style>
<a href="form.php" class="boton">VOLVER</a>
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

