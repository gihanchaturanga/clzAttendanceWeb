<?php
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "attendanceWebNew";

    $conn = mysqli_connect($host, $user, $pwd, $db);

    if($conn){
        //echo 'connection success';
    }else{
        //echo 'connection faild';
    }

    date_default_timezone_set("Asia/Colombo");
    $date = date("Y-m-d H:i:s");

    

?>