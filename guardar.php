<?php

$fi=fopen("archivo.txt","a")
or die ("Error al crear archivo");

fwrite ($fi,"Datos:");
fwrite($fi,"\n");
fwrite ($fi,$_POST['nombre']);
fwrite($fi,"\n");
fwrite ($fi,$_POST['comentario']);
fwrite($fi,"\n");
fwrite($fi,"------------------------------- \n\n");
fclose($fi);
echo "Datos guardados";


?>
<br><br>

<style>
.boton {
   padding: 10px;
   background-color: red;
   color: white;
}
</style>
<a href="form.php" class="boton">VOLVER</a>
