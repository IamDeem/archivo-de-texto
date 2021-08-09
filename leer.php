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