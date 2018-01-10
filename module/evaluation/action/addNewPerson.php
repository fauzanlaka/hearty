<?php
    header("content-type: text/javascript");
    include '../../../function/global.php';
    $connect = "../../../connect/connect.php";
    //ตรวจสอบข้อมูลซำ้
    $pes_idcard = $_POST['pes_idcard'];
    $count = rowCount("person", "WHERE pes_idcard='$pes_idcard'", $connect);
    if($count>0){
        echo "document.getElementById('pes_idcard').focus();";
    }else{
        $form_data = array(
            'pes_idcard' => addslashes($_POST['pes_idcard']),
            'pes_name_th' => addslashes($_POST['pes_name_th']),
            'pes_lastname_th' => addslashes($_POST['pes_lastname_th']),
            'pes_birthdate' => addslashes($_POST['pes_birth_date']),
            'pes_nationality' => addslashes($_POST['pes_nationality']),
            'pes_gender' => addslashes($_POST['pes_gender']),
            'pes_house_no' => addslashes($_POST['pes_house_no']),
            'pes_place' => addslashes($_POST['pes_place']),
            'pes_road' => addslashes($_POST['pes_road']),
            'pes_soi' => addslashes($_POST['pes_soi']),
            'pes_subdistrict' => addslashes($_POST['pes_subdistrict']),
            'pes_district' => addslashes($_POST['pes_district']),
            'pes_province' => addslashes($_POST['pes_province']),
            'pes_post' => addslashes($_POST['pes_post']),
            'pes_date_of_evaluation' => addslashes($_POST['pes_date_of_evaluation']),
            'pes_religion' => addslashes($_POST['pes_religion']),
            'pes_language_of_interview' => addslashes($_POST['pes_language_of_interview']),
            'pes_referring_group' => addslashes($_POST['pes_referring_group']),
            'pes_interpreter' => addslashes($_POST['iptValue']),
            'pes_interpreted_language' => addslashes($_POST['pes_interpreted_language']),
            'pes_ethnic' => addslashes($_POST['etnValue']),
            'pes_ethnic_name' => addslashes($_POST['pes_ethnic_name'])
        );
        dbRowInsert('person', $form_data);
        echo "location.reload();";
    }
?>

