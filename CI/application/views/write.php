<div class="col-md-2"></div>

<?php if($this->session->userdata('is_login')){ ?> 
        <form action="/index.php/board/write" method="POST" class="col-md-8" onsubmit="return confirm('게시물을 등록하시겠습니까?');">
        <?php echo validation_errors(); ?>
            <input type="text" name="title" placeholder="제목" class="col-md-12"></input>
            <textarea name="content" placeholder="내용" class="col-md-12"></textarea>
            <br>
            <div class="pull-right">
                <input class="btn btn-success btn-lg" type="submit" value="등록"></input>
                <a href="/index.php/board"><input class="btn btn-danger btn-lg" type="button" value="취소"></input></a>
            </div>
        </form>
<?php }
      else{ ?>
        <script> 
            alert("로그인이 필요한 기능입니다.");
            location.href='/index.php/auth/login';
        </script>

<?php } ?>
<div class="col-md-2"></div>