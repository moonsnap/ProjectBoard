<?php
    include('connection_info.php');
    $str_title="사용자 등록";
    include('header.php');
?>
    <div class="container">
        <center><h2>사용자 등록</h2></center>
        <div class="row">
            <div class="col-xs-4 col-lg-4"></div>
            <div class="col-xs-4 col-lg-4">
                <form action="/process_signin.php" method="post" onsubmit="return valid_flag()">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="userid" type="text" class="form-control" name="userid" placeholder="아이디">
                    </div>
                    <div id=msgId class="error">아이디오류</div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="passwd" type="password" class="form-control" name="passwd" placeholder="비밀번호">
                    </div>
                    <div id=msgId class="error">비번오류</div>
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-ok"></i></span>
                        <input id="passconfirm" type="password" class="form-control" name="passconfirm" placeholder="비밀번호 재입력">
                    </div>
                    <div id=msgId class="error">확인오류</div>
                    <br>  
                    <a class="btn btn-danger" href="/index.php">메인으로</a>
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