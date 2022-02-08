<?php
    session_start();
    include 'DB.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $name_ = $_GET['name'];
        $grade_ = $_GET['grade'];
        $time_ = $_GET['time'];
        $day_ = $_GET['day'];
        $t_id = $_GET['t_id'];
        $profit_ = $_GET['profit'];
        $profitType = $_GET['profitType'];

        echo $name_.$grade_.$time_.$day_.$t_id.$profit_.$profitType;
    }
?>