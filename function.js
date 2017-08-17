<script src="/function.php"></script>

function check_blank(str_inputid){
    if($('#' + str_inputid).val().trim().length == 0){
        alert_focus('ID를 입력해주세요', str_inputid);
    } 
    
}

function valid_id(str_userid){
    var id_exp = /^[A-Za-z]+[A-Za-z0-9]{5,20}$/g;
    
    if(id_exp.test(str_userid)==false){
        alert_focus('ID는 5-20자의 영문, 숫자 조합이어야 합니다.', str_userid);
        exit();
    }
}

function valid_pass(str_passwd){
    var pass_exp = /^[a-zA-Z0-9!@#$%^&*()?_~]{6,20}$/g;
   
    if(pass_exp.test(str_passwd)==false){
        alert_focus('비밀번호는 5-20자의 영문, 숫자 조합이어야 합니다.', str_passwd);
        exit();
    }
}

function alert_focus(str_msg, targetid){
    alert(str_msg);
    $('#'+targetid).focus();
}