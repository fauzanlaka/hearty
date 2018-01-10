<?php
    header("content-type: text/javascript");
    include '../../../function/global.php';
    $connect = "../../../connect/connect.php";
    $pes_idcard = $_POST['pes_idcard'];
    $count = rowCount("person", "WHERE pes_idcard='$pes_idcard'", $connect);
    if($count>=1){
        echo "document.getElementById('idcardAlert').innerHTML = '<font color=\'red\'><b>data already exist</b></font>';";
    }else{
        echo "document.getElementById('idcardAlert').innerHTML = '';";
    }
?>

