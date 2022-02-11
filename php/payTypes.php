<?php
    session_start();
    include 'DB.php';

    function fil($data){
        $data1 = trim($data);
        $data2 = strtolower($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $name_ = $_GET['name'];
        $pay_ = $_GET['pay'];
        $clz_ = $_GET['clz'];

        $name = fil($name_);
        $pay = fil($pay_);
        $clz = fil($clz_);

        if($clz != "" && $name != "" && $pay != ""){
            $sql = "SELECT * FROM cls_payment WHERE stat = '1' AND name = '$name' AND class_id = '$clz' OR amount = '$pay' AND stat = '1' AND class_id = '$clz'";
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0){
                echo 4;
            }else{
                $query = "INSERT INTO cls_payment(class_id, name, amount, timestamp) VALUES ('$clz', '$name', '$pay', '$date')";
                $r = mysqli_query($conn, $query);
                if($r){
                    echo 1;
                }else{
                    echo 2;
                }
            }
        }else{
            echo 2;
        }
    }
?>