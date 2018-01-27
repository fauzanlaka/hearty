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
function psychosocialAdd(path, formId){
    var URL = path + "?dummy=" + Math.random();
    var data = getFrmData(formId);
    //radio button data pes_marital_status
    var pes_marital_status = "";
    var num_pc = psychoSocialForm.elements['pes_marital_status'].length;
    for(i=0; i<num_pc; i++){
        var pms = psychoSocialForm.elements['pes_marital_status'][i];
        if(pms.checked){
            var pmsValue = pms.value;
        }
    }
    //radio button data pes_major_illneses
    var pes_major_illneses = "";
    var num_pc = psychoSocialForm.elements['pes_major_illneses'].length;
    for(i=0; i<num_pc; i++){
        var pmi = psychoSocialForm.elements['pes_major_illneses'][i];
        if(pmi.checked){
            var pmiValue = pmi.value;
        }
    }
    //radio button data pes_injuries
    var pes_injuries = "";
    var num_pc = psychoSocialForm.elements['pes_injuries'].length;
    for(i=0; i<num_pc; i++){
        var pi = psychoSocialForm.elements['pes_injuries'][i];
        if(pi.checked){
            var piValue = pi.value;
        }
    }
    //radio button data pes_surgeries
    var pes_surgeries = "";
    var num_pc = psychoSocialForm.elements['pes_surgeries'].length;
    for(i=0; i<num_pc; i++){
        var ps = psychoSocialForm.elements['pes_surgeries'][i];
        if(ps.checked){
            var psValue = ps.value;
        }
    }
    //radio button data pes_medication
    var pes_medication = "";
    var num_pc = psychoSocialForm.elements['pes_medication'].length;
    for(i=0; i<num_pc; i++){
        var pm = psychoSocialForm.elements['pes_medication'][i];
        if(pm.checked){
            var pmValue = pm.value;
        }
    }
    //radio button data pes_tobacco
    var pes_tobacco = "";
    var num_pc = psychoSocialForm.elements['pes_tobacco'].length;
    for(i=0; i<num_pc; i++){
        var pt = psychoSocialForm.elements['pes_tobacco'][i];
        if(pt.checked){
            var ptValue = pt.value;
        }
    }
    //radio button data pes_alcohol
    var pes_alcohol = "";
    var num_pc = psychoSocialForm.elements['pes_alcohol'].length;
    for(i=0; i<num_pc; i++){
        var pa = psychoSocialForm.elements['pes_alcohol'][i];
        if(pa.checked){
            var paValue = pa.value;
        }
    }
    //radio button data pes_drug
    var pes_drug = "";
    var num_pc = psychoSocialForm.elements['pes_drug'].length;
    for(i=0; i<num_pc; i++){
        var pd = psychoSocialForm.elements['pes_drug'][i];
        if(pd.checked){
            var pdValue = pd.value;
        }
    }
    //radio button data pes_changing_use
    var pes_changing_use = "";
    var num_pc = psychoSocialForm.elements['pes_changing_use'].length;
    for(i=0; i<num_pc; i++){
        var pcu = psychoSocialForm.elements['pes_changing_use'][i];
        if(pcu.checked){
            var pcuValue = pcu.value;
        }
    }
    var data = data + "&pmsValue=" + pmsValue + "&pmiValue=" + pmiValue + "&piValue=" + piValue + "&psValue=" + psValue + "&pmValue=" + pmValue + "&ptValue=" + ptValue + "&paValue=" + paValue + "&pdValue=" + pdValue + "&pcuValue=" + pcuValue;
    document.getElementById('processing').innerHTML = 'processing...';
    ajaxLoadFrw('post', URL, data, 'content');
}
function allegationAdd(path, formId){
    var URL = path + "?dummy=" + Math.random();
    var data = getFrmData(formId);
    //radio button data pes_ploblem_before_arrested
    var pes_ploblem_before_arrested = "";
    var num_pc = allegationForm.elements['pes_ploblem_before_arrested'].length;
    for(i=0; i<num_pc; i++){
        var ppba = allegationForm.elements['pes_ploblem_before_arrested'][i];
        if(ppba.checked){
            var ppbaValue = ppba.value;
        }
    }
    //radio button data pes_ploblem_before_arrested
    var pes_discriminated = "";
    var num_pc = allegationForm.elements['pes_discriminated'].length;
    for(i=0; i<num_pc; i++){
        var pd = allegationForm.elements['pes_discriminated'][i];
        if(pd.checked){
            var pdValue = pd.value;
        }
    }
    //radio button data pes_deprived_necessities
    var pes_discriminated = "";
    var num_pc = allegationForm.elements['pes_deprived_necessities'].length;
    for(i=0; i<num_pc; i++){
        var pdn = allegationForm.elements['pes_deprived_necessities'][i];
        if(pdn.checked){
            var pdnValue = pdn.value;
        }
    }
    //radio button data pes_separated_from_family
    var pes_separated_from_family = "";
    var num_pc = allegationForm.elements['pes_separated_from_family'].length;
    for(i=0; i<num_pc; i++){
        var psff = allegationForm.elements['pes_separated_from_family'][i];
        if(psff.checked){
            var psffValue = psff.value;
        }
    }
    //radio button data pes_physically_harmed
    var pes_separated_from_family = "";
    var num_pc = allegationForm.elements['pes_physically_harmed'].length;
    for(i=0; i<num_pc; i++){
        var pph = allegationForm.elements['pes_physically_harmed'][i];
        if(pph.checked){
            var pphValue = pph.value;
        }
    }
    //radio button data pes_sexually_harassed
    var pes_separated_from_family = "";
    var num_pc = allegationForm.elements['pes_sexually_harassed'].length;
    for(i=0; i<num_pc; i++){
        var psh = allegationForm.elements['pes_sexually_harassed'][i];
        if(psh.checked){
            var pshValue = psh.value;
        }
    }
    //radio button data pes_physical_home_search
    var pes_physical_home_search = "";
    var num_pc = allegationForm.elements['pes_physical_home_search'].length;
    for(i=0; i<num_pc; i++){
        var pphs = allegationForm.elements['pes_physical_home_search'][i];
        if(pphs.checked){
            var pphsValue = pphs.value;
        }
    }
    //radio button data pes_property_destroyed
    var pes_property_destroyed = "";
    var num_pc = allegationForm.elements['pes_property_destroyed'].length;
    for(i=0; i<num_pc; i++){
        var ppd = allegationForm.elements['pes_property_destroyed'][i];
        if(ppd.checked){
            var ppdValue = ppd.value;
        }
    }
    //radio button data pes_arrested_or_imprisoned
    var pes_arrested_or_imprisoned = "";
    var num_pc = allegationForm.elements['pes_arrested_or_imprisoned'].length;
    for(i=0; i<num_pc; i++){
        var pai = allegationForm.elements['pes_arrested_or_imprisoned'][i];
        if(pai.checked){
            var paiValue = pai.value;
        }
    }
    //radio button data pes_forced_harm_family
    var pes_arrested_or_imprisoned = "";
    var num_pc = allegationForm.elements['pes_forced_harm_family'].length;
    for(i=0; i<num_pc; i++){
        var pfhf = allegationForm.elements['pes_forced_harm_family'][i];
        if(pfhf.checked){
            var pfhfValue = pfhf.value;
        }
    }
    //radio button data pes_against_religious
    var pes_arrested_or_imprisoned = "";
    var num_pc = allegationForm.elements['pes_against_religious'].length;
    for(i=0; i<num_pc; i++){
        var par = allegationForm.elements['pes_against_religious'][i];
        if(par.checked){
            var parValue = par.value;
        }
    }
    //radio button data pes_against_religious
    var pes_threatened_harm = "";
    var num_pc = allegationForm.elements['pes_threatened_harm'].length;
    for(i=0; i<num_pc; i++){
        var pth = allegationForm.elements['pes_threatened_harm'][i];
        if(pth.checked){
            var pthValue = pth.value;
        }
    }
    //radio button data pes_family_members_arrested
    var pes_family_members_arrested = "";
    var num_pc = allegationForm.elements['pes_family_members_arrested'].length;
    for(i=0; i<num_pc; i++){
        var pfma = allegationForm.elements['pes_family_members_arrested'][i];
        if(pfma.checked){
            var pfmaValue = pfma.value;
        }
    }
    //radio button data pes_found_burial
    var pes_found_burial = "";
    var num_pc = allegationForm.elements['pes_found_burial'].length;
    for(i=0; i<num_pc; i++){
        var pfb = allegationForm.elements['pes_found_burial'][i];
        if(pfb.checked){
            var pfbValue = pfb.value;
        }
    }
    //radio button data pes_witnessed_violent
    var pes_witnessed_violent = "";
    var num_pc = allegationForm.elements['pes_witnessed_violent'].length;
    for(i=0; i<num_pc; i++){
        var pwv = allegationForm.elements['pes_witnessed_violent'][i];
        if(pwv.checked){
            var pwvValue = pwv.value;
        }
    }
    //radio button data pes_humiliation_family
    var pes_humiliation_family = "";
    var num_pc = allegationForm.elements['pes_humiliation_family'].length;
    for(i=0; i<num_pc; i++){
        var phf = allegationForm.elements['pes_humiliation_family'][i];
        if(phf.checked){
            var phfValue = phf.value;
        }
    }
    var data = data + "&ppbaValue=" + ppbaValue + "&pdValue=" + pdValue + "&pdnValue=" + pdnValue + "&psffValue=" + psffValue + "&pphValue=" + pphValue + "&pshValue=" + pshValue + '&pphsValue=' + pphsValue + "&ppdValue=" + ppdValue + "&paiValue=" + paiValue + "&pfhfValue=" + pfhfValue + "&parValue=" + parValue + "&pthValue=" + pthValue + "&pfmaValue=" + pfmaValue + "&pfbValue=" + pfbValue + "&pwvValue=" + pwvValue + "&phfValue=" + phfValue;
    document.getElementById('processing').innerHTML = 'processing...';
    ajaxLoadFrw('post', URL, data, 'content');
}