<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="/index.php/board">문스냅 개발페이지</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li> 
                    <li><a href="#">Page 3</a></li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/index.php/auth/register"><span class="glyphicon glyphicon-user"></span>회원가입</a></li>
                    <li><a href="/index.php/auth/login"><span class="glyphicon glyphicon-log-in"></span> 로그인</a></li>
                    <li><a href="/index.php/auth/logout"><span class="glyphicon glyphicon-log-out"></span>로그아웃</a></li>
                </ul>
            </div>
        </div>
    </nav>       