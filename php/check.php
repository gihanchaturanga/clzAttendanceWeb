<?php
    session_start();
    echo "inst id -> ".$_SESSION['INST_ID'];
    echo "<br>user id->".$_SESSION['USER_ID'];
    echo "<br>user name->".$_SESSION['USER_NAME'];
    echo "<br>user position->".$_SESSION['USER_POSITION'];
    echo "<br>user id coockie->".$_COOKIE['USER_ID'];
?>