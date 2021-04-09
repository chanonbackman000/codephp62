<?php
include 'template\header.html';
require_once 'connectdb.php';

 $strSQL = "SELECT `ID`, `usermane`, `passwoed_hash`, `status` FROM `user`";
 $result = $myconn->query ($strSQL);

?>

<body>
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
        <tr>
            <th> ลำดับ</th>
            <th> ชื่อผู้ใช้</th>
            <th> สถานะ</th>
            <th>เเก้ไข</th>
            <th> ลบ</th>      
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = $result->fetch_array()) {
        ?>
            <tr>
                <td><?php echo $row["ID"];?></td>
                <td><?php echo $row["usermane"];?></td>
                <td><?php echo $row["status"];?></td>
                <td><a href="update.php?ID=<?= $row["ID"]?>&usermane=<?= $row["usermane"]?>&status=<?= $row["status"];?>"
                 ><i class="fas fa-edit"></i></a> </td>
                <td><a href="delete.php?Id=<?= $row["ID"];?>"><i class="far fa-trash-alt"></i></a></td>
            </td>
        <?php
        }
        ?>
    </tbody>
    </table>
    <a href="inserttt.php"> เพิ่มผู้ใช้ </a>

    <?php
    include 'template\header.html';
    ?>
</body>