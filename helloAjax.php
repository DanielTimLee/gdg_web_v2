<table class="ui selectable celled table">
    <thead>
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Username</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require('models/db.php');
    db_connect();
    $result = mysqli_query($link, constant("list_article"));
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><a href="?pages=<?= $page ?>&no=<?= $row[no] ?>"><?= $row[no] ?></a></td>
            <td><a href="?pages=<?= $page ?>&no=<?= $row[no] ?>"><?= $row[title] ?></a></td>
            <td><a href="?pages=<?= $page ?>&no=<?= $row[no] ?>"><?= $row[usrname] ?></a></td>
            <td><?= substr($row[created], 2, 8) ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

