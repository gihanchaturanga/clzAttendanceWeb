<?php
    include 'DB.php';

    function fil($data){
        $data1 = trim($data);
        $data2 = strtolower($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        //filtering input data
        $emer_ = NULL;
        $scl_ = NULL;
        $eid_ = NULL;
        $email_ = NULL;

        $name_ = $_GET['name'];
        $mobile_ = $_GET['mobile'];
        $email_ = $_GET['email'];
        $eid_ = $_GET['eid'];
        $address_ = $_GET['address'];
        $scl_ = $_GET['school'];
        $emer_ = $_GET['emergency'];

        if(!empty($name_) && !empty($mobile_) && !empty($address_)){//checking empty fields
            $name = fil($name_);
            $mobile = fil($mobile_);
            $email = fil($email_);
            $eid = fil($eid_);
            $address = fil($address_);
            $scl = fil($scl_);
            $emer = fil($emer_);

            //checking duplicates
            $sql = NULL;
            if(empty($eid)){
                $sql = "SELECT * FROM student WHERE stat = '1' AND mobile = '$mobile'";
            }else{
                $sql = "SELECT * FROM student WHERE stat = '1' AND mobile = '$mobile' OR eid = '$eid'";
            }

            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0){
                echo 4;
            }else{
                $query = "INSERT INTO student(name, mobile, address, email, school, emergency, eid, timestamp) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssssssss", $name, $mobile, $address, $email, $scl, $emer, $eid, $date);
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