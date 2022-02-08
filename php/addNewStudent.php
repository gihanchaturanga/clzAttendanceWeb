<?php
    include 'DB.php';
    session_start();

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
        $dob = $_GET['dob'];

        if(!empty($name_) && !empty($mobile_) && !empty($address_) && !empty($dob)){//checking empty fields
            $name = fil($name_);
            $mobile = fil($mobile_);
            $email = fil($email_);
            $eid = fil($eid_);
            $address = fil($address_);
            $scl = fil($scl_);
            $emer = fil($emer_);
            $inst_id = $_SESSION['INST_ID'];

            //checking duplicates
            $sql = NULL;
            if(empty($eid)){
                $sql = "SELECT * FROM student WHERE stat = '1' AND mobile = '$mobile' AND inst_id = '$inst_id'";
            }else{
                $sql = "SELECT * FROM student WHERE stat = '1' AND mobile = '$mobile' AND inst_id = '$inst_id' OR eid = '$eid'";
            }

            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0){
                echo 4;
            }else{
                $query = "INSERT INTO student(name, mobile, address, email, school, emergency, eid, timestamp, inst_id, dob) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssssssssis", $name, $mobile, $address, $email, $scl, $emer, $eid, $date, $inst_id, $dob);
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