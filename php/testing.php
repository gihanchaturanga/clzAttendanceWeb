<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(!empty($_GET['name']) && empty(!$_GET['payment'])){
            echo 1;
        }else{
            echo 2;
        }
    }
?>