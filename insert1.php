<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "twitter");
    
    $insert1 = "INSERT INTO trends (title, number) VALUES ('{$_GET['title']}', '{$_GET['number']}')";
    $result_insert1 = mysqli_query($con, $insert1);

    header("Location: index.php");
    exit;
?>