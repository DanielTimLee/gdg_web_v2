<?php
$row = mysqli_fetch_assoc(mysqli_query($link, constant("view_article")));
?>
<form action="method.php" method="post">
    <input type="hidden" name="pages" value="<?= $page ?>">
    <input type="hidden" name="action" value="write">
    <input type="hidden" name="usrname" value="<?= $_SESSION['usrname'] ?>">
    <div class="ui form">
        <div class="inline field">
            <input type="text" name="title" placeholder="제목을 입력하세요" value="<?= $row['title'] ?>">
        </div>
        <div class="field">
            <textarea rows="5" name="content" placeholder="내용을 입력하세요"><?= $row['content'] ?></textarea>
        </div>
        <button class="ui button" type="submit">작성하기</button>
    </div>
</form>
