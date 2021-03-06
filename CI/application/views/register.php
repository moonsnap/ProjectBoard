<?php $this->load->helper('form'); ?>
<div class="row">   
    <div class="col-md-5"></div> 
    <div class="col-md-4"> <?php echo validation_errors(); ?> </div>
</div>
<form class="form-horizontal" action="/index.php/auth/register" method="POST" onsubmit="return confirm('가입하시겠습니까?');">
    <div class="form-group">
        <label class="control-label col-md-5">Email</label>
        <div class="col-md-2">
            <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-5">닉네임</label>
        <div class="col-md-2"> 
            <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo set_value('nickname'); ?>" placeholder="닉네임">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-5">비밀번호</label>
        <div class="col-md-2"> 
            <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="비밀번호">
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-md-5">비밀번호 확인</label>
        <div class="col-md-2"> 
            <input type="password" class="form-control" id="re_password" name="re_password" value="<?php echo set_value('re_password'); ?>" placeholder="비밀번호 확인">
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-5"></div>
        <div class="col-md-2">
            <a class="btn btn-danger" href="/index.php/board/">메인</a>
            <input type="submit" class="btn btn-primary pull-right" value="등록"></button>            
        </div>
    </div>    
</form>