<?php

/**
 * Descripción archivo de aplicacion para controlar y sacar errores generales en la aplicación
 *
 * @autor anderson.holguin
 */
// calse para el mantenimiento general
class mantenimiento {

    public function __construct() {
        
    }

    public function errorFatal($anuncio) {
        echo "<div align = 'center' style='background-color: #C5C5A8 ; margin: 20px; padding: 10px'>
            <img width='160' height='50' alt='television gratis logo' src='view/images/logo.png'><br>
            <font size=4 color = 'RED'>{$anuncio}</font>
            </div>";
        die();
    }

}

//Funciones para no instansiar
// saca los array
function __P($datos, $tipo = true) {
    print "<pre>";
    if ($tipo === true) {
        print_r($datos);
    } else {
        var_dump($datos);
    }
    print "</pre>";
}
?>

