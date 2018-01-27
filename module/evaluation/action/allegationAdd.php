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
            'pes_property_destroyed_specify_th' => addslashes($_POST['pes_property_destroyed_specify_th']),
            'pes_arrested_or_imprisoned' => addslashes($_POST['paiValue']),
            'pes_arrested_or_imprisoned_specify_th' => addslashes($_POST['pes_arrested_or_imprisoned_specify_th']),
            'pes_forced_harm_family' => addslashes($_POST['pfhfValue']),
            'pes_forced_harm_family_specify_th' => addslashes($_POST['pes_forced_harm_family_specify_th']),
            'pes_against_religious' => addslashes($_POST['parValue']),
            'pes_against_religious_specify_th' => addslashes($_POST['pes_against_religious_specify_th']),
            'pes_threatened_harm' => addslashes($_POST['pthValue']),
            'pes_threatened_harm_specify_th' => addslashes($_POST['pes_threatened_harm_specify_th']),
            'pes_family_members_arrested' => addslashes($_POST['pfmaValue']),
            'pes_family_members_arrested_specify_th' => addslashes($_POST['pes_family_members_arrested_specify_th']),
            'pes_found_burial' => addslashes($_POST['pfbValue']),
            'pes_witnessed_violent' => addslashes($_POST['pwvValue']),
            'pes_witnessed_violent_specify_th' => addslashes($_POST['pes_witnessed_violent_specify_th']),
            'pes_humiliation_family' => addslashes($_POST['phfValue']),
            'pes_humiliation_family_specify_th' => addslashes($_POST['pes_humiliation_family_specify_th']),
            'pes_traumatic_experiences_specify_th' => addslashes($_POST['pes_traumatic_experiences_specify_th']),
            'pes_arrested_history_th' => addslashes($_POST['pes_arrested_history_th']),
            'pes_punch' => addslashes($_POST['pes_punch']),
            'pes_kick' => addslashes($_POST['pes_kick']),
            'pes_slap' => addslashes($_POST['pes_slap']),
            'pes_wire' => addslashes($_POST['pes_wire']),
            'pes_truncheons' => addslashes($_POST['pes_truncheons']),
            'pes_falling_down' => addslashes($_POST['pes_falling_down']),
            'pes_blunt_trauma_explain_th' => addslashes($_POST['pes_blunt_trauma_explain_th']),
            'pes_torture_frequency' => addslashes($_POST['pes_torture_frequency']),
            'pes_turture_duration' => addslashes($_POST['pes_turture_duration']),
            'pes_turture_restraint_th' => addslashes($_POST['pes_turture_restraint_th']),
            'pes_injury_location_th' => addslashes($_POST['pes_injury_location_th']),
            'pes_injury_observation_th' => addslashes($_POST['pes_injury_observation_th'])
            
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
            'pes_property_destroyed_specify_en' => addslashes($_POST['pes_property_destroyed_specify_en']),
            'pes_arrested_or_imprisoned' => addslashes($_POST['paiValue']),
            'pes_arrested_or_imprisoned_specify_en' => addslashes($_POST['pes_arrested_or_imprisoned_specify_en']),
            'pes_forced_harm_family' => addslashes($_POST['pfhfValue']),
            'pes_forced_harm_family_specify_en' => addslashes($_POST['pes_forced_harm_family_specify_en']),
            'pes_against_religious' => addslashes($_POST['parValue']),
            'pes_against_religious_specify_en' => addslashes($_POST['pes_against_religious_specify_en']),
            'pes_threatened_harm' => addslashes($_POST['pthValue']),
            'pes_threatened_harm_specify_en' => addslashes($_POST['pes_threatened_harm_specify_en']),
            'pes_family_members_arrested' => addslashes($_POST['pfmaValue']),
            'pes_family_members_arrested_specify_en' => addslashes($_POST['pes_family_members_arrested_specify_en']),
            'pes_found_burial' => addslashes($_POST['pfbValue']),
            'pes_witnessed_violent' => addslashes($_POST['pwvValue']),
            'pes_witnessed_violent_specify_en' => addslashes($_POST['pes_witnessed_violent_specify_en']),
            'pes_humiliation_family' => addslashes($_POST['phfValue']),
            'pes_humiliation_family_specify_en' => addslashes($_POST['pes_humiliation_family_specify_en']),
            'pes_traumatic_experiences_specify_en' => addslashes($_POST['pes_traumatic_experiences_specify_en']),
            'pes_arrested_history_en' => addslashes($_POST['pes_arrested_history_en']),
            'pes_punch' => addslashes($_POST['pes_punch']),
            'pes_kick' => addslashes($_POST['pes_kick']),
            'pes_slap' => addslashes($_POST['pes_slap']),
            'pes_wire' => addslashes($_POST['pes_wire']),
            'pes_truncheons' => addslashes($_POST['pes_truncheons']),
            'pes_falling_down' => addslashes($_POST['pes_falling_down']),
            'pes_blunt_trauma_explain_en' => addslashes($_POST['pes_blunt_trauma_explain_en']),
            'pes_torture_frequency' => addslashes($_POST['pes_torture_frequency']),
            'pes_turture_duration' => addslashes($_POST['pes_turture_duration']),
            'pes_turture_restraint_en' => addslashes($_POST['pes_turture_restraint_en']),
            'pes_injury_location_en' => addslashes($_POST['pes_injury_location_en']),
            'pes_injury_observation_en' => addslashes($_POST['pes_injury_observation_en'])
        );
    }
    //echo "alert('$pes_id');";
    dbRowUpdate('person', $form_data, "WHERE pes_id='$pes_id'");
    echo "swal(\"UPDATE COMPLETE!\", \"You clicked the button!\", \"success\");";
    $button = button_link($lang_id, 'save');
    echo "document.getElementById('processing').innerHTML = '<i class=\"fa fa-fw fa-lg fa-check-circle\"></i> $button';";
    ?>