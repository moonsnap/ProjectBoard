<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <style>
            body {padding-top:60px;}
        </style>
        <link href="/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">

                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <ul class="nav pull-right">
                    <!-- 세션이 존재하지 않을 때 -->
                    <li><a href="/index.php/auth/login">로그인</a></li>
                    <li><a href="/index.php/auth/register">회원가입</a></li>
                    <!-- 세션이 존재할 때 -->
                    <li><a href="/index.php/auth/logout">로그아웃</a></li>
                </ul>
                <a class="brand" href="/index.php/post">문스냅 개발페이지</a>               
            </div>
        </div>
    </div>