<?php
    include("connection_info.php");    
    $result = mysqli_query($conn, "SELECT * FROM board");
    session_start();

    if(!isset($_SESSION['userid'])){
        echo "<script>alert('로그인이 필요한 기능입니다.');";
        echo "location.href='login.php';</script>";
    }

    $str_title="새로운 글쓰기";
    include("header.php");    
?>
    <div class="container">
        <h2>새로운 글 작성</h2>
        <form action="/process_write.php" method="post" onsubmit="return confirm('등록하시겠습니까?');">
            <div class="input-group col-xs-5 col-lg-2">    
                <input id="author" type="hidden" class="form-control" name="author" value="<?php echo $_SESSION['userid'] ?>">
            </div>
            <div class="input-group col-xs-5 col-lg-2">    
                <span class="input-group-addon">비밀번호</span>
                <input id="passwd" type="password" class="form-control" name="passwd" placeholder="비밀번호">
            </div>
            <div class="input-group">
                <span class="input-group-addon">제 목</span>
                <input id="title" type="text" class="form-control" name="title" placeholder="제목을 입력하세요 (50자제한)">    
            </div>
            
            <div class="form-group">
                <textarea class="form-control" rows="15" id="content" name="content"></textarea>
            </div>
            
            <div class="row">
                <div class="col-xs-6 col-lg-6">
                    <input type="submit" class="btn btn-success btn-lg pull-right" value="등록"></input>
                </div>
                <div class="col-xs-6 col-lg-6">
                    <input type="button" class="btn btn-danger btn-lg" onclick="cancel_check()" value="취소"></input>
                </div>
            </div>
        </form>
    </div>
    <script>
        function cancel_check(){
            var flag = confirm("글쓰기를 취소하시겠습니까?");    
        
            if (flag==true){
                location.href="/index.php";
            }
            else
                return;
        }
    </script>
</body>
</html>