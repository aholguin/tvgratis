<?PHP

//el archivo recibe el nombre del archivo por post y realiza el require
if (isset($_POST['ruta_archivo'])) // si no existe ruta la envia por defecto al index del controlador
    require_once($_POST['ruta_archivo']);
else
    require_once('controller/index.php');
?>