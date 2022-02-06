<?php
    include 'DB.php';

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $name = $_GET['name'];
        $payDate = $_GET['payDate'];
        $mobile1 = $_GET['mobile1'];
        $user1 = $_GET['user1'];
        $mobile2 = $_GET['mobile2'];
        $user2 = $_GET['user2'];
        $payType = $_GET['payType'];
        $payment = $_GET['payment'];

        if($name != "" && $payDate != "" && $mobile1 != "" && $user1 != "" && $payType != "" && $payment != ""){
            
            $query = "SELECT * FROM institute WHERE stat = 1 AND name = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $res = $stmt->get_result();
            if($res->num_rows > 0){
                echo 4;
            }else{
                $sql = "INSERT INTO institute (name, payDate, payType, mobileOne, userOne, mobileTwo, userTwo, payment, timestamp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssssss", $name, $payDate, $payType, $mobile1, $user1, $mobile2, $user2, $payment, $date);
                if($stmt->execute()){
                    echo 1;
                }else{
                    echo 2;
                }
            }

        }else{
            echo 3;
        }
    }
?>