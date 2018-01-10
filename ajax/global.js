//--------------------------------------Page Loading--------------------------------------
function formLoad(path, id, usrid){
    var URL = path + "?id=" + id + "&userid=" + usrid;
    var data = null;
    document.getElementById('ovl').style.display = "block";
    ajaxLoadFrw("GET", URL, data, "contentIn");
    alert(url);
}
//--------------------------------------Data insert--------------------------------------
function dataAdd(path, formId){
    var URL = path + "?dummy=" + Math.random();
    var data = getFrmData(formId);
    ajaxLoadFrw('post', URL, data, 'content');
} 
//--------------------------------------Data update--------------------------------------
function dataUpdate(path, formId){
    var URL = path + "?dummy=" + Math.random();
    var data = getFrmData(formId);
    ajaxLoadFrw('post', URL, data, 'content');
}
//--------------------------------------success alert action--------------------------------------
function alertClose(){
    document.getElementById('successAlert').style.display = 'none';
}
function alertClose1(){
    document.getElementById('successAlert1').style.display = 'none';
}
function alertClose2(){
    document.getElementById('successAlert2').style.display = 'none';
}
function deleteAlertClose(){
    document.getElementById('deleteAlert').style.display = 'none';
}
//-------------------------------------checking data----------------------------------------------
function dataCheck(path, formId, msg){
    var URL = path + "?dummy=" + Math.random();
    var data = getFrmData(formId);
    document.getElementById(msg).innerHTML = "<font color='orange'><b>checking...</b></font>";
    ajaxLoadFrw('post', URL, data, '');
}