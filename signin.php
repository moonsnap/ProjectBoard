<?php
    include('connection_info.php');
?>
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
        <center><h2>사용자 등록</h2></center>
        <div class="row">
            <div class="col-xs-4 col-lg-4"></div>
            <div class="col-xs-4 col-lg-4" style="background-color:lavender;">
                <form action="./process_signin.php" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="userid" type="text" class="form-control" name="userid" placeholder="아이디">
                    </div>
                        <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="passwd" placeholder="비밀번호">
                    </div>
                    <br>  
                    <a class="btn btn-danger" href="./index.php">메인으로</a>
                    <input type="submit" class="btn btn-success pull-right" value="등록"></input>
            
                </form>
            </div>
            <div class="col-xs-4 col-lg-4"></div>
        </div>
    </div>
</body>