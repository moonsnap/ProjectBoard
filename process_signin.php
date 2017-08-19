<?php
    include('connection_info.php');
    include('function.php');

    $userid = $_POST['userid'];
    $passwd = $_POST['passwd'];
    $passconfirm = $_POST['passconfirm'];
    
    if(empty($userid) || empty($passwd) || empty($passconfirm)) {
        alert_back('아이디 또는 비밀번호 입력이 알맞지 않습니다.');
        exit;
    }

    $b_check = valid_id($userid);
    if($b_check == false) {
        alert_back('ID는 5-20자의 영문, 숫자 이어야 합니다.');
        exit;
    }

    $b_check = valid_pass($passwd);
    if($b_check == false) {
        alert_back('비밀번호는 5-20자의 영문, 숫자 이어야 합니다.');
        exit;
    }
    
    $overlap_query = mysqli_query($conn, "SELECT EXISTS (SELECT * FROM member 
                                            WHERE userid = '$userid' LIMIT 1)");
    $result = mysqli_fetch_row($overlap_query);

    if($result[0] == 1){
        alert_back('이미 사용중인 아이디입니다.');
        exit();
    }

    if($passwd != $passconfirm){
        alert_back('비밀번호가 일치하지 않습니다.');
        exit();
    }

    $save_query = "INSERT INTO member (userid, passwd) 
    VALUES ('{$userid}', SHA1('{$passwd}'))";
    mysqli_query($conn, $save_query);
    alert_redirect('가입이 완료되었습니다.', './login.php');
?>