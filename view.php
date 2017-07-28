<!DOCTYPE html>
<html>
<?php
    include("connection_info.php");
    session_start();
    $page = $_GET['page'];
    $id = $_GET['id'];    
    mysqli_query($conn, "UPDATE board SET hits = hits+1 WHERE id=$id");
    $result = mysqli_query($conn, "SELECT * FROM board WHERE id=$id");  
    $data = mysqli_fetch_array($result);
    $num_query = mysqli_query($conn, "SELECT MAX(id), MIN(id) FROM board");
    $maxmin_no = mysqli_fetch_row($num_query);    
?>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-12"><h2><?=$data['title']?></h2></div>
        </div>

        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center"><span class="glyphicon glyphicon-user"></span></div>
                        <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2"><?=$data['author']?></div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
                        <div class="col-xs-2 col-sm-6 col-md-6 col-lg-6"></div>
                    </div>                   
                    <div class="row">
                        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center"><span class="glyphicon glyphicon-eye-open"></div>
                        <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2"><?=$data['hits']?></div>
                        <div class="col-xs-5 col-sm-9 col-md-9 col-lg-9"></div>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-body"><?=nl2br($data['content'])?></div>
            </div>
            
            <p><div class="row">
                <div class="col-xs-4 col-md-4 col-lg-4">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" onclick="location.href='./write.php'">글쓰기</button>
                        <button type="button" class="btn btn-primary" onclick="location.href='./modify.php?page=<?=$page?>&id=<?=$id?>'">수정</button>
                <?php if($_SESSION['userid']==$data['author']){?>
                        <script>
                            function cancel_check(){
                                var flag = confirm("글을 삭제하시겠습니까?");    
            
                                if (flag==true)
                                    location.href="./process_del.php?id=<?=$id?>";
                                
                                else
                                    return;
                            }
                        </script>
                        <button type="button" class="btn btn-primary" onclick="cancel_check()">삭제</button>
                  <?php } ?>
                    </div>
                </div>
                <div class="col-xs-4 col-md-4 col-lg-4"></div>
                <div class="col-xs-4 col-md-4 col-lg-4">
                    <div class="btn-group pull-right">
                        <?php if($id>$maxmin_no[1]){ ?>
                            <button type="button" class="btn btn-primary" onclick="location.href='./view.php?page=<?=$page?>&id=<?=$id-1?>'">이전글</button>
                        <?php } ?>
                        <?php if($id<$maxmin_no[0]){ ?>
                            <button type="button" class="btn btn-primary" onclick="location.href='./view.php?page=<?=$page?>&id=<?=$id+1?>'">다음글</button>
                        <?php } ?>
                        <button type="button" class="btn btn-primary" onclick="location.href='./index.php?page=<?=$page?>'">목록</button>
                    </div>
                </div>

            </div></p>
        </div>
    </div>

</body>
</html>