<?php
    function alert_back($str_msg) {
        echo "<script>
        alert('{$str_msg}');
        window.history.back();
        </script>";
    }

    function alert_redirect($str_msg, $str_url) {
        echo "<script>
        alert('{$str_msg}');
        location.href='{$str_url}';
        </script>";
    }

    function valid_id($str_id){
        return preg_match('/^[a-zA-Z]+[A-Za-z0-9]{5,20}$/',$str_id);
    }

    function valid_pass($str_pass){
        return preg_match('/^[a-zA-Z0-9!@#$%^&*_]{6,20}$/',$str_pass);
    }
?> 