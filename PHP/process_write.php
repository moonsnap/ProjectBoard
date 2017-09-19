<?php
    include("connection_info.php");
    $nowtime = date("Y-m-d H:i:s");
    
    $sql = "INSERT INTO board (title, content, author, created, passwd) VALUES ('{$_POST['title']}', '{$_POST['content']}', '{$_POST['author']}', '{$nowtime}', SHA1('{$_POST['passwd']}'))";
    mysqli_query($conn, $sql);
    header('Location:/index.php');
?>