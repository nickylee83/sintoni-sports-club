<?php
/**
 * Created by PhpStorm.
 * User: 2924796
 * Date: 19/04/2018
 * Time: 12:13
 */


class Database
{
    private static $dbName = 'sintoniclub' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'sintoniclub';
    private static $dbUserPassword = 'DkMi0PY0NZdvj8rC';

    private static $cont  = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect()
    {
        // One connection through whole application
        if ( null == self::$cont )
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>