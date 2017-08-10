<?php
    include('connection_info.php');
    $userid = $_POST['userid'];
    $overlap_query = mysqli_query($conn, "SELECT EXISTS (SELECT * FROM member 
                                            WHERE userid = '$userid' LIMIT 1)");
    $result = mysqli_fetch_row($overlap_query);

    if($result[0] == 1){
        echo "<script>";
        echo "alert('이미 등록된 아이디입니다.');";
        echo "location.href='./signin.php';";
        echo "</script>";
    }

    else{
    $save_query = "INSERT INTO member (userid, passwd) 
                    VALUES ('$userid', SHA1('".$_POST['passwd']."'))";
    mysqli_query($conn, $save_query);
    header('Location:./login.php');
    }
?>