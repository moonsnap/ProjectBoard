<?php
    include('connection_info.php');
    $str_title="사용자 등록";
    include('header.php');
?>
<script src="http://localhost/function.js"></script>
<div class="container">
    <center><h2>사용자 등록</h2></center>
    <div class="row">
        <div class="col-xs-4 col-lg-4"></div>
        <div class="col-xs-4 col-lg-4">
            <form action="./process_signin.php" class="form-horizontal" method="post" onsubmit="return valid_flag()">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="userid" type="text" class="form-control" name="userid" placeholder="아이디" onkeyup="valid_id(this)">                  
                </div>
                <div id="msgId"></div>                       
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="passwd" type="password" class="form-control" name="passwd" placeholder="비밀번호" onkeyup="valid_pass(this)">
                </div>
                <div id="msgPass"></div>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-ok"></i></span>
                    <input id="passconfirm" type="password" class="form-control" name="passconfirm" placeholder="비밀번호 재입력">
                </div>
                <div id="msgConfirm"></div>
                <br>
                <a class="btn btn-danger" href="./index.php">메인으로</a>
                <input type="submit" class="btn btn-success pull-right" value="등록"></input>
            </form>
        </div>    
    </div>
</div>
    <script> 
        function valid_flag(){            
            /*
            if($('#userid').val().trim().length == 0 || 
            $('#passwd').val().trim().length == 0 || 
            $('#passconfirm').val().trim().length == 0){
                alert("정보 입력이 올바르지 않습니다.");
                return false;
                exit();    
            } */

            if($())
            confirm("등록하시겠습니까?");              
        }
    </script>
</body>
</html>