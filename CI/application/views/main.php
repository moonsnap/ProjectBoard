    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-bordered">
                    <center><h2>게시판</h2></center>
                    <thead>
                        <tr>
                            <th>글번호</th>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>조회수</th>
                            <th>날짜</th>
                        </tr>
                        
                    <tbody>
                  <?php foreach($results as $data){ ?>
                            <tr>    
                                <td><?=$data->id?></td>
                                <td><a href="/index.php/board/post/<?=$data->id?>"><?=$data->title?></td>
                                <td><?=$data->author?></td>
                                <td><?=$data->hits?></td>
                                <td><?=$data->created?></td>
                            </tr>
                  <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 btnbar">
                <div class="col-md-2">
                    <a class="btn btn-primary" href="/index.php/board/write">글쓰기</a>
                </div>
                <div class="col-md-8"> 
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                        <?= $paging ?>
                        </div>
                        <div class="col-md-4"></div>                        
                    </div>
                </div>    
                <div class="col-md-2">
                    <a class="btn btn-primary pull-right" href="/index.php/board/page">목록</a>
                </div>
            </div>
            
            <div class="col-md-2"></div>
        </div>