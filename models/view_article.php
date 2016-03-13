<?php
$row = mysqli_fetch_assoc(mysqli_query($link, constant("view_article")));
?>
<div class="ui raised very padded text container segment">
    <h2 class="ui header"><?= $row['title'] ?></h2>
    <h5><?= $row['usrname'] ?></h5>
    <h5><?= $row['created'] ?></h5>
    <p></p>
    <?= $row['content'] ?>
    <p></p>
</div>
<?php if ($_SESSION['usrname'] == $row['usrname']) { ?>
    <button class="ui button" type="submit" onclick="location.href='?pages=<?= $page ?>&no=<?= $no ?>&action=write'">
        수정하기
    </button>
    <button class="ui button" type="submit" onclick="location.href='?pages=<?= $page ?>&no=<?= $no ?>&action=delete'">
        삭제하기
    </button>
<?php } ?>
