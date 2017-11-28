<?php
    include("connection_info.php");
    include("function.php");
    session_start();
    $id=$_GET['id'];
    $select_sql = mysqli_query($conn, "SELECT author FROM board WHERE id=$id");
    $userid = mysqli_fetch_array($select_sql);
        
    if(!isset($_SESSION['userid'])){
        alert_redirect("로그인이 필요한 기능입니다.", "./login.php");
    }
    
    else{
        $del_sql = "DELETE FROM board WHERE id=$id";
        mysqli_query($conn, $del_sql);
        header('Location:./index.php');
    }
?>  