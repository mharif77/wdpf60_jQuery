<script src="../jquery-3.7.1.min.js"></script>
<?php
include_once("dbconfig.php");

$sql = $db->query("SELECT * FROM students_3"); ?>

<table border="2">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>gender</th>
        <th>dob</th>
        <th>email</th>
        <th>phone</th>
        <th>address</th>
        <th>Action</th>
    </tr>
    <?php

    while ($row = $sql->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><?php echo $row['dob'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <!-- <td><?php echo $row['Action'] ?></td> -->


            <td><a href='delete.php' class='stid' value="<?php echo $row['id'] ?>"> delete</a></td>;
        </tr>

        <?php
    }
    // echo "<pre>";
// print_r($row);
    ?>
</table>

?>
<script>
    $(document).ready(function () {
        $(".stid").on('click', function (event) {
            event.preventDefault();
            let stid = $(this).attr('value');
            // alert(stid);
            $.post("delete.php", { id: stid }, function (data, status) {
                alert(data + "from delete page");
            })
        })
    });
</script>