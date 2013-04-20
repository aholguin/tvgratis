<link href="view/header.css" rel="stylesheet" type="text/css" />
<script src="view/header.js" type="text/javascript"></script>

<div id="header">
    <div class="container_12" >
        <div class="grid_3" id="logo">
            <img src="view/images/logo.png" width="160" height="50" alt="television gratis logo" /></div>
        <div class="grid_5" id="descripcion">
            <font color="#D6DF43">Tv Gratis</font>, un lugar alternativo para ver televisión en internet.
        </div>
        <div class="grid_4" id="buscador" >
            <form name="serch" action="#" method="post">
                <input type="text" name="serch_item" value="Canales a Buscar" class="default" />
                <input type="submit" name="ir" value="IR" class="ir" />
                <a href="#">Busqueda Avanzada</a>
            </form>
        </div>
        <div class="grid_12"   id="menu">
            <!--Se Crea el menu de cabecera-->
            <div id="tabs" class="sinFondo" >

                <ul class="sinFondo">
                    <?php
                    foreach ($menuPrincipal as $item) {
                        if (!$item['categoria_id']) {
                            echo "<li><a href='#tabs-{$item['id']}'>{$item['nombre']}</a></li>";
                            //__P($item);
                        }
                    }
                    ?>
                </ul>
                <?PHP
                    foreach ($menuPrincipal as $item) {
                        if (!$item['categoria_id']) {
                            echo "<div style='padding: 8px;' id='tabs-{$item['id']}'>";
                            foreach ($menuPrincipal as $subItem) {
                                if ($subItem['categoria_id'] == $item['id']) {
                                    echo "<a href = 'javascript:cargarStream({$subItem["id"]})'> {$subItem['nombre']} </a> <b> <font color = '#0C7EA3'>|</font></b>";
                                }
                            }

                            echo "</div>";
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</div>
