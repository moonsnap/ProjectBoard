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

    <script>
        var idflag=0, passflag=0;
        function id_ValidCheck(userid){
            if(userid==""){
                alert("아이디를 입력해주세요");              
                return false;
            }
            else{                
                var validexp = /^[A-Za-z]+[A-Za-z0-9]{5,30}$/g;
                
                if(validexp.test(userid)==true){
                    idflag=1;
                    alert("사용가능한 아이디입니다.");                   
                    return true;
                }
                else{
                    idflag=0;
                    alert("아이디는 영문, 숫자 5-30자리를 입력해야 합니다.");
                    return false;
                }
                
            }
        }

        function pass_ValidCheck(passwd, passconfirm){
            if(passwd == "" || passconfirm == ""){
                alert("비밀번호 또는 비밀번호 확인 문자를 입력해주세요");
                return false;
            }
            else{
                var pass_validexp = /^[a-zA-Z0-9!@#$%^&*()?_~]{6,15}$/g;
                
                if(pass_validexp.test(passwd)==true){
                    if(passwd == passconfirm){
                        passflag=1;
                        alert("사용가능한 비밀번호입니다.");
                        return true;
                    }
                    else{
                        passflag=0;
                        alert("비밀번호가 올바르지 않습니다");
                        return false;
                    }
                }
                else{
                    alert("비밀번호는 영문, 숫자, 특수문자 조합으로 6-15자리를 입력해야 합니다.");
                    return false;
                }
            }
        }

        function valid_flag(){
            if(idflag == 1 && passflag == 1){
                confirm("등록하시겠습니까?");
            }
            else{
                alert("아이디 또는 비밀번호가 조건에 맞지 않습니다.");                
                return false;
            }                
        }
    </script>

</head>
<body>
    <div class="container">
        <center><h2>사용자 등록</h2></center>
        <div class="row">
            <div class="col-xs-4 col-lg-4"></div>
            <div class="col-xs-4 col-lg-4">
                <form action="./process_signin.php" method="post" onsubmit="return valid_flag()">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="userid" type="text" class="form-control" name="userid" onblur="id_ValidCheck(document.getElementById('userid').value)" placeholder="아이디">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="passwd" type="password" class="form-control" name="passwd" placeholder="비밀번호">
                    </div>
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-ok"></i></span>
                        <input id="passconfirm" type="password" class="form-control" name="passconfirm" placeholder="비밀번호 재입력" onblur="pass_ValidCheck(document.getElementById('passwd').value,document.getElementById('passconfirm').value)">
                    </div>
                    <br>  
                    <a class="btn btn-danger" href="./index.php">메인으로</a>
                    <input type="submit" class="btn btn-success pull-right" value="등록"></input>
            
                </form>
            </div>
            
        </div>
    </div>
</body>