<?php
$page = $_REQUEST['pages'];
$action = $_REQUEST["action"];

$no = $_REQUEST['no'];
$title = $_REQUEST['title'];
$content = $_REQUEST['content'];

$usrname = $_REQUEST['usrname'];
$pwd = $_REQUEST['pwd'];

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$memo = $_REQUEST['memo'];

define("login", "SELECT * FROM member WHERE usrname='$usrname' AND pwd='$pwd'");
define("add_member", "INSERT INTO member (usrname, pwd, name, email, memo, created) VALUES('$usrname','$pwd', '$name', '$email', '$memo', NOW())");
define("add_article", "INSERT INTO $page (title, content, usrname, created) VALUES('$title', '$content', '$usrname', NOW())");
define("list_article", "SELECT * FROM $page order by no desc");
define("view_article", "SELECT * FROM $page WHERE no='$no'");
define("del_article", "DELETE FROM $page WHERE no='$no'");


?>
