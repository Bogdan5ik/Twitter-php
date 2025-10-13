<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "twitter");
    
    $delet = "DELETE FROM tweets WHERE id='{$_GET['id']}'";

    $result_delete = mysqli_query($con, $delet);

    header("Location: index.php");
    exit;
?>