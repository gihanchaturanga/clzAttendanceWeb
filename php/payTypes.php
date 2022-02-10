<?php
    session_start();
    include 'payTypes.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $name_ = $_GET['name'];
        $pay_ = $_GET['pay'];
        $clz_ = $_GET['clz'];
    }
?>