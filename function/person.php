<?php
    function personInfo($pes_id, $output, $connect){
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM person WHERE pes_id='$pes_id'");
        $result = mysqli_fetch_array($sql);
        switch ($output){
            case 'pes_idcard':
                return str_replace("\'", "&#39;", $result["pes_idcard"]);
                break;
            case 'pes_name_th':
                return str_replace("\'", "&#39;", $result["pes_name_th"]);
                break;
            case 'pes_lastname_th':
                return str_replace("\'", "&#39;", $result["pes_lastname_th"]);
                break;
            case 'pes_gender':
                return str_replace("\'", "&#39;", $result["pes_gender"]);
                break;
            case 'pes_birthdate':
                return $result['pes_birthdate'];
                break;
            case 'pes_nationality':
                return $result['pes_nationality'];
                break;
            case 'pes_gender':
                return $result['pes_gender'];
                break;
            case 'pes_house_no':
                return $result['pes_house_no'];
                break;
            case 'pes_place':
                return str_replace("\'", "&#39;", $result["pes_place"]);
                break;
            case 'pes_road':
                return str_replace("\'", "&#39;", $result["pes_road"]);
                break;
            case 'pes_soi':
                return str_replace("\'", "&#39;", $result["pes_soi"]);
                break;
            case 'pes_subdistrict':
                return str_replace("\'", "&#39;", $result["pes_subdistrict"]);
                break;
            case 'pes_district':
                return str_replace("\'", "&#39;", $result["pes_district"]);
                break;
            case 'pes_province':
                return str_replace("\'", "&#39;", $result["pes_province"]);
                break;
            case 'pes_post':
                return str_replace("\'", "&#39;", $result["pes_post"]);
                break;
            case 'pes_date_of_evaluation':
                return str_replace("\'", "&#39;", $result["pes_date_of_evaluation"]);
                break;
            case 'pes_religion':
                return str_replace("\'", "&#39;", $result["pes_religion"]);
                break;
            case 'pes_language_of_interview':
                return str_replace("\'", "&#39;", $result["pes_language_of_interview"]);
                break;
            case 'pes_referring_group':
                return str_replace("\'", "&#39;", $result["pes_referring_group"]);
                break;
            case 'pes_interpreter':
                return str_replace("\'", "&#39;", $result["pes_interpreter"]);
                break;
            case 'pes_interpreted_language':
                return str_replace("\'", "&#39;", $result["pes_interpreted_language"]);
                break;
            case 'pes_ethnic':
                return str_replace("\'", "&#39;", $result["pes_ethnic"]);
                break;
            case 'pes_ethnic_name':
                return str_replace("\'", "&#39;", $result["pes_ethnic_name"]);
                break;
            case 'ora_id':
                return $result['pes_referring_group'];
                break;
            case 'pes_question_th':
                return str_replace("\'", "&#39;", $result["pes_question_th"]);
                break;
            case 'pes_question_en':
                return str_replace("\'", "&#39;", $result["pes_question_en"]);
                break;
            case 'pes_permission_conduct':
                return str_replace("\'", "&#39;", $result["pes_permission_conduct"]);
                break;
            case 'pes_attend_school':
                return str_replace("\'", "&#39;", $result["pes_attend_school"]);
                break;
            case 'pes_primary_occupation_th':
                return str_replace("\'", "&#39;", $result["pes_primary_occupation_th"]);
                break;
            case 'pes_primary_occupation_en':
                return str_replace("\'", "&#39;", $result["pes_primary_occupation_en"]);
                break;
            case 'pes_marital_status':
                return str_replace("\'", "&#39;", $result["pes_marital_status"]);
                break;
            case 'pes_marital_specify_th':
                return str_replace("\'", "&#39;", $result["pes_marital_specify_th"]);
                break;
            case 'pes_marital_specify_en':
                return str_replace("\'", "&#39;", $result["pes_marital_specify_en"]);
                break;
            case 'pes_children':
                return str_replace("\'", "&#39;", $result["pes_children"]);
                break;
            case 'pes_major_illneses':
                return str_replace("\'", "&#39;", $result["pes_major_illneses"]);
                break;
            case 'pes_major_illnesses_specify_th':
                return str_replace("\'", "&#39;", $result["pes_major_illnesses_specify_th"]);
                break;
            case 'pes_major_illnesses_specify_en':
                return str_replace("\'", "&#39;", $result["pes_major_illnesses_specify_en"]);
                break;
            case 'pes_injuries':
                return str_replace("\'", "&#39;", $result["pes_injuries"]);
                break;
            case 'pes_injuries_specify_th':
                return str_replace("\'", "&#39;", $result["pes_injuries_specify_th"]);
                break;
            case 'pes_injuries_specify_en':
                return str_replace("\'", "&#39;", $result["pes_injuries_specify_en"]);
                break;
            case 'pes_surgeries':
                return str_replace("\'", "&#39;", $result["pes_surgeries"]);
                break;
            case 'pes_surgeries_specify_th':
                return str_replace("\'", "&#39;", $result["pes_surgeries_specify_th"]);
                break;
            case 'pes_surgeries_specify_en':
                return str_replace("\'", "&#39;", $result["pes_surgeries_specify_en"]);
                break;
            case 'pes_medication':
                return str_replace("\'", "&#39;", $result["pes_medication"]);
                break;
            case 'pes_medication_specify_th':
                return str_replace("\'", "&#39;", $result["pes_medication_specify_th"]);
                break;
            case 'pes_medication_specify_en':
                return str_replace("\'", "&#39;", $result["pes_medication_specify_en"]);
                break;
            case 'pes_tobacco':
                return str_replace("\'", "&#39;", $result["pes_tobacco"]);
                break;
            case 'pes_tobacco_specify':
                return str_replace("\'", "&#39;", $result["pes_tobacco_specify"]);
                break;
            case 'pes_alcohol':
                return str_replace("\'", "&#39;", $result["pes_tobacco"]);
                break;
            case 'pes_alcohol_specify':
                return str_replace("\'", "&#39;", $result["pes_alcohol_specify"]);
                break;
            case 'pes_drug':
                return str_replace("\'", "&#39;", $result["pes_drug"]);
                break;
            case 'pes_drug_specify_th':
                return str_replace("\'", "&#39;", $result["pes_drug_specify_th"]);
                break;
            case 'pes_drug_specify_en':
                return str_replace("\'", "&#39;", $result["pes_drug_specify_en"]);
                break;
            case 'pes_changing_use':
                return str_replace("\'", "&#39;", $result["pes_changing_use"]);
                break;
            case 'pes_changing_use_specify_th':
                return str_replace("\'", "&#39;", $result["pes_changing_use_specify_th"]);
                break;
            case 'pes_changing_use_specify_en':
                return str_replace("\'", "&#39;", $result["pes_changing_use_specify_en"]);
                break;
            case 'pes_family_relationship_th':
                return str_replace("\'", "&#39;", $result["pes_family_relationship_th"]);
                break;
            case 'pes_family_relationship_en':
                return str_replace("\'", "&#39;", $result["pes_family_relationship_en"]);
                break;
            case 'pes_work_or_education_th':
                return str_replace("\'", "&#39;", $result["pes_work_or_education_th"]);
                break;
            case 'pes_work_or_education_en':
                return str_replace("\'", "&#39;", $result["pes_work_or_education_en"]);
                break;
            case 'pes_financial_situation_th':
                return str_replace("\'", "&#39;", $result["pes_financial_situation_th"]);
                break;
            case 'pes_financial_situation_en':
                return str_replace("\'", "&#39;", $result["pes_financial_situation_en"]);
                break;
            case 'pes_social_activity_th':
                return str_replace("\'", "&#39;", $result["pes_social_activity_th"]);
                break;
            case 'pes_social_activity_en':
                return str_replace("\'", "&#39;", $result["pes_social_activity_en"]);
                break;
            case 'pes_political_activity_th':
                return str_replace("\'", "&#39;", $result["pes_political_activity_th"]);
                break;
            case 'pes_political_activity_en':
                return str_replace("\'", "&#39;", $result["pes_political_activity_en"]);
                break;
            case 'pes_exp_of_serious_th':
                return str_replace("\'", "&#39;", $result["pes_exp_of_serious_th"]);
                break;
            case 'pes_exp_of_serious_en':
                return str_replace("\'", "&#39;", $result["pes_exp_of_serious_en"]);
                break;
            case 'pes_religios_practice_th':
                return str_replace("\'", "&#39;", $result["pes_religios_practice_th"]);
                break;
            case 'pes_religios_practice_en':
                return str_replace("\'", "&#39;", $result["pes_religios_practice_en"]);
                break;
            case 'pes_daily_activity_th':
                return str_replace("\'", "&#39;", $result["pes_daily_activity_th"]);
                break;
            case 'pes_daily_activity_en':
                return str_replace("\'", "&#39;", $result["pes_daily_activity_en"]);
                break;
            case 'pes_interest_th':
                return str_replace("\'", "&#39;", $result["pes_interest_th"]);
                break;
            case 'pes_interest_en':
                return str_replace("\'", "&#39;", $result["pes_interest_en"]);
                break;
            case 'pes_future_plan_th':
                return str_replace("\'", "&#39;", $result["pes_future_plan_th"]);
                break;
            case 'pes_future_plan_en':
                return str_replace("\'", "&#39;", $result["pes_future_plan_en"]);
                break;
            case 'pes_ploblem_before_arrested':
                return str_replace("\'", "&#39;", $result["pes_ploblem_before_arrested"]);
                break;
            case 'pes_ploblem_before_arrested_specify_th':
                return str_replace("\'", "&#39;", $result["pes_ploblem_before_arrested_specify_th"]);
                break;
            case 'pes_ploblem_before_arrested_specify_en':
                return str_replace("\'", "&#39;", $result["pes_ploblem_before_arrested_specify_en"]);
                break;
            case 'pes_discriminated':
                return str_replace("\'", "&#39;", $result["pes_discriminated"]);
                break;
            case 'pes_discriminated_specify_th':
                return str_replace("\'", "&#39;", $result["pes_discriminated_specify_th"]);
                break;
            case 'pes_deprived_necessities':
                return str_replace("\'", "&#39;", $result["pes_deprived_necessities"]);
                break;
            case 'pes_deprived_necessities_specify_th':
                return str_replace("\'", "&#39;", $result["pes_deprived_necessities_specify_th"]);
                break;
            case 'pes_deprived_necessities_specify_en':
                return str_replace("\'", "&#39;", $result["pes_deprived_necessities_specify_en"]);
                break;
            case 'pes_separated_from_family':
                return str_replace("\'", "&#39;", $result["pes_separated_from_family"]);
                break;
            case 'pes_separated_from_family_th':
                return str_replace("\'", "&#39;", $result["pes_separated_from_family_th"]);
                break;
            case 'pes_separated_from_family_en':
                return str_replace("\'", "&#39;", $result["pes_separated_from_family_en"]);
                break;
            case 'pes_physically_harmed':
                return str_replace("\'", "&#39;", $result["pes_physically_harmed"]);
                break;
            case 'pes_physically_harmed_specify_th':
                return str_replace("\'", "&#39;", $result["pes_physically_harmed_specify_th"]);
                break;
            case 'pes_physically_harmed_specify_en':
                return str_replace("\'", "&#39;", $result["pes_physically_harmed_specify_en"]);
                break;
            case 'pes_sexually_harassed':
                return str_replace("\'", "&#39;", $result["pes_sexually_harassed"]);
                break;
            case 'pes_sexually_harassed_specify_th':
                return str_replace("\'", "&#39;", $result["pes_sexually_harassed_specify_th"]);
                break;
            case 'pes_sexually_harassed_specify_en':
                return str_replace("\'", "&#39;", $result["pes_sexually_harassed_specify_en"]);
                break;
            case 'pes_physical_home_search':
                return str_replace("\'", "&#39;", $result["pes_physical_home_search"]);
                break;
            case 'pes_physical_home_search_specify_th':
                return str_replace("\'", "&#39;", $result["pes_physical_home_search_specify_th"]);
                break;
            case 'pes_physical_home_search_specify_en':
                return str_replace("\'", "&#39;", $result["pes_physical_home_search_specify_en"]);
                break;
            case 'pes_property_destroyed':
                return str_replace("\'", "&#39;", $result["pes_property_destroyed"]);
                break;
            case 'pes_property_destroyed_specify_th':
                return str_replace("\'", "&#39;", $result["pes_property_destroyed_specify_th"]);
                break;
            case 'pes_property_destroyed_specify_en':
                return str_replace("\'", "&#39;", $result["pes_property_destroyed_specify_en"]);
                break;
            case 'pes_arrested_or_imprisoned':
                return str_replace("\'", "&#39;", $result["pes_arrested_or_imprisoned"]);
                break;
            case 'pes_arrested_or_imprisoned_specify_th':
                return str_replace("\'", "&#39;", $result["pes_arrested_or_imprisoned_specify_th"]);
                break;
            case 'pes_arrested_or_imprisoned_specify_en':
                return str_replace("\'", "&#39;", $result["pes_arrested_or_imprisoned_specify_en"]);
                break;
            case 'pes_forced_harm_family':
                return str_replace("\'", "&#39;", $result["pes_forced_harm_family"]);
                break;
            case 'pes_forced_harm_family_specify_th':
                return str_replace("\'", "&#39;", $result["pes_forced_harm_family_specify_th"]);
                break;
            case 'pes_forced_harm_family_specify_en':
                return str_replace("\'", "&#39;", $result["pes_forced_harm_family_specify_en"]);
                break;
            case 'pes_against_religious':
                return str_replace("\'", "&#39;", $result["pes_against_religious"]);
                break;
            case 'pes_against_religious_specify_th':
                return str_replace("\'", "&#39;", $result["pes_against_religious_specify_th"]);
                break;
            case 'pes_against_religious_specify_en':
                return str_replace("\'", "&#39;", $result["pes_against_religious_specify_en"]);
                break;
            case 'pes_threatened_harm':
                return str_replace("\'", "&#39;", $result["pes_threatened_harm"]);
                break;
            case 'pes_threatened_harm_specify_th':
                return str_replace("\'", "&#39;", $result["pes_threatened_harm_specify_th"]);
                break;
            case 'pes_threatened_harm_specify_en':
                return str_replace("\'", "&#39;", $result["pes_threatened_harm_specify_en"]);
                break;
            case 'pes_family_members_arrested':
                return str_replace("\'", "&#39;", $result["pes_family_members_arrested"]);
                break;
            case 'pes_family_members_arrested_specify_th':
                return str_replace("\'", "&#39;", $result["pes_family_members_arrested_specify_th"]);
                break;
            case 'pes_family_members_arrested_specify_en':
                return str_replace("\'", "&#39;", $result["pes_family_members_arrested_specify_en"]);
                break;
            case 'pes_found_burial':
                return str_replace("\'", "&#39;", $result["pes_found_burial"]);
                break;
            case 'pes_witnessed_violent':
                return str_replace("\'", "&#39;", $result["pes_witnessed_violent"]);
                break;
            case 'pes_witnessed_violent_specify_th':
                return str_replace("\'", "&#39;", $result["pes_witnessed_violent_specify_th"]);
                break;
            case 'pes_witnessed_violent_specify_en':
                return str_replace("\'", "&#39;", $result["pes_witnessed_violent_specify_en"]);
                break;
            case 'pes_humiliation_family':
                return str_replace("\'", "&#39;", $result["pes_humiliation_family"]);
                break;
            case 'pes_humiliation_family_specify_th':
                return str_replace("\'", "&#39;", $result["pes_humiliation_family_specify_th"]);
                break;
            case 'pes_humiliation_family_specify_en':
                return str_replace("\'", "&#39;", $result["pes_humiliation_family_specify_en"]);
                break;
            case 'pes_traumatic_experiences_specify_th':
                return str_replace("\'", "&#39;", $result["pes_traumatic_experiences_specify_th"]);
                break;
            case 'pes_traumatic_experiences_specify_en':
                return str_replace("\'", "&#39;", $result["pes_traumatic_experiences_specify_en"]);
                break;
            case 'pes_arrested_history_th':
                return str_replace("\'", "&#39;", $result["pes_arrested_history_th"]);
                break;
            case 'pes_arrested_history_en':
                return str_replace("\'", "&#39;", $result["pes_arrested_history_en"]);
                break;
            case 'pes_punch':
                return str_replace("\'", "&#39;", $result["pes_punch"]);
                break;
            case 'pes_kick':
                return str_replace("\'", "&#39;", $result["pes_kick"]);
                break;
            case 'pes_slap':
                return str_replace("\'", "&#39;", $result["pes_slap"]);
                break;
            case 'pes_wire':
                return str_replace("\'", "&#39;", $result["pes_wire"]);
                break;
            case 'pes_truncheons':
                return str_replace("\'", "&#39;", $result["pes_truncheons"]);
                break;
            case 'pes_falling_down':
                return str_replace("\'", "&#39;", $result["pes_falling_down"]);
                break;
            case 'pes_blunt_trauma_explain_th':
                return str_replace("\'", "&#39;", $result["pes_blunt_trauma_explain_th"]);
                break;
            case 'pes_blunt_trauma_explain_en':
                return str_replace("\'", "&#39;", $result["pes_blunt_trauma_explain_en"]);
                break;
            case 'pes_torture_frequency_th':
                return str_replace("\'", "&#39;", $result["pes_torture_frequency_th"]);
                break;
            case 'pes_torture_frequency_en':
                return str_replace("\'", "&#39;", $result["pes_torture_frequency_en"]);
                break;
            case 'pes_turture_duration_th':
                return str_replace("\'", "&#39;", $result["pes_turture_duration_th"]);
                break;
            case 'pes_turture_duration_en':
                return str_replace("\'", "&#39;", $result["pes_turture_duration_en"]);
                break;
            case 'pes_turture_restraint_th':
                return str_replace("\'", "&#39;", $result["pes_turture_restraint_th"]);
                break;
            case 'pes_turture_restraint_en':
                return str_replace("\'", "&#39;", $result["pes_turture_restraint_en"]);
                break;
            case 'pes_injury_location_th':
                return str_replace("\'", "&#39;", $result["pes_injury_location_th"]);
                break;
            case 'pes_injury_location_en':
                return str_replace("\'", "&#39;", $result["pes_injury_location_en"]);
                break;
            case 'pes_injury_observation_th':
                return str_replace("\'", "&#39;", $result["pes_injury_observation_th"]);
                break;
            case 'pes_injury_observation_en':
                return str_replace("\'", "&#39;", $result["pes_injury_observation_en"]);
                break;
            case 'pes_bruises':
                return str_replace("\'", "&#39;", $result["pes_bruises"]);
                break;
            case 'pes_bleeding':
                return str_replace("\'", "&#39;", $result["pes_bleeding"]);
                break;
            case 'pes_loss_of_consciousness':
                return str_replace("\'", "&#39;", $result["pes_loss_of_consciousness"]);
                break;
            case 'pes_numbness':
                return str_replace("\'", "&#39;", $result["pes_numbness"]);
                break;
            case 'pes_weakness':
                return str_replace("\'", "&#39;", $result["pes_weakness"]);
                break;
            case 'pes_head_trauma_other':
                return str_replace("\'", "&#39;", $result["pes_head_trauma_other"]);
                break;
            case 'pes_head_trauma_explain_th':
                return str_replace("\'", "&#39;", $result["pes_head_trauma_explain_th"]);
                break;
            case 'pes_head_trauma_explain_en':
                return str_replace("\'", "&#39;", $result["pes_head_trauma_explain_en"]);
                break;
            case 'pes_suspension':
                return str_replace("\'", "&#39;", $result["pes_bruises"]);
                break;
            case 'pes_stretching_limbs_apart':
                return str_replace("\'", "&#39;", $result["pes_stretching_limbs_apart"]);
                break;
            case 'pes_prolonged_constraint_of_movement':
                return str_replace("\'", "&#39;", $result["pes_prolonged_constraint_of_movement"]);
                break;
            case 'pes_forced_positioning':
                return str_replace("\'", "&#39;", $result["pes_forced_positioning"]);
                break;
            case 'pes_being_chained_or_tied':
                return str_replace("\'", "&#39;", $result["pes_being_chained_or_tied"]);
                break;
            case 'pes_placed_in_space':
                return str_replace("\'", "&#39;", $result["pes_placed_in_space"]);
                break;
            case 'pes_forced_to_stand':
                return str_replace("\'", "&#39;", $result["pes_forced_to_stand"]);
                break;
            case 'pes_lie_or_kneel_uncomfortable':
                return str_replace("\'", "&#39;", $result["pes_lie_or_kneel_uncomfortable"]);
                break;
            case 'pes_positional_torture_explain_th':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_explain_th"]);
                break;
            case 'pes_positional_torture_explain_en':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_explain_en"]);
                break;
            case 'pes_positional_torture_frequency_th':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_frequency_th"]);
                break;
            case 'pes_positional_torture_frequency_en':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_frequency_en"]);
                break;
            case 'pes_positional_torture_duration_th':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_duration_th"]);
                break;
            case 'pes_positional_torture_duration_en':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_duration_en"]);
                break;
            case 'pes_positional_torture_restraint_th':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_restraint_th"]);
                break;
            case 'pes_positional_torture_restraint_en':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_restraint_en"]);
                break;
            case 'pes_positional_torture_injury_location_th':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_injury_location_th"]);
                break;
            case 'pes_positional_torture_injury_location_en':
                return str_replace("\'", "&#39;", $result["pes_positional_torture_injury_location_en"]);
                break;
            case 'pes_positioanl_inturry_abservation_th':
                return str_replace("\'", "&#39;", $result["pes_positioanl_inturry_abservation_th"]);
                break;
            case 'pes_positioanl_inturry_abservation_en':
                return str_replace("\'", "&#39;", $result["pes_positioanl_inturry_abservation_en"]);
                break;
            case 'pes_exposed_to_heat':
                return str_replace("\'", "&#39;", $result["pes_exposed_to_heat"]);
                break;
            case 'pes_sun':
                return str_replace("\'", "&#39;", $result["pes_sun"]);
                break;
            case 'pes_rain':
                return str_replace("\'", "&#39;", $result["pes_rain"]);
                break;
            case 'pes_body_immersion':
                return str_replace("\'", "&#39;", $result["pes_body_immersion"]);
                break;
            case 'pes_cold':
                return str_replace("\'", "&#39;", $result["pes_cold"]);
                break;
            case 'pes_forced_to_sit_on_ice':
                return str_replace("\'", "&#39;", $result["pes_forced_to_sit_on_ice"]);
                break;
            case 'exposure_extreme_temperatures_th':
                return str_replace("\'", "&#39;", $result["exposure_extreme_temperatures_th"]);
                break;
            case 'exposure_extreme_temperatures_en':
                return str_replace("\'", "&#39;", $result["exposure_extreme_temperatures_en"]);
                break;
            case 'pes_extreme_temperatures_frequency_th':
                return str_replace("\'", "&#39;", $result["pes_extreme_temperatures_frequency_th"]);
                break;
            case 'pes_extreme_temperatures_frequency_en':
                return str_replace("\'", "&#39;", $result["pes_extreme_temperatures_frequency_en"]);
                break;
            case 'pes_extreme_temperatures_duration_th':
                return str_replace("\'", "&#39;", $result["pes_extreme_temperatures_duration_th"]);
                break;
            case 'pes_extreme_temperatures_duration_en':
                return str_replace("\'", "&#39;", $result["pes_extreme_temperatures_duration_en"]);
                break;
            case 'pes_extreme_temperatures_injury_location_th':
                return str_replace("\'", "&#39;", $result["pes_extreme_temperatures_injury_location_th"]);
                break;
            case 'pes_extreme_temperatures_injury_location_en':
                return str_replace("\'", "&#39;", $result["pes_extreme_temperatures_injury_location_en"]);
                break;
            case 'pes_extreme_temperatures_injury_observation_th':
                return str_replace("\'", "&#39;", $result["pes_extreme_temperatures_injury_observation_th"]);
                break;
            case 'pes_extreme_temperatures_injury_observation_en':
                return str_replace("\'", "&#39;", $result["pes_extreme_temperatures_injury_observation_en"]);
                break;
            case 'pes_burn_cigarettes':
                return str_replace("\'", "&#39;", $result["pes_burn_cigarettes"]);
                break;
            case 'pes_heated_instrument':
                return str_replace("\'", "&#39;", $result["pes_heated_instrument"]);
                break;
            case 'pes_scalding_liquid':
                return str_replace("\'", "&#39;", $result["pes_scalding_liquid"]);
                break;
            case 'pes_caustic_substance':
                return str_replace("\'", "&#39;", $result["pes_caustic_substance"]);
                break;
            case 'pes_burn_explain_th':
                return str_replace("\'", "&#39;", $result["pes_burn_explain_th"]);
                break;
            case 'pes_burn_frequency_th':
                return str_replace("\'", "&#39;", $result["pes_burn_frequency_th"]);
                break;
            case 'pes_burn_frequency_en':
                return str_replace("\'", "&#39;", $result["pes_burn_frequency_en"]);
                break;
            case 'pes_burn_duration_th':
                return str_replace("\'", "&#39;", $result["pes_burn_duration_th"]);
                break;
            case 'pes_burn_duration_en':
                return str_replace("\'", "&#39;", $result["pes_burn_duration_en"]);
                break;
            case 'pes_burn_restraint_th':
                return str_replace("\'", "&#39;", $result["pes_burn_restraint_th"]);
                break;
            case 'pes_burn_restraint_en':
                return str_replace("\'", "&#39;", $result["pes_burn_restraint_en"]);
                break;
            case 'pes_burn_injury_location_th':
                return str_replace("\'", "&#39;", $result["pes_burn_injury_location_th"]);
                break;
            case 'pes_burn_injury_location_en':
                return str_replace("\'", "&#39;", $result["pes_burn_injury_location_en"]);
                break;
            case 'pes_burn_injury_observations_th':
                return str_replace("\'", "&#39;", $result["pes_burn_injury_observations_th"]);
                break;
            case 'pes_burn_injury_observations_en':
                return str_replace("\'", "&#39;", $result["pes_burn_injury_observations_en"]);
                break;
            case 'pes_electric_shock_explain_th':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_explain_th"]);
                break;
            case 'pes_electric_shock_explain_en':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_explain_en"]);
                break;
            case 'pes_electric_shock_frequency_th':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_frequency_th"]);
                break;
            case 'pes_electric_shock_frequency_en':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_frequency_en"]);
                break;
            case 'pes_electric_shock_duration_th':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_duration_th"]);
                break;
            case 'pes_electric_shock_duration_en':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_duration_en"]);
                break;
            case 'pes_electric_shock_injury_location_th':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_injury_location_th"]);
                break;
            case 'pes_electric_shock_injury_location_en':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_injury_location_en"]);
                break;
            case 'pes_electric_shock_injury_observation_th':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_injury_observation_th"]);
                break;
            case 'pes_electric_shock_injury_observation_en':
                return str_replace("\'", "&#39;", $result["pes_electric_shock_injury_observation_en"]);
                break;
            case 'pes_asphyxiation_wet_and_dry_methods':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_wet_and_dry_methods"]);
                break;
            case 'pes_asphyxiation_drowning':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_drowning"]);
                break;
            case 'pes_asphyxiation_smothering':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_smothering"]);
                break;
            case 'pes_asphyxiation_choking_chemicals':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_choking_chemicals"]);
                break;
            case 'pes_asphyxiation_explain_th':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_explain_th"]);
                break;
            case 'pes_asphyxiation_explain_en':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_explain_en"]);
                break;
            case 'pes_asphyxiation_frequency_th':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_frequency_th"]);
                break;
            case 'pes_asphyxiation_frequency_en':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_frequency_en"]);
                break;
            case 'pes_asphyxiation_duration_th':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_duration_th"]);
                break;
            case 'pes_asphyxiation_duration_en':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_duration_en"]);
                break;
            case 'pes_asphyxiation_restraint_th':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_restraint_th"]);
                break;
            case 'pes_asphyxiation_restraint_en':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_restraint_en"]);
                break;
            case 'pes_asphyxiation_injury_observations_th':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_injury_observations_th"]);
                break;
            case 'pes_asphyxiation_injury_observations_en':
                return str_replace("\'", "&#39;", $result["pes_asphyxiation_injury_observations_en"]);
                break;
        }
    }
?>

