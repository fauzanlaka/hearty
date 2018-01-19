<?php
    header("content-type: text/javascript");
    include '../../../function/global.php';
    include '../../../language/button_link.php';
    $lang_id = $_POST['lang_id'];
    $pes_id = $_POST['pes_id'];
    if($lang_id=='th'){
        $form_data = array(
            'pes_ploblem_before_arrested' => addslashes($_POST['ppbaValue']),
            'pes_ploblem_before_arrested_specify_th' => addslashes($_POST['pes_ploblem_before_arrested_specify_th']),
            'pes_discriminated' => addslashes($_POST['pdValue']),
            'pes_discriminated_specify_th' => addslashes($_POST['pes_discriminated_specify_th']),
            'pes_deprived_necessities' => addslashes($_POST['pdnValue']),
            'pes_deprived_necessities_specify_th' => addslashes($_POST['pes_deprived_necessities_specify_th']),
            'pes_separated_from_family' => addslashes($_POST['psffValue']),
            'pes_separated_from_family_th' => addslashes($_POST['pes_separated_from_family_th']),
            'pes_physically_harmed' => addslashes($_POST['pphValue']),
            'pes_physically_harmed_specify_th' => addslashes($_POST['pes_physically_harmed_specify_th']),
            'pes_sexually_harassed' => addslashes($_POST['pshValue']),
            'pes_sexually_harassed_specify_th' => addslashes($_POST['pes_sexually_harassed_specify_th']),
            'pes_physical_home_search' => addslashes($_POST['pphsValue']),
            'pes_physical_home_search_specify_th' => addslashes($_POST['pes_physical_home_search_specify_th']),
            'pes_property_destroyed' => addslashes($_POST['ppdValue']),
            'pes_property_destroyed_specify_th' => addslashes($_POST['pes_property_destroyed_specify_th'])
        );
    }else{
        $form_data = array(
            'pes_ploblem_before_arrested' => addslashes($_POST['ppbaValue']),
            'pes_ploblem_before_arrested_specify_en' => addslashes($_POST['pes_ploblem_before_arrested_specify_en']),
            'pes_discriminated' => addslashes($_POST['pdValue']),
            'pes_discriminated_specify_en' => addslashes($_POST['pes_discriminated_specify_en']),
            'pes_deprived_necessities' => addslashes($_POST['pdnValue']),
            'pes_deprived_necessities_specify_en' => addslashes($_POST['pes_deprived_necessities_specify_en']),
            'pes_separated_from_family' => addslashes($_POST['psffValue']),
            'pes_separated_from_family_en' => addslashes($_POST['pes_separated_from_family_en']),
            'pes_physically_harmed' => addslashes($_POST['pphValue']),
            'pes_physically_harmed_specify_en' => addslashes($_POST['pes_physically_harmed_specify_en']),
            'pes_sexually_harassed' => addslashes($_POST['pshValue']),
            'pes_sexually_harassed_specify_en' => addslashes($_POST['pes_sexually_harassed_specify_en']),
            'pes_physical_home_search' => addslashes($_POST['pphsValue']),
            'pes_physical_home_search_specify_en' => addslashes($_POST['pes_physical_home_search_specify_en']),
            'pes_property_destroyed' => addslashes($_POST['ppdValue']),
            'pes_property_destroyed_specify_en' => addslashes($_POST['pes_property_destroyed_specify_en'])
        );
    }
    //echo "alert('$pes_id');";
    dbRowUpdate('person', $form_data, "WHERE pes_id='$pes_id'");
    echo "swal(\"UPDATE COMPLETE!\", \"You clicked the button!\", \"success\");";
    $button = button_link($lang_id, 'save');
    echo "document.getElementById('processing').innerHTML = '<i class=\"fa fa-fw fa-lg fa-check-circle\"></i> $button';";
?>