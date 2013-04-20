<?PHP
/*    @descrición   Controlador del Index
  //   @autor        Anderson Holguin Avila
 */

// Incluir la lógica del modelo
require_once('model/bd_mysql.php');

// Obtener la lista del menú principal
$objBD = new bd_mysql();
$menuPrincipal = $objBD->getMenu(1);



// InclugetMenuir la lógica de la vista************
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--GRID 960-->
        <link rel="stylesheet" href="include/css/960/text.css" />
        <link rel="stylesheet" href="include/css/960/reset.css" />
        <link rel="stylesheet" href="include/css/960/960.css" />

        <!--estilos-->
        <link href="include/css/fonts.css" rel="stylesheet" type="text/css" />
        <link href="view/generalStyles.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="include/css/jq/jquery-ui-1.8.16.custom.css"/>

        <!--Action script-->
        <script type="text/javascript" src="include/js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="include/js/jquery-ui-1.8.16.custom.min.js"></script>
        <script type="text/javascript" src="include/js/swfobject.js"></script>
        <script type="text/javascript" src="include/js/textoDefault.js"></script>
    </head>

    <body>

        <?PHP
        require('view/header.php');
        require('view/content.php');
        require ('view/footer.php');
        ?>
    </body>

</html>
