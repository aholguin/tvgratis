<?PHP

/*
 *   @descrición   clase de conexión  general al a base de datos
 *   @autor        Anderson Holguin Avila
 *   @version      1.0   
 */
include('include/bd/adodb5/adodb.inc.php');
include('include/app/mantenimiento.php');

class bd_mysql extends ADOConnection {

    var $dbdriver = 'mysql';
    var $servidor = 'localhost';
    var $usuario = 'root';
    var $contraseña = '';
    var $database = 'tvgratis';
    var $db;

    function __construct() {
        $mantenimineto = new mantenimiento();
        $this->db = ADONewConnection($this->dbdriver); # eg 'mysql' o 'postgres'
        //$this->db->debug = true;
        if (!$this->db->Connect($this->servidor, $this->usuario, $this->contraseña, $this->database))
            $mantenimineto->errorFatal(utf8_decode('Error en la conexión con la base de datos!!'));
    }

    //Función para obtener todos los datos de un menpu determinado
    function getMenu($menu_id) {
        $sql = "SELECT * FROM `niveles_menu` where menus_id = {$menu_id} and activo =1 ORDER BY orden ;";
        $respuesta = $this->db->Execute($sql)->getArray();
        return $respuesta;
    }

    //Función para obtener todas las url de un item de un menu
    function getUrl($canal_id) {
        $sql = "SELECT * FROM `url` where niveles_menu_id = {$canal_id} and activo =1 ORDER BY orden;";
        $respuesta = $this->db->Execute($sql)->getArray();
        return $respuesta;
    }

}

?>