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
        $grade_ = $_GET['grade'];
        $time_ = $_GET['time'];
        $day_ = $_GET['day'];
        $t_id = $_GET['t_id'];
        $profit_ = $_GET['profit'];
        $profitType = $_GET['profitType'];

        $name = fil($name_);
        $grade = fil($grade_);
        $time = fil($time_);
        $day = fil($day_);
        $profit = fil($profit_);

        $inst = $_SESSION['INST_ID'];

        // echo $name;
        // echo $grade;
        // echo $time;
        // echo $day;
        // echo $profit;
        // echo $profitType;
        // echo $t_id;

        if(!empty($name) && !empty($grade) && !empty($time) && !empty($profit)){
            $sql = "SELECT * FROM class WHERE name = '$name' AND t_id = '$t_id' AND inst_id = '$inst'";
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0){
                echo 4;
            }else{
                $query = "INSERT INTO class (name, grade, time, t_id, inst_id, day, profit, profitType, timestamp) VALUES ('$name', '$grade', '$time', '$t_id', '$inst', '$day', '$profit', '$profitType', '$date')";
                $row = mysqli_query($conn, $query);
                if($row == 1){
                    $id = getMaxID($conn);
                    echo $id;
                }else{
                    echo 2;
                }
            }
        }else{
            echo 3;
        }
    }

    function getMaxID($con){
        $sql = "SELECT MAX(id) AS m_id FROM class";
        $res = mysqli_query($con, $sql);
        $r = mysqli_fetch_array($res);
        return $r['m_id'];
    }

?>