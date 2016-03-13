<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 16. 2. 12
 * Time: 오전 10:34
 */
session_start();
if ($_SESSION) {
    $session = 1;
}
require('models/db.php');
db_connect();

if (!$page) {
    header("Location: ?pages=home");
    exit();
} elseif (!file_exists('views/' . $page . '.php')) {
    header("Location: ?pages=404");
    exit();
}


include('views/header.php');
include('views/' . $page . '.php');
include('views/footer.php');
?>