<?php $this->load->helper('form'); ?>
<div class="row">   
    <div class="col-md-5"></div> 
    <div class="col-md-4"> <?php echo validation_errors(); ?> </div>
</div>
<form class="form-horizontal" action="/index.php/auth/authentication" method="POST">
    <div class="form-group">
        <label class="control-label col-md-5">아이디</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="userid" name="userid" value="<?php echo set_value('userid'); ?>" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-5">비밀번호</label>
        <div class="col-md-2"> 
            <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="비밀번호">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-5"></div>
        <div class="col-md-2">
        <a class="btn btn-danger" href="/index.php/board/">메인</a>
            <button type="submit" class="btn btn-primary pull-right">로그인</button>            
        </div>       
    </div>    
</form>