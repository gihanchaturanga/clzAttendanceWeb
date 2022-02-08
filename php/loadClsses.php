<?php
    session_start();
    include 'DB.php';

    $sql = "SELECT * FROM class WHERE stat = '1' AND t_id = '$t_id'";
    echo '<option>here is some dummy classes</option>';
    echo '<option>here is some dummy classes</option>';
    echo '<option>here is some dummy classes</option>';
?>