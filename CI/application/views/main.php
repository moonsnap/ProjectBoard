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
                  <?php foreach($posts as $entry){ ?>
                            <tr>    
                                <td><?=$entry->id?></td>
                                <td><a href="/index.php/board/post/<?=$entry->id?>"><?=$entry->title?></td>
                                <td><?=$entry->author?></td>
                                <td><?=$entry->hits?></td>
                                <td><?=$entry->created?></td>
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
                <div class="col-md-8"></div>
                <div class="col-md-2">
                    <a class="btn btn-primary pull-right" href="/index.php/board">목록</a>
                </div>
            </div>
            
            <div class="col-md-2"></div>
        </div>