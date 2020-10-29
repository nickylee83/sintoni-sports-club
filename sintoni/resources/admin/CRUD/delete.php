<?php
/**
 * Created by PhpStorm.
 * User: 2924796
 * Date: 10/04/2018
 * Time: 17:23
 */

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require 'inc/database.php';
$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "DELETE FROM employees where emp_no = ?";
$q = $pdo->prepare($sql);
$q->execute(array($id));
Database::disconnect();
header("Location: index.php");

?>