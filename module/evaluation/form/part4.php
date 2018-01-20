<?php
    $u_id = $_GET['userid'];
    $pes_id = $_GET['id'];
    $connect = '../../../connect/connect.php';
    include '../../../connect/connect.php';
    include '../../../function/profile.php';
    include '../../../language/button_link.php';
    include '../../../language/language.php';
    include '../../../function/person.php';
    include '../../../function/global.php';
    $lang_id = profile($u_id, 'u_language', $connect);
?>
<div class="card">
    <div class="card-title-w-btn">
        <h4 class="title"><a class="btn btn-default icon-btn" href="#"><i class="fa fa-file"></i><?= language($lang_id, 'part') ?> 4</a></h4>
        <p><a class="btn btn-primary icon-btn" href="?mod=biodata"><i class="fa fa-arrow-left"></i>back</a></p>
    </div>
    <hr>
    <h4><i class="fa fa-id-card"></i> <?= language($lang_id, 'ALLEGATION OF TORTURE/ILL TREATMENT') ?></h4>
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
            <div class="col-md-6" id="hidden10" style="display: none">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_forced_harm_family_specify') ?>" id="<?= elementSelect($lang_id, 'pes_forced_harm_family_specify') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_forced_harm_family_specify'), $connect) ?></textarea>
            </div>
        </div>
        <input type="hidden" name="operator" value="<?= $u_id ?>">
        <input type="hidden" name="pes_id" value="<?= $pes_id ?>">
        <input type="hidden" name="lang_id" value="<?= $lang_id ?>">
    </form>
    <button class="btn btn-primary" onclick="allegationAdd('module/evaluation/action/allegationAdd.php', 'allegationForm')">
        <div id="processing"><i class="fa fa-check-circle"></i> <?= button_link($lang_id, 'save') ?></div>
    </button>
</div>
