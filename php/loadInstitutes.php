<?php
    include 'DB.php';

    $query = "SELECT * FROM institute WHERE stat = '1'";
    $res = mysqli_query($conn, $query);
    
    echo'<option value="">- Select the institute -</option>';
    while($row = mysqli_fetch_array($res)){
        echo'<option value="'.$row["id"].'">'.$row["name"].'</option>';
    }
?>