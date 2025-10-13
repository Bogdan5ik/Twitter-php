<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "twitter");
    
    $update = "UPDATE tweets SET name='{$_GET['name']}', text='{$_GET['text']}' WHERE id='{$_GET['id']}' ";
    
    $result_update = mysqli_query($con, $update);

    header("Location: index.php");
    exit;
?>