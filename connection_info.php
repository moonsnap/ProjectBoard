<?php
    $conn = mysqli_connect("localhost", "username", "password") or die("DB 접속에 실패했습니다");
    mysqli_select_db($conn, "dbname");
?>
