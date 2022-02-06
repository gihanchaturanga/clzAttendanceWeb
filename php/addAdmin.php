<?php
    include 'DB.php';

    function fil($data){
        $data1 = trim($data);
        $data2 = strtolower($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $name_ = $_GET['name'];
        $mobile_ = $_GET['mobile'];
        $inst_ = $_GET['inst'];
        $user_ = $_GET['user'];
        $pwd_ = $_GET['pwd'];

        $name = fil($name_);
        $mobile = fil($mobile_);
        $inst = fil($inst_);
        $user = fil($user_);
        $pwd = fil($pwd_);

        if($name != "" && $mobile != "" && $inst != "" && $user != "" && $pwd != ""){

            $sql = "SELECT * FROM user WHERE mobile = '$mobile' AND stat = '1' AND inst_id = '$inst' OR username = '$user' AND stat = '1'";
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0){
                echo 4;
            }else{
                $admin = "ADMIN";
                $query = "INSERT INTO user (name, mobile, username, pwd, position, inst_id, timestamp) VALUES(?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("sssssss", $name, $mobile, $user, $pwd, $admin, $inst, $date);
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