-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2018 at 09:23 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hearty`
--

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `ora_id` int(10) NOT NULL,
  `ora_name_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ora_name_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ora_short_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`ora_id`, `ora_name_th`, `ora_name_en`, `ora_short_name`) VALUES
(1, 'ศูนย์ทนายความมุสลิม ยะลา', '', ''),
(2, 'ศูนย์ทนายความมุสลิม ปัตตานี', '', ''),
(3, 'ศูนย์ทนายความมุสลิม นราธิวาส', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `pes_id` int(10) NOT NULL,
  `pes_idcard` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pes_name_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_lastname_th` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_birthdate` date NOT NULL,
  `pes_nationality` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_house_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_place` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_road` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_soi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_subdistrict` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_province` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_post` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_date_of_evaluation` date NOT NULL,
  `pes_religion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_language_of_interview` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_referring_group` int(10) NOT NULL,
  `pes_interpreter` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_interpreted_language` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_ethnic` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_ethnic_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_photo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_last_editor` int(10) NOT NULL,
  `pes_last_edit_date` datetime NOT NULL,
  `pes_question_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_question_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_permission_conduct` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_attend_school` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_primary_occupation_th` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_primary_occupation_en` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_marital_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pes_marital_specify_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pes_marital_specify_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pes_children` int(5) NOT NULL,
  `pes_major_illneses` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_major_illnesses_specify_th` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_major_illnesses_specify_en` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_injuries` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_injuries_specify_th` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_injuries_specify_en` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_surgeries` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_surgeries_specify_th` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_surgeries_specify_en` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_medication` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_medication_specify_th` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_medication_specify_en` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_tobacco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pes_tobacco_specify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_alcohol` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_alcohol_specify` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_drug` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_drug_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_drug_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_changing_use` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_changing_use_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_changing_use_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_family_relationship_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_family_relationship_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_work_or_education_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_work_or_education_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_financial_situation_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_financial_situation_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_social_activity_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_social_activity_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_political_activity_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_political_activity_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_exp_of_serious_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_exp_of_serious_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_religios_practice_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_religios_practice_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_daily_activity_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_daily_activity_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_interest_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_interest_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_future_plan_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_future_plan_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_ploblem_before_arrested` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_ploblem_before_arrested_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_ploblem_before_arrested_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_discriminated` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_discriminated_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_discriminated_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_deprived_necessities` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_deprived_necessities_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_deprived_necessities_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_separated_from_family` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_separated_from_family_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_separated_from_family_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_physically_harmed` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_physically_harmed_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_physically_harmed_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_sexually_harassed` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_sexually_harassed_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_sexually_harassed_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_physical_home_search` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_physical_home_search_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_physical_home_search_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_property_destroyed` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_property_destroyed_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_property_destroyed_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_arrested_or_imprisoned` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_arrested_or_imprisoned_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_arrested_or_imprisoned_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_forced_harm_family` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_forced_harm_family_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_forced_harm_family_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_against_religious` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_against_religious_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_against_religious_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_threatened_harm` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_threatened_harm_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_threatened_harm_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_family_members_arrested` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_family_members_arrested_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_family_members_arrested_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_found_burial` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pes_witnessed_violent` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_witnessed_violent_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_witnessed_violent_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_humiliation_family` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pes_humiliation_family_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_humiliation_family_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_traumatic_experiences_specify_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_traumatic_experiences_specify_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_arrested_history_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_arrested_history_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_punch` int(2) NOT NULL,
  `pes_kick` int(2) NOT NULL,
  `pes_slap` int(2) NOT NULL,
  `pes_wire` int(2) NOT NULL,
  `pes_truncheons` int(2) NOT NULL,
  `pes_falling_down` int(2) NOT NULL,
  `pes_blunt_trauma_explain_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_blunt_trauma_explain_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_turture_duration_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_turture_duration_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_torture_frequency_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_torture_frequency_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_turture_restraint_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_turture_restraint_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_injury_location_th` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pes_injury_location_en` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pes_injury_observation_th` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_injury_observation_en` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pes_bruises` int(1) NOT NULL,
  `pes_bleeding` int(1) NOT NULL,
  `pes_loss_of_consciousness` int(1) NOT NULL,
  `pes_numbness` int(1) NOT NULL,
  `pes_weakness` int(1) NOT NULL,
  `pes_head_trauma_other` int(1) NOT NULL,
  `pes_head_trauma_explain_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_head_trauma_explain_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_suspension` int(1) NOT NULL,
  `pes_stretching_limbs_apart` int(1) NOT NULL,
  `pes_prolonged_constraint_of_movement` int(1) NOT NULL,
  `pes_forced_positioning` int(1) NOT NULL,
  `pes_being_chained_or_tied` int(1) NOT NULL,
  `pes_placed_in_space` int(1) NOT NULL,
  `pes_forced_to_stand` int(1) NOT NULL,
  `pes_lie_or_kneel_uncomfortable` int(1) NOT NULL,
  `pes_positional_torture_explain_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positional_torture_explain_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positional_torture_frequency_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positional_torture_frequency_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positional_torture_duration_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positional_torture_duration_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positional_torture_restraint_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positional_torture_restraint_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positional_torture_injury_location_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positional_torture_injury_location_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positioanl_inturry_abservation_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_positioanl_inturry_abservation_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_exposed_to_heat` int(1) NOT NULL,
  `pes_sun` int(1) NOT NULL,
  `pes_rain` int(1) NOT NULL,
  `pes_body_immersion` int(1) NOT NULL,
  `pes_cold` int(1) NOT NULL,
  `pes_forced_to_sit_on_ice` int(1) NOT NULL,
  `exposure_extreme_temperatures_th` text COLLATE utf8_unicode_ci NOT NULL,
  `exposure_extreme_temperatures_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_extreme_temperatures_frequency_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_extreme_temperatures_frequency_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_extreme_temperatures_duration_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_extreme_temperatures_duration_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_extreme_temperatures_injury_location_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_extreme_temperatures_injury_location_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_extreme_temperatures_injury_observation_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_extreme_temperatures_injury_observation_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_cigarettes` int(1) NOT NULL,
  `pes_heated_instrument` int(1) NOT NULL,
  `pes_scalding_liquid` int(1) NOT NULL,
  `pes_caustic_substance` int(1) NOT NULL,
  `pes_burn_explain_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_explain_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_frequency_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_frequency_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_duration_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_duration_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_restraint_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_restraint_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_injury_location_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_injury_location_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_injury_observations_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_burn_injury_observations_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_explain_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_explain_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_frequency_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_frequency_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_duration_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_duration_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_injury_location_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_injury_location_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_injury_observation_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_electric_shock_injury_observation_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_wet_and_dry_methods` int(1) NOT NULL,
  `pes_asphyxiation_drowning` int(1) NOT NULL,
  `pes_asphyxiation_smothering` int(1) NOT NULL,
  `pes_asphyxiation_choking_chemicals` int(1) NOT NULL,
  `pes_asphyxiation_explain_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_explain_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_frequency_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_frequency_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_duration_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_duration_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_restraint_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_restraint_en` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_injury_observations_th` text COLLATE utf8_unicode_ci NOT NULL,
  `pes_asphyxiation_injury_observations_en` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`pes_id`, `pes_idcard`, `pes_name_th`, `pes_lastname_th`, `pes_birthdate`, `pes_nationality`, `pes_gender`, `pes_house_no`, `pes_place`, `pes_road`, `pes_soi`, `pes_subdistrict`, `pes_district`, `pes_province`, `pes_post`, `pes_date_of_evaluation`, `pes_religion`, `pes_language_of_interview`, `pes_referring_group`, `pes_interpreter`, `pes_interpreted_language`, `pes_ethnic`, `pes_ethnic_name`, `pes_photo`, `pes_last_editor`, `pes_last_edit_date`, `pes_question_th`, `pes_question_en`, `pes_permission_conduct`, `pes_attend_school`, `pes_primary_occupation_th`, `pes_primary_occupation_en`, `pes_marital_status`, `pes_marital_specify_th`, `pes_marital_specify_en`, `pes_children`, `pes_major_illneses`, `pes_major_illnesses_specify_th`, `pes_major_illnesses_specify_en`, `pes_injuries`, `pes_injuries_specify_th`, `pes_injuries_specify_en`, `pes_surgeries`, `pes_surgeries_specify_th`, `pes_surgeries_specify_en`, `pes_medication`, `pes_medication_specify_th`, `pes_medication_specify_en`, `pes_tobacco`, `pes_tobacco_specify`, `pes_alcohol`, `pes_alcohol_specify`, `pes_drug`, `pes_drug_specify_th`, `pes_drug_specify_en`, `pes_changing_use`, `pes_changing_use_specify_th`, `pes_changing_use_specify_en`, `pes_family_relationship_th`, `pes_family_relationship_en`, `pes_work_or_education_th`, `pes_work_or_education_en`, `pes_financial_situation_th`, `pes_financial_situation_en`, `pes_social_activity_th`, `pes_social_activity_en`, `pes_political_activity_th`, `pes_political_activity_en`, `pes_exp_of_serious_th`, `pes_exp_of_serious_en`, `pes_religios_practice_th`, `pes_religios_practice_en`, `pes_daily_activity_th`, `pes_daily_activity_en`, `pes_interest_th`, `pes_interest_en`, `pes_future_plan_th`, `pes_future_plan_en`, `pes_ploblem_before_arrested`, `pes_ploblem_before_arrested_specify_th`, `pes_ploblem_before_arrested_specify_en`, `pes_discriminated`, `pes_discriminated_specify_th`, `pes_discriminated_specify_en`, `pes_deprived_necessities`, `pes_deprived_necessities_specify_th`, `pes_deprived_necessities_specify_en`, `pes_separated_from_family`, `pes_separated_from_family_th`, `pes_separated_from_family_en`, `pes_physically_harmed`, `pes_physically_harmed_specify_th`, `pes_physically_harmed_specify_en`, `pes_sexually_harassed`, `pes_sexually_harassed_specify_th`, `pes_sexually_harassed_specify_en`, `pes_physical_home_search`, `pes_physical_home_search_specify_th`, `pes_physical_home_search_specify_en`, `pes_property_destroyed`, `pes_property_destroyed_specify_th`, `pes_property_destroyed_specify_en`, `pes_arrested_or_imprisoned`, `pes_arrested_or_imprisoned_specify_th`, `pes_arrested_or_imprisoned_specify_en`, `pes_forced_harm_family`, `pes_forced_harm_family_specify_th`, `pes_forced_harm_family_specify_en`, `pes_against_religious`, `pes_against_religious_specify_th`, `pes_against_religious_specify_en`, `pes_threatened_harm`, `pes_threatened_harm_specify_th`, `pes_threatened_harm_specify_en`, `pes_family_members_arrested`, `pes_family_members_arrested_specify_th`, `pes_family_members_arrested_specify_en`, `pes_found_burial`, `pes_witnessed_violent`, `pes_witnessed_violent_specify_th`, `pes_witnessed_violent_specify_en`, `pes_humiliation_family`, `pes_humiliation_family_specify_th`, `pes_humiliation_family_specify_en`, `pes_traumatic_experiences_specify_th`, `pes_traumatic_experiences_specify_en`, `pes_arrested_history_th`, `pes_arrested_history_en`, `pes_punch`, `pes_kick`, `pes_slap`, `pes_wire`, `pes_truncheons`, `pes_falling_down`, `pes_blunt_trauma_explain_th`, `pes_blunt_trauma_explain_en`, `pes_turture_duration_th`, `pes_turture_duration_en`, `pes_torture_frequency_th`, `pes_torture_frequency_en`, `pes_turture_restraint_th`, `pes_turture_restraint_en`, `pes_injury_location_th`, `pes_injury_location_en`, `pes_injury_observation_th`, `pes_injury_observation_en`, `pes_bruises`, `pes_bleeding`, `pes_loss_of_consciousness`, `pes_numbness`, `pes_weakness`, `pes_head_trauma_other`, `pes_head_trauma_explain_th`, `pes_head_trauma_explain_en`, `pes_suspension`, `pes_stretching_limbs_apart`, `pes_prolonged_constraint_of_movement`, `pes_forced_positioning`, `pes_being_chained_or_tied`, `pes_placed_in_space`, `pes_forced_to_stand`, `pes_lie_or_kneel_uncomfortable`, `pes_positional_torture_explain_th`, `pes_positional_torture_explain_en`, `pes_positional_torture_frequency_th`, `pes_positional_torture_frequency_en`, `pes_positional_torture_duration_th`, `pes_positional_torture_duration_en`, `pes_positional_torture_restraint_th`, `pes_positional_torture_restraint_en`, `pes_positional_torture_injury_location_th`, `pes_positional_torture_injury_location_en`, `pes_positioanl_inturry_abservation_th`, `pes_positioanl_inturry_abservation_en`, `pes_exposed_to_heat`, `pes_sun`, `pes_rain`, `pes_body_immersion`, `pes_cold`, `pes_forced_to_sit_on_ice`, `exposure_extreme_temperatures_th`, `exposure_extreme_temperatures_en`, `pes_extreme_temperatures_frequency_th`, `pes_extreme_temperatures_frequency_en`, `pes_extreme_temperatures_duration_th`, `pes_extreme_temperatures_duration_en`, `pes_extreme_temperatures_injury_location_th`, `pes_extreme_temperatures_injury_location_en`, `pes_extreme_temperatures_injury_observation_th`, `pes_extreme_temperatures_injury_observation_en`, `pes_burn_cigarettes`, `pes_heated_instrument`, `pes_scalding_liquid`, `pes_caustic_substance`, `pes_burn_explain_th`, `pes_burn_explain_en`, `pes_burn_frequency_th`, `pes_burn_frequency_en`, `pes_burn_duration_th`, `pes_burn_duration_en`, `pes_burn_restraint_th`, `pes_burn_restraint_en`, `pes_burn_injury_location_th`, `pes_burn_injury_location_en`, `pes_burn_injury_observations_th`, `pes_burn_injury_observations_en`, `pes_electric_shock_explain_th`, `pes_electric_shock_explain_en`, `pes_electric_shock_frequency_th`, `pes_electric_shock_frequency_en`, `pes_electric_shock_duration_th`, `pes_electric_shock_duration_en`, `pes_electric_shock_injury_location_th`, `pes_electric_shock_injury_location_en`, `pes_electric_shock_injury_observation_th`, `pes_electric_shock_injury_observation_en`, `pes_asphyxiation_wet_and_dry_methods`, `pes_asphyxiation_drowning`, `pes_asphyxiation_smothering`, `pes_asphyxiation_choking_chemicals`, `pes_asphyxiation_explain_th`, `pes_asphyxiation_explain_en`, `pes_asphyxiation_frequency_th`, `pes_asphyxiation_frequency_en`, `pes_asphyxiation_duration_th`, `pes_asphyxiation_duration_en`, `pes_asphyxiation_restraint_th`, `pes_asphyxiation_restraint_en`, `pes_asphyxiation_injury_observations_th`, `pes_asphyxiation_injury_observations_en`) VALUES
(64, '1950500081808', 'อารีม', 'มานะ', '1990-01-10', 'thai/malay', 'male', 'ุ65', '4', '-', '-', 'ยะหา', 'ยะหา', 'ยะลา', '95120', '2018-01-10', 'อิสลาม', 'thai', 1, 'Yes', 'thai', 'Yes', 'patani', '', 1, '2018-01-29 07:11:38', 'ภาษาไทย', 'English', 'Yes', '10', 'ทำนา ทำไร่', 'programmer', 'other', 'โหดร้าย', 'sadness', 10, 'yes', 'ตับอักเสบ', 'ok', 'yes', 'ถูกยิง', 'ko', 'yes', 'ผ่าหัวใจ', 'nn', 'yes', 'แก้ปวดหัว', 'nn', 'yes', '5', 'yes', '5', 'yes', 'กัญชา', 'nnnn', 'yes', 'ลดลง', 'nnn', 'ทุกคนเข้าใจกัน', 'nnnnnn', 'ฉันได้ค่าตอบแทนน้อยมาก', 'knknknn', 'ค่อนข้างแยก', 'nknonkn', 'nklnlknlnln', 'dsadsada', 'เคารพประชาธิปไตย', 'nlnlnlnln', 'ไม่เคย', 'nklnklnlnk', 'ทำเป็นสมำ่เสมอ', 'nlknlnln', 'ทำงานตลอด', 'nlnklnlkn', 'การทหาร', 'nknlnln', 'เป็นนักรบ', 'knlnlknln', 'yes', 'ปัญหาการคุกคาม', 'efwefewfwef', 'yes', 'เหยียดหยาม', '', 'yes', 'เบี้ยเลี้ยงผู้สูงวัย', '', 'yes', 'น้องสาวถูกข่มขืน', '', 'yes', 'โดนดีดกระเจี้ยว', '', 'yes', 'อายมาก', '', 'yes', 'เคยถูกล้วงกระเป๋า', '', 'yes', 'ทหารปล้น', '', 'yes', 'ติดอยู่หลายเดือน', '', 'yes', 'เพื่อนหญิงถูกขมขื่น', '', 'yes', 'ศาสนา', '', 'yes', '', '', 'yes', 'พ่อถูกจับ', '', 'yes', 'yes', 'ทหารเลวมันทำร้ายเพื่อนบ้านฉัน', 'fewfwefewfewfwef', 'yes', 'ไม่เคยเป็น', '', 'ไม่พูดอะไรแล้ว', '', 'เราพูดหันไม่ได้', '', 1, 1, 1, 1, 1, 1, 'โหดสัดๆ', '', '2 วัน', '', '25 ครั้ง', '', 'นั่งเยาะ', '', 'ที่ขา มือ อวัยวะเพศ คอ', '', 'อาการหนักไม่รู้สึกตัว', '', 1, 1, 1, 1, 1, 1, 'เจ็บหนักปานตาย', '', 1, 1, 1, 1, 1, 1, 1, 1, 'ทำเหมือนหมาเลย', '', '2 ครั้ง', '', '2 สัปดาห์', '', 'โหดสัดๆ', '', 'หัวใจ', '0', 'อาการเหมือนคนใกล้ตาย', '', 1, 1, 1, 1, 1, 1, 'โครตโหด', '', '3 ครั้ง', '', '24 ชั่งโมง', '', 'ที่คอ', '', 'รอยฟกชำ้สีแดง', '', 1, 1, 1, 1, 'เผาร่างกายทั้งตัว', '0', '2 ครั้ง', '0', '2 เดือน', '', 'มัดมือและขา', '', 'ขา และ อวัยวะเพศ', '', 'อาการปานตาย', '', 'ไฟแรงสูง', '', 'นานมากจำไม่ได้', '', 'สองสัปดาห์', '', 'ขา เข่า หัว', '', 'หนักเกินไป', '', 1, 1, 1, 1, 'หายใจไม่ออก', '', 'สองสามครั้ง', '', 'สองเดือน', '', 'ท่านั่ง', '', 'ไม่พบอาการผิดติ', ''),
(65, '1950500081800', 'มูฮำหมัด', 'อาลีมามะ', '1992-01-10', 'thai', 'male', '', '', '', '', '', '', '', '', '0000-00-00', '', '', 0, 'Yes', '', 'Yes', '', '', 1, '2018-01-14 02:04:15', 'xsaxsaxsaxxsa\njhuiguigiugiug', '', 'Yes', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '0', '0', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', ''),
(66, '1950500081806', 'เฟาซี', 'สาเฮาะ', '1994-01-10', 'malay', 'male', '', '', '', '', '', '', '', '', '0000-00-00', '', '', 0, 'Yes', 'english', 'Yes', 'patani', '', 1, '2018-01-28 03:12:29', 'xsaxasxasx', '', 'Yes', '', '', '', 'undefined', '', '', 22, 'undefined', '', '', 'undefined', '', '', 'undefined', '', '', 'undef', '', '', 'undefined', '', 'undef', '', 'undefined', '', '', 'undefined', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', 'undef', '', '', 'undef', '', '', 'undef', '', '', 'undef', '', '', 'undefined', '', '', 'undefined', '', '', 'undef', '', '', 'undef', '', '', 'undef', '', '', 'undef', '', '', 'undef', '', '', 'undef', '', '', 'undef', '', '', 'undef', 'undefined', '', '', 'undefined', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '0', '', '', 1, 1, 1, 1, 1, 1, 'ewqewqewe', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) NOT NULL,
  `u_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `u_idcard` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `u_firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_firstname_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_lastname_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_telephone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `u_house_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `u_place` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `u_subdistrict` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_province` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_post` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `u_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_user_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '1:admin,2:officer',
  `u_language` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'th:thai,en:english',
  `u_photo` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_code`, `u_idcard`, `u_firstname`, `u_lastname`, `u_firstname_en`, `u_lastname_en`, `u_telephone`, `u_house_no`, `u_place`, `u_subdistrict`, `u_district`, `u_province`, `u_post`, `u_username`, `u_password`, `u_user_status`, `u_language`, `u_photo`) VALUES
(1, 'A0001', '1950500081808', 'เฟาซาน', 'เยาะเเต', 'fauzan', 'yohtae', '0936925058', '65', '4', 'ยะหา', 'ยะหา', 'ยะลา', '95120', 'fauzan', '15c9bc64516fc89498b037a3ead8525a', 'admin', 'th', '151712704211454647_723455037667415_1077089259_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD KEY `o_id` (`ora_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pes_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `ora_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pes_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
