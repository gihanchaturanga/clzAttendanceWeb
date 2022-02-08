<?php
    session_start();
    include 'DB.php';
    // include 'common.php';
    
    //input filter
    function fil($data){
        $data1 = trim($data);
        $data2 = strtolower($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        //filtering the inputs
        $name_ = $_GET['name'];
        $mobile_ = $_GET['mobile'];
        $user_ = $_GET['user'];
        $pwd_ = $_GET['pwd'];

        $name = fil($name_);
        $mobile = fil($mobile_);
        $user = fil($user_);
        $pwd = fil($pwd_);

        // echo $name.$mobile.$user.$pwd;

        if(!empty($name) && !empty($mobile) && !empty($user) && !empty($pwd)){
            
            $query = "SELECT * FROM user WHERE stat = '1' AND mobile = '$mobile' OR username = '$user'";
            $res = mysqli_query($conn, $query);
            if(mysqli_num_rows($res) > 0){
                echo 4;
            }else{
                
                //add data to database
                $inst_id = $_SESSION['INST_ID'];
                $query = "INSERT INTO user (name, mobile, username, pwd, position, inst_id, timestamp) VALUES('$name', '$mobile', '$user', '$pwd', 'TEACHER', '$inst_id', '$date')";
                $res = mysqli_query($conn, $query);
                if($res == 1){
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