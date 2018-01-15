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
//----------------------------------------evaluation--------------------------------------------
function addNewPerson(path, formId){
    if(document.getElementById('pes_idcard').value == ""){
        document.getElementById('pes_idcard').focus();
    }else if(document.getElementById('pes_name_th').value == ""){
        document.getElementById('pes_name_th').focus();
    }else if(document.getElementById('pes_lastname_th').value == ""){
        document.getElementById('pes_lastname_th').focus();
    }else{
        var URL = path + "?dummy=" + Math.random();
        var data = getFrmData(formId);
        
        //radio button data pes_interpreter
        var pes_interptreter = "";
        var num_itp = biodataForm.elements['pes_interpreter'].length;
        for(i=0; i<num_itp; i++){
            var ipt = biodataForm.elements['pes_interpreter'][i];
            if(ipt.checked){
                var iptValue = ipt.value;
            }
        }
        //radio button data pes_ethnic
        var pes_interptreter = "";
        var num_etn = biodataForm.elements['pes_ethnic'].length;
        for(i=0; i<num_etn; i++){
            var etn = biodataForm.elements['pes_ethnic'][i];
            if(etn.checked){
                var etnValue = etn.value;
            }
        }
        
        document.getElementById('processing').innerHTML = "Processing...";
        var data = data + "&iptValue=" + iptValue + "&etnValue=" + etnValue;
        ajaxLoadFrw('post', URL, data, 'content');
    }
}
function personUpdate(path, formId){
    var URL = path + "?dummy=" + Math.random();
    var data = getFrmData(formId);
    //radio button data pes_interpreter
    var pes_interptreter = "";
    var num_itp = biodataForm.elements['pes_interpreter'].length;
    for(i=0; i<num_itp; i++){
        var ipt = biodataForm.elements['pes_interpreter'][i];
        if(ipt.checked){
            var iptValue = ipt.value;
        }
    }
    //radio button data pes_ethnic
    var pes_interptreter = "";
    var num_etn = biodataForm.elements['pes_ethnic'].length;
    for(i=0; i<num_etn; i++){
        var etn = biodataForm.elements['pes_ethnic'][i];
        if(etn.checked){
            var etnValue = etn.value;
        }
    }
    document.getElementById('processing').innerHTML = 'processing...';
    var data = data + "&iptValue=" + iptValue + "&etnValue=" + etnValue;
    ajaxLoadFrw('post', URL, data, 'content');
}
function consentAdd(path, formId){
    var URL = path + "?dummy=" + Math.random();
    var data = getFrmData(formId);
    
    //radio button data pes_permission_conduct
    var pes_permission_conduct = "";
    var num_pc = consentForm.elements['pes_permission_conduct'].length;
    for(i=0; i<num_pc; i++){
        var pc = consentForm.elements['pes_permission_conduct'][i];
        if(pc.checked){
            var pcValue = pc.value;
        }
    }
    document.getElementById('processing').innerHTML = 'processing...';
    var data = data + "&pcValue=" + pcValue;
    ajaxLoadFrw('post', URL, data, 'content');
}