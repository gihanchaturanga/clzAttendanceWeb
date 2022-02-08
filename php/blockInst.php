<?php
    include 'DB.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $id = $_GET['id'];

        $query = "SELECT * FROM institute WHERE id = '$id'";
        $resp = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($resp);

        if($row['stat'] == 1){
            $sql = "UPDATE institute SET stat = '2' WHERE id = '$id'";
            $res = mysqli_query($conn, $sql);
            if($res == 1){
                echo 1;
            }else{
                echo 2;
            }
        }else if($row['stat'] == 2){
            $sql = "UPDATE institute SET stat = '1' WHERE id = '$id'";
            $res = mysqli_query($conn, $sql);
            if($res == 1){
                echo 1;
            }else{
                echo 2;
            }
        }

        
    }
?>