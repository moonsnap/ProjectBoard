<?php
    $conn = mysqli_connect("localhost", "moonsnap", "moon4911") or die("DB 접속에 실패했습니다");
    mysqli_select_db($conn, "moonsnap");
?>