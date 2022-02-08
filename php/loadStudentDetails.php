<?php
    session_start();
    include 'DB.php';

    $id = $_SESSION['INST_ID'];
    $sql = "SELECT * FROM student WHERE stat = '1' and inst_id = '$id'";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)){
        echo '<tr>
        <td>'.$row['eid'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['mobile'].'</td>
        <td>'.$row['address'].'</td>
        <td>'.$row['school'].'</td>
    </tr>';
    }
?>