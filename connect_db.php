<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 11.10.16
 * Time: 1:14
 */
define("HOST", "localhost");
define("USER", "root");
define("PASS", "euflfq");
define("DBNAME", "QEST");
// Connect to database
try {
    $db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8mb4", "".USER."", "".PASS."");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}