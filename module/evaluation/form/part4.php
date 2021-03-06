﻿<?php
    $u_id = $_GET['userid'];
    $pes_id = $_GET['id'];
    $connect = '../../../connect/connect.php';
    include '../../../connect/connect.php';
    include '../../../function/profile.php';
    include '../../../language/button_link.php';
    include '../../../language/language.php';
    include '../../../function/person.php';
    include '../../../function/global.php';
    //---------------------------------ตั้งค่าภาษา----------------------------------------
    $lang_id = profile($u_id, 'u_language', $connect);
    switch($lang_id){
        case 'th';
            include '../../../language/lang_th.php';
            break;
        case 'en':
            include '../../../language/lang_en.php';
            break;
    }
    //-------------------------------\ตั้งค่าภาษา----------------------------------------
?>
<div class="card">
    <div class="card-title-w-btn">
        <h4 class="title"><a class="btn btn-default icon-btn" href="#"><i class="fa fa-file"></i><?= language($lang_id, 'part') ?> 4</a></h4>
        <p><a class="btn btn-primary icon-btn" href="?mod=biodata"><i class="fa fa-arrow-left"></i>back</a></p>
    </div>
    <hr>
    <h4><i class="fa fa-id-card"></i> <?= language($lang_id, 'ALLEGATION OF TORTURE/ILL TREATMENT') ?></h4>
    <hr>
    <h5 class="text-primary"><?= language($lang_id, 'Traumatic Experiences Related the Current Situation in Southern Thailand') ?></h5>
    <form name="allegationForm" id="allegationForm">
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Before being arrested did you experience any problems related to the current situation in Southern Thailand') ?> </label>
                <div class="radio">
                    <?php
                        $pes_ploblem_before_arrested = personInfo($pes_id, 'pes_ploblem_before_arrested', $connect);
                        if($pes_ploblem_before_arrested=='yes'){
                            $hidden1 = "block";
                        }else{
                            $hidden1 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_ploblem_before_arrested" value="yes" onclick="openElement('hidden1')" <?php if($pes_ploblem_before_arrested=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_ploblem_before_arrested" value="no" onclick="hideElement('hidden1')" <?php if($pes_ploblem_before_arrested=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden1" style="display: <?= $hidden1 ?>">
                <label><?= language($lang_id, 'explain') ?> </label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_ploblem_before_arrested_specify') ?>" id="<?= elementSelect($lang_id, 'pes_ploblem_before_arrested_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_ploblem_before_arrested_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Have you been harassed or discriminated against because of your ethnicity or religion') ?></label>
                <div class="radio">
                    <?php
                        $pes_discriminated = personInfo($pes_id, 'pes_discriminated', $connect);
                        if($pes_discriminated=='yes'){
                            $hidden2 = "block";
                        }else{
                            $hidden2 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_discriminated" value="yes" onclick="openElement('hidden2')" <?php if($pes_discriminated=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_discriminated" value="no" onclick="hideElement('hidden2')" <?php if($pes_discriminated=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden2" style="display: <?= $hidden2 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_discriminated_specify') ?>" id="<?= elementSelect($lang_id, 'pes_discriminated_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_discriminated_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Have you been deprived of basic necessities such as food, water, medicine, or medical care') ?></label>
                <div class="radio">
                    <?php
                        $pes_deprived_necessities  = personInfo($pes_id, 'pes_deprived_necessities', $connect);
                        if($pes_deprived_necessities=='yes'){
                            $hidden3 = "block";
                        }else{
                            $hidden3 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_deprived_necessities" value="yes" onclick="openElement('hidden3')" <?php if($pes_deprived_necessities=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_deprived_necessities" value="no" onclick="hideElement('hidden3')" <?php if($pes_deprived_necessities=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden3" style="display: <?= $hidden3 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_deprived_necessities_specify') ?>" id="<?= elementSelect($lang_id, 'pes_deprived_necessities_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_deprived_necessities_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Have you been isolated or separated, from family or friends (not including detention)') ?></label>
                <div class="radio">
                    <?php
                        $pes_separated_from_family   = personInfo($pes_id, 'pes_separated_from_family', $connect);
                        if($pes_separated_from_family=='yes'){
                            $hidden4 = "block";
                        }else{
                            $hidden4 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_separated_from_family" value="yes" onclick="openElement('hidden4')" <?php if($pes_separated_from_family=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_separated_from_family" value="no" onclick="hideElement('hidden4')" <?php if($pes_separated_from_family=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden4" style="display: <?= $hidden4 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_separated_from_family') ?>" id="<?= elementSelect($lang_id, 'pes_separated_from_family') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_separated_from_family'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Have you been physically harmed') ?></label>
                <div class="radio">
                    <?php
                        $pes_physically_harmed   = personInfo($pes_id, 'pes_physically_harmed', $connect);
                        if($pes_physically_harmed=='yes'){
                            $hidden5 = "block";
                        }else{
                            $hidden5 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_physically_harmed" value="yes" onclick="openElement('hidden5')" <?php if($pes_physically_harmed=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_physically_harmed" value="no" onclick="hideElement('hidden5')" <?php if($pes_physically_harmed=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden5" style="display: <?= $hidden5 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_physically_harmed_specify') ?>" id="<?= elementSelect($lang_id, 'pes_physically_harmed_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_physically_harmed_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Sexually harassed, humiliated, or assaulted') ?></label>
                <div class="radio">
                    <?php
                        $pes_sexually_harassed = personInfo($pes_id, 'pes_sexually_harassed', $connect);
                        if($pes_sexually_harassed=='yes'){
                            $hidden6 = "block";
                        }else{
                            $hidden6 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_sexually_harassed" value="yes" onclick="openElement('hidden6')" <?php if($pes_sexually_harassed=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_sexually_harassed" value="no" onclick="hideElement('hidden6')" <?php if($pes_sexually_harassed=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden6" style="display: <?= $hidden6 ?>">
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_sexually_harassed_specify') ?>" id="<?= elementSelect($lang_id, 'pes_sexually_harassed_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_sexually_harassed_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Physically searched or had your home searched') ?></label>
                <div class="radio">
                    <?php
                        $pes_physical_home_search = personInfo($pes_id, 'pes_physical_home_search', $connect);
                        if($pes_physical_home_search=='yes'){
                            $hidden7 = "block";
                        }else{
                            $hidden7 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_physical_home_search" value="yes" onclick="openElement('hidden7')" <?php if($pes_physical_home_search=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_physical_home_search" value="no" onclick="hideElement('hidden7')" <?php if($pes_physical_home_search=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden7" style="display: <?= $hidden7 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_physical_home_search_specify') ?>" id="<?= elementSelect($lang_id, 'pes_physical_home_search_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_physical_home_search_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Property destroyed or confiscated') ?></label>
                <div class="radio">
                    <?php
                        $pes_property_destroyed = personInfo($pes_id, 'pes_property_destroyed', $connect);
                        if($pes_property_destroyed=='yes'){
                            $hidden8 = "block";
                        }else{
                            $hidden8 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_property_destroyed" value="yes" onclick="openElement('hidden8')" <?php if($pes_property_destroyed=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_property_destroyed" value="no" onclick="hideElement('hidden8')" <?php if($pes_property_destroyed=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden8" style="display: <?= $hidden8 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_property_destroyed_specify') ?>" id="<?= elementSelect($lang_id, 'pes_property_destroyed_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_property_destroyed_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Arrested, detained, or imprisoned') ?></label>
                <div class="radio">
                    <?php
                        $pes_arrested_or_imprisoned = personInfo($pes_id, 'pes_arrested_or_imprisoned', $connect);
                        if($pes_arrested_or_imprisoned=='yes'){
                            $hidden9 = "block";
                        }else{
                            $hidden9 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_arrested_or_imprisoned" value="yes" onclick="openElement('hidden9')" <?php if($pes_arrested_or_imprisoned=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_arrested_or_imprisoned" value="no" onclick="hideElement('hidden9')" <?php if($pes_arrested_or_imprisoned=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden9" style="display: <?= $hidden9 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_arrested_or_imprisoned_specify') ?>" id="<?= elementSelect($lang_id, 'pes_arrested_or_imprisoned_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_arrested_or_imprisoned_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Forced to harm family members or friends') ?></label>
                <div class="radio">
                    <?php
                        $pes_forced_harm_family = personInfo($pes_id, 'pes_forced_harm_family', $connect);
                        if($pes_forced_harm_family=='yes'){
                            $hidden10 = "block";
                        }else{
                            $hidden10 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_forced_harm_family" value="yes" onclick="openElement('hidden10')" <?php if($pes_forced_harm_family=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_forced_harm_family" value="no" onclick="hideElement('hidden10')" <?php if($pes_forced_harm_family=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden10" style="display: <?= $hidden10 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_forced_harm_family_specify') ?>" id="<?= elementSelect($lang_id, 'pes_forced_harm_family_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_forced_harm_family_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Forced to go against your religious practices') ?></label>
                <div class="radio">
                    <?php
                        $pes_against_religious = personInfo($pes_id, 'pes_against_religious', $connect);
                        if($pes_against_religious=='yes'){
                            $hidden11 = "block";
                        }else{
                            $hidden11 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_against_religious" value="yes" onclick="openElement('hidden11')" <?php if($pes_against_religious=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_against_religious" value="no" onclick="hideElement('hidden11')" <?php if($pes_against_religious=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden11" style="display: <?= $hidden11 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_against_religious_specify') ?>" id="<?= elementSelect($lang_id, 'pes_against_religious_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_against_religious_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Threatened with harm [physical and non-physical] to you, your family members or your friends') ?></label>
                <div class="radio">
                    <?php
                        $pes_threatened_harm = personInfo($pes_id, 'pes_threatened_harm', $connect);
                        if($pes_threatened_harm=='yes'){
                            $hidden12 = "block";
                        }else{
                            $hidden12 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_threatened_harm" value="yes" onclick="openElement('hidden12')" <?php if($pes_threatened_harm=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_threatened_harm" value="no" onclick="hideElement('hidden12')" <?php if($pes_threatened_harm=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden12" style="display: <?= $hidden12 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_threatened_harm_specify') ?>" id="<?= elementSelect($lang_id, 'pes_threatened_harm_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_threatened_harm_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Have any of your family members or friends been arrested, beaten, disappeared, or murdered or suffered a violent death') ?></label>
                <div class="radio">
                    <?php
                        $pes_family_members_arrested = personInfo($pes_id, 'pes_family_members_arrested', $connect);
                        if($pes_family_members_arrested=='yes'){
                            $hidden13 = "block";
                        }else{
                            $hidden13 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_family_members_arrested" value="yes" onclick="openElement('hidden13')" <?php if($pes_family_members_arrested=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'yes') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_family_members_arrested" value="no" onclick="hideElement('hidden13')" <?php if($pes_family_members_arrested=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'no') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden13" style="display: <?= $hidden13 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_family_members_arrested_specify') ?>" id="<?= elementSelect($lang_id, 'pes_family_members_arrested_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_family_members_arrested_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'If so, did you find the body and were you able to mourn or perform burial rites') ?></label>
                <div class="radio">
                    <?php
                        $pes_found_burial = personInfo($pes_id, 'pes_found_burial', $connect);
                    ?>
                    <label>
                        <input type="radio" name="pes_found_burial" value="yes" <?php if($pes_found_burial=='yes'){echo "checked='checked'";} ?>><?= $lang_text['can'] ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_found_burial" value="no" <?php if($pes_found_burial=='no'){echo "checked='checked'";} ?>><?= $lang_text['can not'] ?>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Violent acts such as beatings, killing, or violent attacks') ?></label>
                <div class="radio">
                    <?php
                        $pes_witnessed_violent = personInfo($pes_id, 'pes_witnessed_violent', $connect);
                        if($pes_witnessed_violent=='yes'){
                            $hidden14 = "block";
                        }else{
                            $hidden14 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_witnessed_violent" value="yes" onclick="openElement('hidden14')" <?php if($pes_witnessed_violent=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_witnessed_violent" value="no" onclick="openElement('hidden14')" <?php if($pes_witnessed_violent=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden14" style="display: <?= $hidden14 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_witnessed_violent_specify') ?>" id="<?= elementSelect($lang_id, 'pes_witnessed_violent_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_witnessed_violent_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Humiliation of family, friends, community members and/or religious leaders') ?></label>
                <div class="radio">
                    <?php
                        $pes_humiliation_family = personInfo($pes_id, 'pes_humiliation_family', $connect);
                        if($pes_humiliation_family=='yes'){
                            $hidden15 = "block";
                        }else{
                            $hidden15 = "none";
                        }
                    ?>
                    <label>
                        <input type="radio" name="pes_humiliation_family" value="yes" onclick="openElement('hidden15')" <?php if($pes_humiliation_family=='yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_humiliation_family" value="no" onclick="openElement('hidden15')" <?php if($pes_humiliation_family=='no'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden15" style="display: <?= $hidden15 ?>">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_humiliation_family_specify') ?>" id="<?= elementSelect($lang_id, 'pes_humiliation_family_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_humiliation_family_specify'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Other') ?> <?= language($lang_id, 'Specify') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_traumatic_experiences_specify') ?>" id="<?= elementSelect($lang_id, 'pes_traumatic_experiences_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_traumatic_experiences_specify'), $connect) ?></textarea>
            </div>
        </div>
        <hr>
        <h5 class="text-primary"><?= $lang_text['Narrative Account of Alleged Torture and Ill Treatment'] ?></h5>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= $lang_text['At this point, let’s talk about what happened to when you were arrested. It will be helpful if you tell me first about the arrest and then what happened to you, step by step during the time that you were detained. Please include as much detail as you can and let me know if there is something that you are not sure about'] ?></label>
                <textarea class="form-control" rows="5" name="<?= elementSelect($lang_id, 'pes_arrested_history') ?>" id="<?= elementSelect($lang_id, 'pes_arrested_history') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_arrested_history'), $connect) ?></textarea>
            </div>
        </div>
        <h5 class="text-warning"><?= $lang_text['Review of Torture Methods'] ?></h5>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Blunt trauma'] ?></label>
                <div class="checkbox">
                    <label>
                        <?php $pes_punch = personInfo($pes_id, 'pes_punch', $connect) ?>
                        <input type="checkbox" name="pes_punch" <?php if($pes_punch=='1'){echo 'checked';} ?> value="1"><?= $lang_text['punch'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_kick = personInfo($pes_id, 'pes_kick', $connect) ?>
                        <input type="checkbox" name="pes_kick" <?php if($pes_kick=='1'){echo 'checked';} ?> value="1"><?= $lang_text['kick'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_slap = personInfo($pes_id, 'pes_slap', $connect) ?>
                        <input type="checkbox" name="pes_slap" <?php if($pes_slap=='1'){echo 'checked';} ?> value="1"><?= $lang_text['slap'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_slap = personInfo($pes_id, 'pes_slap', $connect) ?>
                        <input type="checkbox" name="pes_wire" <?php if($pes_slap=='1'){echo 'checked';} ?> value="1"><?= $lang_text['wires'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_truncheons = personInfo($pes_id, 'pes_truncheons', $connect) ?>
                        <input type="checkbox" name="pes_truncheons" <?php if($pes_truncheons=='1'){echo 'checked';} ?> value="1"><?= $lang_text['truncheons'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_falling_down = personInfo($pes_id, 'pes_falling_down', $connect) ?>
                        <input type="checkbox" name="pes_falling_down" <?php if($pes_falling_down=='1'){echo 'checked';} ?> value="1"><?= $lang_text['falling down'] ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_blunt_trauma_explain') ?>" id="<?= elementSelect($lang_id, 'pes_blunt_trauma_explain') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_blunt_trauma_explain'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-3">
                <label><?= $lang_text['Frequency'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_torture_frequency') ?>" id="<?= elementSelect($lang_id, 'pes_torture_frequency') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_torture_frequency'), $connect) ?>">
            </div>
            <div class="col-md-3">
                <label><?= $lang_text['Duration'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_turture_duration') ?>" id="<?= elementSelect($lang_id, 'pes_turture_duration') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_turture_duration'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Restraint/Position'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_turture_restraint') ?>" id="<?= elementSelect($lang_id, 'pes_turture_restraint') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_turture_restraint'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Injury Location'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_injury_location') ?>" id="<?= elementSelect($lang_id, 'pes_injury_location') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_injury_location'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Injury Observations'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_injury_observation') ?>" id="<?= elementSelect($lang_id, 'pes_injury_observation') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_injury_observation'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Head Trauma'] ?></label>
                <div class="checkbox">
                    <label>
                        <?php $pes_bruises = personInfo($pes_id, 'pes_bruises', $connect) ?>
                        <input type="checkbox" name="pes_bruises" <?php if($pes_bruises=='1'){echo 'checked';} ?> value="1"><?= $lang_text['bruises'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_bleeding = personInfo($pes_id, 'pes_bleeding', $connect) ?>
                        <input type="checkbox" name="pes_bleeding" <?php if($pes_bleeding=='1'){echo 'checked';} ?> value="1"><?= $lang_text['bleeding'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_loss_of_consciousness = personInfo($pes_id, 'pes_loss_of_consciousness', $connect) ?>
                        <input type="checkbox" name="pes_loss_of_consciousness" <?php if($pes_loss_of_consciousness=='1'){echo 'checked';} ?> value="1"><?= $lang_text['loss of consciousness'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_numbness = personInfo($pes_id, 'pes_numbness', $connect) ?>
                        <input type="checkbox" name="pes_numbness" <?php if($pes_numbness=='1'){echo 'checked';} ?> value="1"><?= $lang_text['numbness'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_weakness = personInfo($pes_id, 'pes_weakness', $connect) ?>
                        <input type="checkbox" name="pes_weakness" <?php if($pes_weakness=='1'){echo 'checked';} ?> value="1"><?= $lang_text['weakness'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_head_trauma_other = personInfo($pes_id, 'pes_head_trauma_other', $connect) ?>
                        <input type="checkbox" name="pes_head_trauma_other" <?php if($pes_head_trauma_other=='1'){echo 'checked';} ?> value="1"><?= $lang_text['etc'] ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['explain'] ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_head_trauma_explain') ?>" id="<?= elementSelect($lang_id, 'pes_head_trauma_explain') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_head_trauma_explain'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Positional torture'] ?></label>
                <div class="checkbox">
                    <label>
                        <?php $pes_suspension = personInfo($pes_id, 'pes_suspension', $connect) ?>
                        <input type="checkbox" name="pes_bruises" <?php if($pes_suspension=='1'){echo 'checked';} ?> value="1"><?= $lang_text['Suspension'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_stretching_limbs_apart = personInfo($pes_id, 'pes_stretching_limbs_apart', $connect) ?>
                        <input type="checkbox" name="pes_stretching_limbs_apart" <?php if($pes_stretching_limbs_apart=='1'){echo 'checked';} ?> value="1"><?= $lang_text['stretching limbs apart'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_prolonged_constraint_of_movement = personInfo($pes_id, 'pes_prolonged_constraint_of_movement', $connect) ?>
                        <input type="checkbox" name="pes_prolonged_constraint_of_movement" <?php if($pes_prolonged_constraint_of_movement=='1'){echo 'checked';} ?> value="1"><?= $lang_text['prolonged constraint of movement'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_forced_positioning = personInfo($pes_id, 'pes_forced_positioning', $connect) ?>
                        <input type="checkbox" name="pes_forced_positioning" <?php if($pes_forced_positioning=='1'){echo 'checked';} ?> value="1"><?= $lang_text['forced positioning'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_being_chained_or_tied = personInfo($pes_id, 'pes_being_chained_or_tied', $connect) ?>
                        <input type="checkbox" name="pes_being_chained_or_tied" <?php if($pes_being_chained_or_tied=='1'){echo 'checked';} ?> value="1"><?= $lang_text['being chained or tied'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_placed_in_space = personInfo($pes_id, 'pes_placed_in_space', $connect) ?>
                        <input type="checkbox" name="pes_placed_in_space" <?php if($pes_placed_in_space=='1'){echo 'checked';} ?> value="1"><?= $lang_text['placed in a small space'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_forced_to_stand = personInfo($pes_id, 'pes_forced_to_stand', $connect) ?>
                        <input type="checkbox" name="pes_forced_to_stand" <?php if($pes_forced_to_stand=='1'){echo 'checked';} ?> value="1"><?= $lang_text['forced to stand'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_lie_or_kneel_uncomfortable = personInfo($pes_id, 'pes_lie_or_kneel_uncomfortable', $connect) ?>
                        <input type="checkbox" name="pes_lie_or_kneel_uncomfortable" <?php if($pes_head_trauma_other=='1'){echo 'checked';} ?> value="1"><?= $lang_text['lie, or kneel in an uncomfortable position'] ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['explain'] ?></label>
                <textarea class="form-control" rows="5" name="<?= elementSelect($lang_id, 'pes_positional_torture_explain') ?>" id="<?= elementSelect($lang_id, 'pes_positional_torture_explain') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_positional_torture_explain'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-3">
                <label><?= $lang_text['Frequency'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_positional_torture_frequency') ?>" id="<?= elementSelect($lang_id, 'pes_positional_torture_frequency') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_positional_torture_frequency'), $connect) ?>">
            </div>
            <div class="col-md-3">
                <label><?= $lang_text['Duration'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_positional_torture_duration') ?>" id="<?= elementSelect($lang_id, 'pes_positional_torture_duration') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_positional_torture_duration'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Restraint/Position'] ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_positional_torture_restraint') ?>" id="<?= elementSelect($lang_id, 'pes_positional_torture_restraint') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_positional_torture_restraint'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Injury Location'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_positional_torture_injury_location') ?>" id="<?= elementSelect($lang_id, 'pes_positional_torture_injury_location') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_positional_torture_injury_location'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Injury Observations'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_positioanl_inturry_abservation') ?>" id="<?= elementSelect($lang_id, 'pes_positioanl_inturry_abservation') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_positioanl_inturry_abservation'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Exposure to extreme temperatures'] ?></label>
                <div class="checkbox">
                    <label>
                        <?php $pes_exposed_to_heat = personInfo($pes_id, 'pes_exposed_to_heat', $connect) ?>
                        <input type="checkbox" name="pes_exposed_to_heat" <?php if($pes_exposed_to_heat=='1'){echo 'checked';} ?> value="1"><?= $lang_text['exposed to heat'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_sun = personInfo($pes_id, 'pes_sun', $connect) ?>
                        <input type="checkbox" name="pes_sun" <?php if($pes_sun=='1'){echo 'checked';} ?> value="1"><?= $lang_text['sun'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_rain = personInfo($pes_id, 'pes_rain', $connect) ?>
                        <input type="checkbox" name="pes_rain" <?php if($pes_rain=='1'){echo 'checked';} ?> value="1"><?= $lang_text['rain'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_body_immersion = personInfo($pes_id, 'pes_body_immersion', $connect) ?>
                        <input type="checkbox" name="pes_body_immersion" <?php if($pes_body_immersion=='1'){echo 'checked';} ?> value="1"><?= $lang_text['body immersion'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_cold = personInfo($pes_id, 'pes_cold', $connect) ?>
                        <input type="checkbox" name="pes_cold" <?php if($pes_cold=='1'){echo 'checked';} ?> value="1"><?= $lang_text['cold'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_forced_to_sit_on_ice = personInfo($pes_id, 'pes_forced_to_sit_on_ice', $connect) ?>
                        <input type="checkbox" name="pes_forced_to_sit_on_ice" <?php if($pes_forced_to_sit_on_ice=='1'){echo 'checked';} ?> value="1"><?= $lang_text['forced to sit on ice'] ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['explain'] ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'exposure_extreme_temperatures') ?>" id="<?= elementSelect($lang_id, 'exposure_extreme_temperatures') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'exposure_extreme_temperatures'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Frequency'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_extreme_temperatures_frequency') ?>" id="<?= elementSelect($lang_id, 'pes_extreme_temperatures_frequency') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_extreme_temperatures_frequency'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Duration'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_extreme_temperatures_duration') ?>" id="<?= elementSelect($lang_id, 'pes_extreme_temperatures_duration') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_extreme_temperatures_duration'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Injury Location'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_extreme_temperatures_injury_location') ?>" id="<?= elementSelect($lang_id, 'pes_extreme_temperatures_injury_location') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_extreme_temperatures_injury_location'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Injury Observations'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_extreme_temperatures_injury_observation') ?>" id="<?= elementSelect($lang_id, 'pes_extreme_temperatures_injury_observation') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_extreme_temperatures_injury_observation'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Burns'] ?></label>
                <div class="checkbox">
                    <label>
                        <?php $pes_burn_cigarettes = personInfo($pes_id, 'pes_burn_cigarettes', $connect) ?>
                        <input type="checkbox" name="pes_burn_cigarettes" <?php if($pes_burn_cigarettes=='1'){echo 'checked';} ?> value="1"><?= $lang_text['burn cigarettes'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_heated_instrument = personInfo($pes_id, 'pes_heated_instrument', $connect) ?>
                        <input type="checkbox" name="pes_heated_instrument" <?php if($pes_heated_instrument=='1'){echo 'checked';} ?> value="1"><?= $lang_text['heated instrument'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_scalding_liquid = personInfo($pes_id, 'pes_scalding_liquid', $connect) ?>
                        <input type="checkbox" name="pes_scalding_liquid" <?php if($pes_scalding_liquid=='1'){echo 'checked';} ?> value="1"><?= $lang_text['scalding water or other liquid'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_caustic_substance = personInfo($pes_id, 'pes_caustic_substance', $connect) ?>
                        <input type="checkbox" name="pes_caustic_substance" <?php if($pes_caustic_substance=='1'){echo 'checked';} ?> value="1"><?= $lang_text['caustic substance'] ?>
                    </label>
                    &nbsp;&nbsp;
                </div>
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['explain'] ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_burn_explain') ?>" id="<?= elementSelect($lang_id, 'pes_burn_explain') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_burn_explain'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-3">
                <label><?= $lang_text['Frequency'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_burn_frequency') ?>" id="<?= elementSelect($lang_id, 'pes_burn_frequency') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_burn_frequency'), $connect) ?>">
            </div>
            <div class="col-md-3">
                <label><?= $lang_text['Duration'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_burn_duration') ?>" id="<?= elementSelect($lang_id, 'pes_burn_duration') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_burn_duration'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Restraint/Position'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_burn_restraint') ?>" id="<?= elementSelect($lang_id, 'pes_burn_restraint') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_burn_restraint'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Injury Location'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_burn_injury_location') ?>" id="<?= elementSelect($lang_id, 'pes_burn_injury_location') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_burn_injury_location'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Injury Observations'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_burn_injury_observations') ?>" id="<?= elementSelect($lang_id, 'pes_burn_injury_observations') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_burn_injury_observations'), $connect) ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Electric shock'] ?> (<?= $lang_text['describe'] ?>)</label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_electric_shock_explain') ?>" id="<?= elementSelect($lang_id, 'pes_electric_shock_explain') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_electric_shock_explain'), $connect) ?></textarea>
            </div>
            <div class="col-md-3">
                <label><?= $lang_text['Frequency'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_electric_shock_frequency') ?>" id="<?= elementSelect($lang_id, 'pes_electric_shock_frequency') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_electric_shock_frequency'), $connect) ?>">
            </div>
            <div class="col-md-3">
                <label><?= $lang_text['Duration'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_electric_shock_duration') ?>" id="<?= elementSelect($lang_id, 'pes_electric_shock_duration') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_electric_shock_duration'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Injury Location'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_electric_shock_injury_location') ?>" id="<?= elementSelect($lang_id, 'pes_electric_shock_injury_location') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_electric_shock_injury_location'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Injury Observations'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_electric_shock_injury_observation') ?>" id="<?= elementSelect($lang_id, 'pes_electric_shock_injury_observation') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_electric_shock_injury_observation'), $connect) ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Asphyxiation'] ?></label>
                <div class="checkbox">
                    <label>
                        <?php $pes_asphyxiation_wet_and_dry_methods = personInfo($pes_id, 'pes_asphyxiation_wet_and_dry_methods', $connect) ?>
                        <input type="checkbox" name="pes_asphyxiation_wet_and_dry_methods" <?php if($pes_asphyxiation_wet_and_dry_methods=='1'){echo 'checked';} ?> value="1"><?= $lang_text['wet and dry methods'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_asphyxiation_drowning = personInfo($pes_id, 'pes_asphyxiation_drowning', $connect) ?>
                        <input type="checkbox" name="pes_asphyxiation_drowning" <?php if($pes_asphyxiation_drowning=='1'){echo 'checked';} ?> value="1"><?= $lang_text['drowning'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_asphyxiation_smothering = personInfo($pes_id, 'pes_asphyxiation_smothering', $connect) ?>
                        <input type="checkbox" name="pes_asphyxiation_smothering" <?php if($pes_asphyxiation_smothering=='1'){echo 'checked';} ?> value="1"><?= $lang_text['smothering'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_asphyxiation_choking_chemicals = personInfo($pes_id, 'pes_asphyxiation_choking_chemicals', $connect) ?>
                        <input type="checkbox" name="pes_asphyxiation_choking_chemicals" <?php if($pes_asphyxiation_choking_chemicals=='1'){echo 'checked';} ?> value="1"><?= $lang_text['choking chemicals'] ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['describe'] ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_asphyxiation_explain') ?>" id="<?= elementSelect($lang_id, 'pes_asphyxiation_explain') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_asphyxiation_explain'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-3">
                <label><?= $lang_text['Frequency'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_asphyxiation_frequency') ?>" id="<?= elementSelect($lang_id, 'pes_asphyxiation_frequency') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_asphyxiation_frequency'), $connect) ?>">
            </div>
            <div class="col-md-3">
                <label><?= $lang_text['Duration'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_asphyxiation_duration') ?>" id="" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_asphyxiation_duration'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Restraint/Position'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_asphyxiation_restraint') ?>" id="<?= elementSelect($lang_id, 'pes_asphyxiation_restraint') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_asphyxiation_restraint'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Injury Observations'] ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_asphyxiation_injury_observations') ?>" id="<?= elementSelect($lang_id, 'pes_asphyxiation_injury_observations') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_asphyxiation_injury_observations'), $connect) ?></textarea>
            </div>
        </div>
        <hr>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Crush injuries'] ?></label>
                <div class="checkbox">
                    <label>
                        <?php $pes_crush_smashing_fingers = personInfo($pes_id, 'pes_crush_smashing_fingers', $connect) ?>
                        <input type="checkbox" name="pes_crush_smashing_fingers" <?php if($pes_crush_smashing_fingers=='1'){echo 'checked';} ?> value="1"><?= $lang_text['smashing fingers'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_scrush_heavy_roller = personInfo($pes_id, 'pes_scrush_heavy_roller', $connect) ?>
                        <input type="checkbox" name="pes_scrush_heavy_roller" <?php if($pes_scrush_heavy_roller=='1'){echo 'checked';} ?> value="1"><?= $lang_text['heavy roller to thighs/back'] ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['explain'] ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_scrush_injuries_explain') ?>" id="<?= elementSelect($lang_id, 'pes_scrush_injuries_explain') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_scrush_injuries_explain'), $connect) ?></textarea> 
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-3">
                <label><?= $lang_text['Frequency'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_crush_frequency') ?>" id="<?= elementSelect($lang_id, 'pes_crush_frequency') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_crush_frequency'), $connect) ?>">
            </div>
            <div class="col-md-3">
                <label><?= $lang_text['Duration'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_crush_duration') ?>" id="<?= elementSelect($lang_id, 'pes_crush_duration') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_crush_duration'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Restraint/Position'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_crush_restraint') ?>" id="<?= elementSelect($lang_id, 'pes_crush_restraint') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_crush_restraint'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Injury Location'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_crush_injury_location') ?>" id="" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_crush_injury_location'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Injury Observations'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_crush_injury_observation') ?>" id="<?= elementSelect($lang_id, 'pes_crush_injury_observation') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_crush_injury_observation'), $connect) ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Penetrating injuries'] ?></label>
                <div class="checkbox">
                    <label>
                        <?php $pes_gunshot_wounds = personInfo($pes_id, 'pes_gunshot_wounds', $connect) ?>
                        <input type="checkbox" name="pes_gunshot_wounds" <?php if($pes_gunshot_wounds=='1'){echo 'checked';} ?> value="1"><?= $lang_text['stab and gunshot wounds'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_needles_under_nails = personInfo($pes_id, 'pes_needles_under_nails', $connect) ?>
                        <input type="checkbox" name="pes_needles_under_nails" <?php if($pes_needles_under_nails=='1'){echo 'checked';} ?> value="1"><?= $lang_text['wires needles under nails'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php $pes_sensitive_of_body = personInfo($pes_id, 'pes_sensitive_of_body', $connect) ?>
                        <input type="checkbox" name="pes_sensitive_of_body" <?php if($pes_sensitive_of_body=='1'){echo 'checked';} ?> value="1"><?= $lang_text['toes in sensitive parts of the body'] ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['explain'] ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_penetrating_injuries_explain') ?>" id="<?= elementSelect($lang_id, 'pes_penetrating_injuries_explain') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_penetrating_injuries_explain'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-3">
                <label><?= $lang_text['Frequency'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_penetrating_frequency') ?>" id="<?= elementSelect($lang_id, 'pes_penetrating_frequency') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_penetrating_frequency'), $connect) ?>">
            </div>
            <div class="col-md-3">
                <label><?= $lang_text['Duration'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_penetrating_duration') ?>" id="<?= elementSelect($lang_id, 'pes_penetrating_duration') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_penetrating_duration'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Restraint/Position'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_penetrating_restraint') ?>" id="<?= elementSelect($lang_id, 'pes_penetrating_restraint') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_penetrating_restraint'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Injury Location'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_penetrating_injury_location') ?>" id="<?= elementSelect($lang_id, 'pes_penetrating_injury_location') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_penetrating_injury_location'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Injury Observations'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_penetrating_injury_observations') ?>" id="<?= elementSelect($lang_id, 'pes_penetrating_injury_observations') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_penetrating_injury_observations'), $connect) ?>">
            </div>
        </div>
        <hr>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Chemical exposures'] ?></label>
                <div class="checkbox">
                    <label>
                        <?php //$pes_chemical_gasoline = personInfo($pes_id, 'pes_chemical_gasoline', $connect) ?>
                        <input type="checkbox" name="pes_chemical_gasoline" <?php //if($pes_chemical_gasoline=='1'){echo 'checked';} ?> value="1"><?= $lang_text['gasoline'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php //$pes_chemical_salt = personInfo($pes_id, 'pes_chemical_salt', $connect) ?>
                        <input type="checkbox" name="pes_chemical_salt" <?php //if($pes_chemical_salt=='1'){echo 'checked';} ?> value="1"><?= $lang_text['salt'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php //$pes_chemical_chili = personInfo($pes_id, 'pes_chemical_chili', $connect) ?>
                        <input type="checkbox" name="pes_chemical_chili" <?php //if($pes_chemical_chili=='1'){echo 'checked';} ?> value="1"><?= $lang_text['chili'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <?php //$pes_chemical_other = personInfo($pes_id, 'pes_chemical_other', $connect) ?>
                        <input type="checkbox" name="pes_chemical_other" <?php //if($pes_chemical_other=='1'){echo 'checked';} ?> value="1"><?= $lang_text['Other'] ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['explain'] ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_chemical_explain') ?>" id="<?= elementSelect($lang_id, 'pes_chemical_explain') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_chemical_explain'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-3">
                <label><?= $lang_text['Frequency'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_chemical_frequency') ?>" id="<?= elementSelect($lang_id, 'pes_chemical_frequency') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_chemical_frequency'), $connect) ?>">
            </div>
            <div class="col-md-3">
                <label><?= $lang_text['Duration'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_chemical_duration') ?>" id="<?= elementSelect($lang_id, 'pes_chemical_duration') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_chemical_duration'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Restraint/Position'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_chemical_restraint') ?>" id="<?= elementSelect($lang_id, 'pes_chemical_restraint') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_chemical_restraint'), $connect) ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Injury Location'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_chemical_injury_location') ?>" id="<?= elementSelect($lang_id, 'pes_chemical_injury_location') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_chemical_injury_location'), $connect) ?>">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Injury Observations'] ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_chemical_injury_observation') ?>" id="<?= elementSelect($lang_id, 'pes_chemical_injury_observation') ?>" value="<?= personInfo($pes_id, elementSelect($lang_id, 'pes_chemical_injury_observation'), $connect) ?>">
            </div>
        </div>
        <hr>
        <input type="hidden" name="operator" value="<?= $u_id ?>">
        <input type="hidden" name="pes_id" value="<?= $pes_id ?>">
        <input type="hidden" name="lang_id" value="<?= $lang_id ?>">
    </form>
    <button class="btn btn-primary" onclick="allegationAdd('module/evaluation/action/allegationAdd.php', 'allegationForm')">
        <div id="processing"><i class="fa fa-check-circle"></i> <?= button_link($lang_id, 'save') ?></div>
    </button>
</div>
