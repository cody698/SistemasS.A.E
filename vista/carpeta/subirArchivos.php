  <?php
$ruta=$_GET["ruta"];

$carpeta=$_GET["nombre"];
echo $rutaGuardado = "../../".$ruta."/".$carpeta;

//recopilando informacion del/los archivos a subir
$nombre=$_FILES["file"]["name"];
$archivoTmp=$_FILES["file"]["tmp_name"];
move_uploaded_file($archivoTmp, $rutaGuardado."/".$nombre);

var_dump($_FILES["file"]);
?>