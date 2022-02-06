<?php
include 'DB.php';//data base included

//---------------------------------------checking available datas fron DB
function isAvailable($query){
    $res = mysqli_query($conn, $query);
    if(mysqli_num_rows($res) > 0){
        return true;
    }else{
        return false;
    }
}

?>