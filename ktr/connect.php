<?php
    $conn=mysqli_connect('localhost', 'root', '', 'ktr');
    if(mysqli_connect_errno()){
        echo "Lỗi : " . mysqli_connect_error();
    }
?>