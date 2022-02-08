<?php
    include 'DB.php';

    $query = "SELECT * FROM institute WHERE stat = '1' OR stat = '2'";
    $res = mysqli_query($conn, $query);
    // echo "<thead>
    //         <tr>
    //             <th>ID</th>
    //             <th>Institute Name</th>
    //             <th>Last Paid Date</th>
    //             <th>Next Payment Date</th>
    //             <th>Settings</th>
    //         </tr>
    //     </thead>
    //     <tbody>";
    while($row = mysqli_fetch_array($res)){

        if($row['stat'] == 1){
            $btn = "btn-dark";
            $text = "Block";
        }else{
            $btn = "btn-info";
            $text = "Unblock";
        }

        echo'<tr>
                <td>INST #'.$row["id"].'</td>
                <td>'.$row["name"].'</td>
                <td>'.getPaidDate($row["id"]).'</td>
                <td>'.getNextPayDate($row["id"]).'</td>
                <td>
                    <center>
                        <div class="btn-group">
                            <button onclick="update('.$row["id"].')" class="btn btn-warning">Update</button>
                            <button onclick="block('.$row["id"].')" class="blk-btn btn '.$btn.'">'.$text.'</button>
                            <button class="btn btn-danger">Remove</button>
                        </div>
                    </center>
                </td>
            </tr>';
    }
    // echo "</tbody><tfoot>
    //         <tr>
    //             <th>ID</th>
    //             <th>Institute Name</th>
    //             <th>Last Payment Date</th>
    //             <th>Payment Date</th>
    //             <th>Settings</th>
    //         </tr>
    //     </tfoot>";


    // get last paid date
    function getPaidDate($id){
        return "2022-05-30";
    }

    // get Next Payment Date
    function getNextPayDate($id){
        return "2022-06-30";
    }
?>