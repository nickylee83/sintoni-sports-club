<?php
/**
 * Created by PhpStorm.
 * User: henrique
 * Date: 30/04/18
 * Time: 01:12
 */

require_once(__ROOT__."/resources/Database.php");
class CRUD{
    public static function getColumns($tablename){
        $pdo = Database::connect();
        $sql = "SHOW COLUMNS FROM $tablename";
        $ar = array();
        foreach ($pdo->query($sql) as $row) {
            array_push($ar,$row['Field']);
        }
        return $ar;

    }

    public static function getRows($tablename){
        $pdo = Database::connect();


        $sql = "SELECT * FROM $tablename";

        return $pdo->query($sql);

    }
//
//    private static function isTableNameValid {
//        $validTableNames = array("")
//}

}
