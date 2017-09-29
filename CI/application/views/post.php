<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2><?=$post->title?></h2>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-1" align="center"><span class="glyphicon glyphicon-user"></span></div>
                        <div class="col-md-1" align="center"><?=$post->author?></div>    
                    </div>
                    <div class="row">
                        <div class="col-md-1" align="center"><span class="glyphicon glyphicon-eye-open"></span></div>
                        <div class="col-md-1" align="center"><?=$post->hits?></div>
                    </div>
                </div>
                <div class="panel-body"><?=$post->content?></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 btnbar">
            <div class="col-md-3">
                <a class="btn btn-primary" href="/index.php/board/write">글쓰기</a>
          <?php if($post->author == $this->session->userdata('nickname')) { ?>       
                    <a class="btn btn-primary" href="/index.php/board/modify/<?=$post->id?>">수정</a>
                    <a class="btn btn-primary" href="/index.php/board/delete/<?=$post->id?>" onclick="return confirm('삭제하시겠습니까?');">삭제</a>
          <?php } ?>
            </div>
            <div class="col-md-6"></div> 
            <div class="btn-group col-md-3">
                <div class="pull-right">
            <?php if($post->id>1){ ?>
                    <a class="btn btn-primary" href="/index.php/board/post/<?=$post->id-1?>">이전글</a>
            <?php }
                  if(!empty($post->id+1)){ ?>        
                    <a class="btn btn-primary" href="/index.php/board/post/<?=$post->id+1?>">다음글</a>
            <?php } ?>
                    <a class="btn btn-primary" href="/index.php/board">목록</a>
                </div>
            </div>                      
        </div>
        <div class="col-md-2"></div>

</div>