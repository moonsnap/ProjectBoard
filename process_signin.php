<?php
    include('connection_info.php');
    
    $save_query = "INSERT INTO member (userid, passwd) 
                    VALUES ('".$_POST['userid']."', SHA1('".$_POST['passwd']."'))";
    mysqli_query($conn, $save_query);

    header('Location:./login.php');
?>