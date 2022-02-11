<?php
    session_start();
    include 'DB.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $id = $_GET['id'];
        $sql = "UPDATE cls_payment SET stat = '0' WHERE id = '$id'";
        $res = mysqli_query($conn, $sql);
        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }
    
?>