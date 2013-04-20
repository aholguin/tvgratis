<?php
/*
 * Archivo controlador que recibe el id del canal y devuenve los streaming correspondientes
 *
 */
// Incluir la lógica del modelo
require_once('model/bd_mysql.php');

if (isset($_POST['canal_id'])) {
    $canal_id = $_POST['canal_id'];
    $objBD = new bd_mysql();
    $arrayStreaming = $objBD->getUrl($canal_id);
    ?>
    <ul>
        <?php
        $cont = 1;
        foreach ($arrayStreaming as $item) {
            echo "<li><a href='#canal-{$item['id']}'>Opción-{$cont}</a></li>";
            $cont++;
        }
        ?>
    </ul>
    <?PHP
    foreach ($arrayStreaming as $item) {
        echo "<div id='canal-{$item['id']}'>";

        echo str_replace('"', "'", $item['url']);
        echo '<br> <b>Descripción: </b>'. $item['descripcion'];
        echo '<br> <b>Fuente: </b>'. $item['fuente'];
        echo '</div>';
    }
    //__P($arrayStreaming);
}
?>
