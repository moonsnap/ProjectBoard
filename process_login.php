<?php
    include('connection_info.php');
    $sql = mysqli_query($conn, "SELECT * FROM member WHERE userid='".$_POST['userid']."' AND passwd=SHA1('".$_POST['passwd']."')");
    $member_data = mysqli_fetch_array($sql);
    
    if($member_data['userid']==NULL || $member_data['passwd']==NULL){
        echo "아이디 혹은 비밀번호가 맞지 않습니다";
    }
    
    else{
        echo $member_data['userid']."님, 안녕하세요!";
    }
?>

