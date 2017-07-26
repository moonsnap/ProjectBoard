<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
                    <a class="btn btn-danger">ID / 비밀번호 찾기</a>
                    <input type="submit" class="btn btn-success pull-right" value="로그인"></a>
                </form>
                    <br>
                    
                    
            </div>
            <div class="col-xs-2 col-lg-3"></div>
        </div>
    </div>
</body>