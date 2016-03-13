<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 16. 2. 12
 * Time: 오전 10:39
 */
include('function.php');
active_item();  //activates menu items (semantic_ui)
?>

<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css">
    <script src=" http://code.jquery.com/jquery-1.12.0.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.js"></script>
    <style type="text/css">
        .logo {
            margin: 3em;
        }

        a {
            color: black;
            text-decoration: none
        }
    </style>
</head>

<body>
<div class="ui vertical inverted masthead center aligned segment"> <!-- ends at footer-->
    <div class="ui container">
        <div class="ui large image">
            <img class="logo" src="assests/images/logo2.png">
        </div>
        <div class="ui large secondary inverted pointing menu">
            <a class="<?= $active['home'] ?>" href="?pages=home">Home</a>
            <a class="<?= $active['about'] ?>" href="?pages=about">About</a>
            <a class="<?= $active['work'] ?>" href="?pages=work">Work</a>
            <a class="<?= $active['gallery'] ?>" href="?pages=gallery">Gallery</a>
            <a class="<?= $active['board'] ?>" href="?pages=board">Board</a>
            <div class="right item">
                <?php if ($session != 1) { ?>
                    <a class="ui inverted button login" href="?pages=login" style="margin-right:0.5em">Log in</a>
                    <a class="ui inverted button" href="?pages=register">Sign Up</a>
                <?php } else { ?>
                    <a class="ui inverted button login" href="?pages=member"
                       style="margin-right:0.5em">환영합니다! <?= $_SESSION['usrname'] ?>님</a>
                    <a class="ui inverted button" href="method.php?action=logout">Sign out</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div></div>
<div class="ui vertical masthead center aligned segment"> <!-- ends at footer-->
    <div class="ui container">
