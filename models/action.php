<?php
if (!$action & !$no) {
    require("models/list_article.php");
} elseif (!$action & mysqli_num_rows(mysqli_query($link, constant("view_article"))) == 0) {
    header("Location: ?pages=home");
    exit();
} elseif ($action == write) {
    require("models/write.php"); //name "write.php" than something includes add,mod.
} elseif ($action == delete) {
    require("method.php"); //name "write.php" than something includes add,mod.
} else {
    require("models/view_article.php");
} ?>
