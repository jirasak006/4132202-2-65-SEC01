<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<?php
include "../model/condb.php";
?>
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>NAME</td>
            <td>LAST NAME</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_user ORDER BY user_id ASC";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row['user_id'] ?></td>
                <td><?= $row['user_name'] ?></td>
                <td><?= $row['user_sname'] ?></td>
                <td><button class="btn_edit" data="<?= $row['std_id'] ?>">Edit</button></td>
                <td><button class="btn_del" data="<?= $row['std_id'] ?>">DEL</button></td>
            </tr>
        <?php
        }   //while
        ?>
    </tbody>
</table>

<script>
    $(".btn_del").click(function() {
        alert($(this).attr('data'));
    });
</script>