<?php
    $conn = mysqli_connect("localhost", "사용자", "비밀번호") or die("DB 접속에 실패했습니다");
    mysqli_select_db($conn, "moonsnap");
?>