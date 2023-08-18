<?php

    // Obtener los datos enviados a través de la solicitud get
    $rutaArchivo = $_GET["ruta"];
    $nombreArchivo = $_GET["archivo"];

    // Validar y procesar los datos si es necesario

    // Ruta completa al archivo
    $rutaCompleta = "../".$rutaArchivo .'/'. $nombreArchivo;

    // Verificar si el archivo existe
    if (file_exists($rutaCompleta)) {
        // Establecer los encabezados para la descarga
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . $nombreArchivo . "\"");

        // Leer y enviar el contenido del archivo
        readfile($rutaCompleta);
        //exit(); // Importante: Salir del script después de la descarga
    } else {
        echo "El archivo no existe.";
    }
?>
