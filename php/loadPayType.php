<?php

session_start();
include 'DB.php';

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $cls = $_GET["cls"];

    $sql = "SELECT * FROM cls_payment WHERE stat = '1' AND class_id = '$cls'";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)){
        $name = ucwords($row['name']);
        echo '<tr>
        <td>'.$name.'</td>
        <td>'.$row['amount'].'.00</td>
        <td>
            <i onclick="bin('.$row['id'].')" class="fa fa-trash text-danger" aria-hidden="true"></i>
        </td>
    </tr>';
    }
}

?>