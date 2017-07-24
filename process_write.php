<?php
    include("connection_info.php");
    $nowtime = date("Y-m-d H:i:s");
    $title = strip_tags($_POST['title']);
    $sql = "INSERT INTO board (title, content, author, created) VALUES ('$title', '".$_POST['content']."', '".$_POST['author']."', '$nowtime')";
    mysqli_query($conn, $sql);
    header('Location:./index.php');
?>