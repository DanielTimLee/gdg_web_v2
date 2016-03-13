<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 16. 1. 20
 * Time: 오전 1:04
 */
function db_connect()
{
    global $link;
    $link = mysqli_connect('localhost', 'root', 'daniel', 'sscc');
    if (!$link) {
        echo('Could Not Connect!!' . mysqli_error($link));
    }
    mysqli_query($link, "set session character_set_connection=utf8;");
    mysqli_query($link, "set session character_set_results=utf8;");
    mysqli_query($link, "set session character_set_client=utf8;");
}


require_once("predefine.php");
