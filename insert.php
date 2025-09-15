<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "twitter");
    $insert = "INSERT INTO tweets (name, text, avatar, image) VALUES ('{$_GET['name']}', '{$_GET['text']}', 'img/2.png', 'img/image.jpg')";
    $result_insert = mysqli_query($con, $insert);
    header("Location: /index.php");
    exit;
?>