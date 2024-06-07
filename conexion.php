<?php
class Db
{
    private static $conexion = NULL;
    private function __construct()
    {
    }

    public static function conectar()
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$conexion = new
            PDO('mysql:host=localhost:3308;dbname=biblioteca', 'root', '', $pdo_options);
        return self::$conexion;
    }
}/*En la parte de host:localhost:3307, es el valor del config.inic.php  
en la parte Bind to the localhost ipv4 address and tcp 
$cfg['Servers'][$i]['host'] = 'localhost:3307'
este valor varia dependiente el xamp */
?>