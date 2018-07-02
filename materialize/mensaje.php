<?php
    // comentarios una lineaVariables
    /*
    Varias lineas
    */
    $destino="nesriel666@gmail.com";
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $mensaje=$_POST["mensaje"];
    $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
    mail($destino,"Correo",$contenido);
    header("Location: index.html");
?>