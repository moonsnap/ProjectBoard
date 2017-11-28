function valid_id(str_userid){
    var id_exp = /^[A-Za-z]+[A-Za-z0-9]{4,20}$/g;
    
    if(str_userid.value.trim().length>0){
        if(id_exp.test(str_userid.value)==false)
            return $("#msgId").text("5-20글자 영문, 숫자 사용");
        else
            return $("#msgId").text("");       
    }
}

function valid_pass(str_passwd){
    var pass_exp = /^[a-zA-Z0-9!@#$%^&*()?_~]{5,20}$/g;
    
    if(str_passwd.value.trim().length>0){
        if(pass_exp.test(str_passwd.value)==false)
            return $("#msgPass").text("5-20글자 영문, 숫자, 특수문자 사용");
        else
            return $("#msgPass").text("");
    }
}

function alert_focus(str_msg, targetid){
    alert(str_msg);
    $('#'+targetid).focus();
}