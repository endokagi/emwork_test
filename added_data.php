<?php
    $connect = mysqli_connect("localhost", "root", "", "emwork_test");
    $sql = 'INSERT INTO ';
    $result = mysqli_query($connect, $sql);
    
    mysqli_close($connect);

    ?>