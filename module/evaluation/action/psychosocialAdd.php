<?php
    header("content-type: text/javascript");
    include '../../../function/global.php';
    include '../../../language/button_link.php';
    $lang_id = $_POST['lang_id'];
    $pes_id = $_POST['pes_id'];
    if($lang_id=='th'){
        $form_data = array(
            'pes_attend_school' => addslashes($_POST['pes_attend_school']),
            'pes_primary_occupation_th' => addslashes($_POST['pes_primary_occupation_th']),
            'pes_marital_status' => addslashes($_POST['pmsValue']),
            'pes_marital_specify_th' => addslashes($_POST['pes_marital_specify_th']),
            'pes_children' => addslashes($_POST['pes_children']),
            'pes_major_illneses' => addslashes($_POST['pmiValue']),
            'pes_major_illnesses_specify_th' => addslashes($_POST['pes_major_illnesses_specify_th']),
            'pes_injuries' => addslashes($_POST['piValue']),
            'pes_injuries_specify_th' => addslashes($_POST['pes_injuries_specify_th']),
            'pes_surgeries' => addslashes($_POST['psValue']),
            'pes_surgeries_specify_th' => addslashes($_POST['pes_surgeries_specify_th']),
            'pes_medication' => addslashes($_POST['pmValue']),
            'pes_medication_specify_th' => addslashes($_POST['pes_medication_specify_th']),
            'pes_tobacco' => addslashes($_POST['ptValue']),
            'pes_tobacco_specify' => addslashes($_POST['pes_tobacco_specify']),
            'pes_alcohol' => addslashes($_POST['paValue']),
            'pes_alcohol_specify' => addslashes($_POST['pes_alcohol_specify']),
            'pes_drug' => addslashes($_POST['pdValue']),
            'pes_drug_specify_th' => addslashes($_POST['pes_drug_specify_th']),
            'pes_changing_use' => addslashes($_POST['pcuValue']),
            'pes_changing_use_specify_th' => addslashes($_POST['pes_changing_use_specify_th']),
             'pes_family_relationship_th' => addslashes($_POST['pes_family_relationship_th']),
            'pes_work_or_education_th' => addslashes($_POST['pes_work_or_education_th']),
            'pes_financial_situation_th' => addslashes($_POST['pes_financial_situation_th']),
            'pes_social_activity_th' => addslashes($_POST['pes_social_activity_th']),
            'pes_political_activity_th' => addslashes($_POST['pes_political_activity_th']),
            'pes_exp_of_serious_th' => addslashes($_POST['pes_exp_of_serious_th']),
            'pes_religios_practice_th' => addslashes($_POST['pes_religios_practice_th']),
            'pes_daily_activity_th' => addslashes($_POST['pes_daily_activity_th']),
            'pes_interest_th' => addslashes($_POST['pes_interest_th']),
            'pes_future_plan_th' => addslashes($_POST['pes_future_plan_th']),
            'pes_last_editor' => addslashes($_POST['operator']),
            'pes_last_edit_date' => date("Y-m-d h:i:sa")
        );
    }else{
        $form_data = array(
            'pes_attend_school' => addslashes($_POST['pes_attend_school']),
            'pes_primary_occupation_en' => addslashes($_POST['pes_primary_occupation_en']),
            'pes_marital_status' => addslashes($_POST['pmsValue']),
            'pes_marital_specify_en' => addslashes($_POST['pes_marital_specify_en']),
            'pes_children' => addslashes($_POST['pes_children']),
            'pes_major_illneses' => addslashes($_POST['pmiValue']),
            'pes_major_illnesses_specify_en' => addslashes($_POST['pes_major_illnesses_specify_en']),
            'pes_injuries' => addslashes($_POST['piValue']),
            'pes_injuries_specify_en' => addslashes($_POST['pes_injuries_specify_en']),
            'pes_surgeries' => addslashes($_POST['psValue']),
            'pes_surgeries_specify_en' => addslashes($_POST['pes_surgeries_specify_en']),
            'pes_medication' => addslashes($_POST['pmValue']),
            'pes_medication_specify_en' => addslashes($_POST['pes_medication_specify_en']),
            'pes_tobacco' => addslashes($_POST['ptValue']),
            'pes_tobacco_specify' => addslashes($_POST['pes_tobacco_specify']),
            'pes_alcohol' => addslashes($_POST['paValue']),
            'pes_alcohol_specify' => addslashes($_POST['pes_alcohol_specify']),
            'pes_drug' => addslashes($_POST['pdValue']),
            'pes_drug_specify_en' => addslashes($_POST['pes_drug_specify_en']),
            'pes_changing_use' => addslashes($_POST['pcuValue']),
            'pes_changing_use_specify_en' => addslashes($_POST['pes_changing_use_specify_en']),
            'pes_family_relationship_en' => addslashes($_POST['pes_family_relationship_en']),
            'pes_work_or_education_en' => addslashes($_POST['pes_work_or_education_en']),
            'pes_financial_situation_en' => addslashes($_POST['pes_financial_situation_en']),
            'pes_social_activity_en' => addslashes($_POST['pes_social_activity_en']),
            'pes_political_activity_en' => addslashes($_POST['pes_political_activity_en']),
            'pes_exp_of_serious_en' => addslashes($_POST['pes_exp_of_serious_en']),
            'pes_religios_practice_en' => addslashes($_POST['pes_religios_practice_en']),
            'pes_daily_activity_en' => addslashes($_POST['pes_daily_activity_en']),
            'pes_interest_en' => addslashes($_POST['pes_interest_en']),
            'pes_future_plan_en' => addslashes($_POST['pes_future_plan_en']),
            'pes_last_editor' => addslashes($_POST['operator']),
            'pes_last_edit_date' => date("Y-m-d h:i:sa")
        );
    }
    //echo "alert('$pes_id');";
    dbRowUpdate('person', $form_data, "WHERE pes_id='$pes_id'");
    echo "swal(\"UPDATE COMPLETE!\", \"You clicked the button!\", \"success\");";
    $button = button_link($lang_id, 'save');
    echo "document.getElementById('processing').innerHTML = '<i class=\"fa fa-fw fa-lg fa-check-circle\"></i> $button';";
?>


