<?php 
    $str_title="사용자 로그인";
    include("header.php");?>
    <div class="container">
        <center><h2>사용자 로그인</h2></center>
        <div class="row">
            <div class="col-xs-2 col-lg-3"></div>
            <div class="col-xs-8 col-lg-6">
                <form action="./process_login.php" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="userid" type="text" class="form-control" name="userid" placeholder="아이디">
                    </div>
                        <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="passwd" type="password" class="form-control" name="passwd" placeholder="비밀번호">
                    </div>
                    
                    <br>
                    <a class="btn btn-info" href="./index.php">메인</a>
                    <a class="btn btn-warning" href="./signin.php">회원등록</a>
                    <input type="submit" class="btn btn-success pull-right" value="로그인"></a>
                </form>
                    <br>                   
            </div>
            <div class="col-xs-2 col-lg-3"></div>
        </div>
    </div>
</body>