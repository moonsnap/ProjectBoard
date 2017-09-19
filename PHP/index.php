<?php
    include("connection_info.php");
    session_start();
    
# ---------------------- 페이징 처리 --------------------------- #
    $paging_data = mysqli_query($conn, "SELECT * FROM board ORDER BY id DESC");
    $total_post = mysqli_num_rows($paging_data);   # 게시판 내의 총 게시물 수
    
    $page = (!empty($_GET['page']))?$_GET['page']:1;  # GET으로 page값을 받도록 처리, 최초 page값이 없을 경우 1로 처리  
    $list_post = 15;    # 각 페이지당 표시될 게시물 수
    $block = 5; # 페이지 네비게이션의 범위 지정 (5페이지씩 1블록 단위로 아래 표시)
    
    $max_page = ceil($total_post/$list_post); # 현재 총 페이지 수
    $now_block = ceil($page/$block);
    
    $start_page = ($now_block * $block) - ($block - 1);
    if ($start_page < 1){
        $start_page = 1;
    }
    
    $end_page = ($now_block * $block);
    if ($max_page <= $end_page){
        $end_page = $max_page;
    }
# ---------------------- 데이터 처리 --------------------------- #
    $start_post = ($page-1) * $list_post;
    $no = $total_post - $start_post;
    
    $listing_data = mysqli_query($conn, "SELECT * FROM board ORDER BY id DESC LIMIT $start_post, $list_post");

    $str_title = "";

include("header.php"); ?>
        
        <div class="container">
            <center><h2>문스냅의 지속가능한 개발 게시판</h2></center>
            <div class="row">
                <?php
                    if (isset($_SESSION['userid'])){
                        echo '<div class="col-xs-7 col-sm-9 col-md-9 col-lg-10"></div>';
                        echo '<div class="col-xs-5 col-sm-3 col-md-3 col-lg-2">';
                        echo $_SESSION['userid']." 님"."<a class='btn btn-primary pull-right' href='./process_logout.php'>로그아웃</a></div><br>";
                    }
                    else{
                        echo "<a class='btn btn-primary pull-right' href='./login.php'>로그인</a>";
                    } ?>
            
            <table class="table table-hover table-bordered">
                <thead>
                    <br>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>글쓴이</th>
                        <th>조회수</th>
                        <th>날짜</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_array($listing_data)){
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td><a href='./view.php?page=$page&id=$row[id]'>$row[title]</a></td>";
                            echo "<td>$row[author]</td>";
                            echo "<td>$row[hits]</td>";
                            echo "<td>$row[created]</td>";
                            echo "</tr>";
                            $no = $no - 1;  
                        }                        
                        mysqli_close($conn);
                    ?>
                </tbody>
            </table>
                        
            <div class="row">
                <div class="col-xs-6 col-lg-6">
                    <a class="btn btn-primary" href="./write.php">글쓰기</a>
                </div>
                <div class="col-xs-6 col-lg-6">
                    <a class="btn btn-primary pull-right" href="./index.php?page=<?=$page?>">목록</a>
                </div>
            </div>
            <center>
            
            <ul class="pagination">
                <?php if($page>1) { ?>
                    <li><a href="./index.php?page=<?=$start_page?>"><<</a>
                    <li><a href="./index.php?page=<?=$page-1?>"><</a>
                <?php } ?>
                <?php for ($p=$start_page; $p<=$end_page; $p++){
                        if ($p==$page){ ?>
                            <li class="active"><a href="./index.php?page=<?=$p?>"><?=$p?></a>
                  <?php }
                        else{ ?>
                            <li><a href="./index.php?page=<?=$p?>"><?=$p?></a>
                  <?php }
                      } ?>
                <?php if($page<$max_page){ ?>
                        <li><a href="./index.php?page=<?=$page+1?>">></a>
                        <li><a href="./index.php?page=<?=$end_page?>">>></a>
                <?php } ?>
            </ul>
            </center>
        </div>        
    </body>
</html>

