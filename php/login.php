<?php
    include 'DB.php';
    session_start();

    function fil($data){
        $data1 = trim($data);
        $data2 = strtolower($data1);
        $data3 = htmlspecialchars($data2);
        return $data3;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email_ = $_POST['email'];
        $pwd_ = $_POST['pwd'];
        $remember = $_POST['remember'];

        $email = fil($email_);
        $pwd = fil($pwd_);

        if(!empty($email) && !empty($pwd)){
            $query = "SELECT * FROM user WHERE username = ? AND pwd = ? AND stat = '1'";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $email, $pwd);
            if($stmt->execute()){
                $res = $stmt->get_result();
                if($res->num_rows > 0){
                    $row = $res->fetch_assoc();
                    $_SESSION['INST_ID'] = $row['inst_id'];
                    $_SESSION['USER_ID'] = $row['id'];
                    $_SESSION['USER_NAME'] = $row['name'];
                    $_SESSION['USER_POSITION'] = $row['position'];
                    setcookie("USER_ID", $row['id'], time()+(86400 * 30));

                    if($row['position'] == 'DEV'){
                        echo 1;
                    }else{
                        $sql = "SELECT * FROM institute WHERE id = '".$row["inst_id"]."' AND stat = '1'";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            if($row['position'] == 'ADMIN'){
                                echo 2;
                            }else if($row['position'] == 'TEACHER'){
                                echo 3;
                            }else{
                                echo 4;
                            }
                        }else{
                            echo 8;
                        }
                    }
                }else{
                    echo 5;
                }
            }else{
                echo 6;
            }

        }else{
            echo 7;
        }
    }
?>