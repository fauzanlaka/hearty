<?php
    header("content-type: text/javascript");
    include '../../../function/global.php';
    include '../../../language/button_link.php';
    $lang_id = $_POST['lang_id'];
    $pes_id = $_POST['pes_id'];
    if($lang_id=='th'){
        $form_data = array(
            'pes_question_th' => addslashes($_POST['pes_question_th']),
            'pes_permission_conduct' => addslashes($_POST['pcValue']),
            'pes_last_editor' => addslashes($_POST['operator']),
            'pes_last_edit_date' => date("Y-m-d h:i:sa")
        );
    }else{
        $form_data = array(
            'pes_question_en' => addslashes($_POST['pes_question_en']),
            'pes_permission_conduct' => addslashes($_POST['pcValue']),
            'pes_last_editor' => addslashes($_POST['operator']),
            'pes_last_edit_date' => date("Y-m-d h:i:sa")
        );
    }
    
    dbRowUpdate('person', $form_data, "WHERE pes_id='$pes_id'");
    echo "swal(\"UPDATE COMPLETE!\", \"You clicked the button!\", \"success\");";
    $button = button_link($lang_id, 'save');
    echo "document.getElementById('processing').innerHTML = '<i class=\"fa fa-fw fa-lg fa-check-circle\"></i> $button';";
?>

