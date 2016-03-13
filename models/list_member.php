<table class="ui selectable celled table">
    <thead>
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Name</th>
        <th>Status</th>
        <th>Notes</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $result = mysqli_query($link, constant("list_article"));
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $row[no] ?></td>
            <td><?= $row[usrname] ?></td>
            <td><?= $row[name] ?></td>
            <td><?= $row[email] ?></td>
            <td><?= $row[memo] ?></td>
            <td><?= substr($row[created], 2, 8) ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
