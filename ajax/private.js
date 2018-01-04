//----------------------------------------profile--------------------------------------------
function system_setting(path, formId){
    dataUpdate(path, formId)
}
function username_edit(path, formId, lang_id){
    var username = document.getElementById('username').value;
    var newpassword = document.getElementById('newpassword').value;
    var con_newpassword = document.getElementById('con_newpassword').value;
    //ตรวจสอบการกรอก
    if(username==""){
        document.getElementById('username').focus();
    }else if(newpassword==""){
        document.getElementById('newpassword').focus();
    }else if(con_newpassword==""){
        document.getElementById('con_newpassword').focus();
    }else{
        //ข้อความแจ้งเตือน
        if(lang_id=='th'){
            var alertText = "<font color='red'>รหัสผ่านไม่ตรงกัน</font>";
        }else{
            var alertText = "<font color='red'>Passwords do not match</font>";
        }
        //เงื่อนไข
        if(newpassword!=con_newpassword){
            document.getElementById('confirm_new_password_alert').innerHTML = alertText;
        }else{
            dataUpdate(path, formId);
        }
    }
}