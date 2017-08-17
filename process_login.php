<?php
    include('connection_info.php');
    $sql = mysqli_query($conn, "SELECT * FROM member WHERE userid='".$_POST['userid']."' AND passwd=SHA1('".$_POST['passwd']."')");
    $member_data = mysqli_fetch_array($sql);
    
    if(!isset($member_data)){
        echo "아이디 혹은 비밀번호가 맞지 않습니다";
    }
    
    else{
        session_start();
        $_SESSION['userid'] = $_POST['userid'];
        header('Location:/index.php');
    }
?>

