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
        <h4 class="title"><a class="btn btn-default icon-btn" href="#"><i class="fa fa-file"></i><?= language($lang_id, 'part') ?> 3</a></h4>
        <p><a class="btn btn-primary icon-btn" href="?mod=biodata"><i class="fa fa-arrow-left"></i>back</a></p>
    </div>
    <hr>
    <h4><i class="fa fa-id-card"></i> <?= language($lang_id, 'PSYCHOSOCIAL HISTORY PRE-ARREST') ?></h4>
    <form name="psychoSocialForm" id="psychoSocialForm">
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'How many years did you attend school') ?> </label>
                <input type="number" class="form-control" min="0" max="100" name="pes_attend_school" id="pes_attend_school">
            </div>
            <div class="col-md-6">
                <label><?= language($lang_id, 'What is your primary occupation') ?> </label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_primary_occupation') ?>" id="<?= elementSelect($lang_id, 'pes_primary_occupation') ?>">
            </div>
        </div>
        <div class="row mb-12">
            <div class="col-md-6">
                <label class="control-label"><?= language($lang_id, 'What is your marital status') ?> </label>
                <div class="radio">
                    <label>
                        <input type="radio" name="pes_marital_status" value="single" onclick="hideElement('hidden1')" <?php //if($pes_permission_conduct=='Yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'Single') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_marital_status" value="married" onclick="hideElement('hidden1')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'Married') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_marital_status" value="divorced" onclick="hideElement('hidden1')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'Divorced') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_marital_status" value="widowed" onclick="hideElement('hidden1')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'Widowed') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_marital_status" value="other" onclick="openElement('hidden1')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'Other') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden1" style="display: none">
                <label><?= language($lang_id, 'Other') ?> (<?= language($lang_id, 'Specify') ?>)</label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_marital_specify') ?>" id="<?= elementSelect($lang_id, 'pes_marital_specify') ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'How many children do you have') ?></label>
                <input type="number" class="form-control" min="0" max="500" name="pes_children" id="pes_children">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Have you had any major Illnesses') ?></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="pes_major_illneses" value="yes" onclick="openElement('hidden2')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_major_illneses" value="no" onclick="hideElement('hidden2')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden2" style="display: none">
                <label><?= language($lang_id, 'Specify') ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_major_illnesses_specify') ?>" id="<?= elementSelect($lang_id, 'pes_major_illnesses_specify') ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Have you had any injuries') ?></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="pes_injuries" value="yes" onclick="openElement('hidden3')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_injuries" value="no" onclick="hideElement('hidden3')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden3" style="display: none">
                <label><?= language($lang_id, 'Specify') ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_injuries_specify') ?>" id="<?= elementSelect($lang_id, 'pes_injuries_specify') ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Have you had any surgeries') ?></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="pes_surgeries" value="yes" onclick="openElement('hidden4')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'have') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_surgeries" value="no" onclick="hideElement('hidden4')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'not have') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden4" style="display: none">
                <label><?= language($lang_id, 'Specify') ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_surgeries_specify') ?>" id="<?= elementSelect($lang_id, 'pes_surgeries_specify') ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Are you currently taking any medications') ?></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="pes_medication" value="yes" onclick="openElement('hidden5')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'have eat') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_medication" value="no" onclick="hideElement('hidden5')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'not eat') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden5" style="display: none">
                <label><?= language($lang_id, 'Specify') ?></label>
                <input type="text" class="form-control" name="<?= elementSelect($lang_id, 'pes_medication_specify') ?>" id="<?= elementSelect($lang_id, 'pes_medication_specify') ?>">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Do you use tobacco') ?></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="pes_tobacco" value="yes" onclick="openElement('hidden6')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'true') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_tobacco" value="no" onclick="hideElement('hidden6')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'fasle') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden6" style="display: none">
                <label><?= language($lang_id, 'packs per day') ?></label>
                <input type="number" class="form-control" min="0" max="100" name="pes_tobacco_specify" id="pes_tobacco_specify">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Do you use alcohol') ?></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="pes_alcohol" value="yes" onclick="openElement('hidden7')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'true') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_alcohol" value="no" onclick="hideElement('hidden7')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'fasle') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden7" style="display: none">
                <label><?= language($lang_id, 'drinks per day') ?></label>
                <input type="number" class="form-control" name="pes_alcohol_specify" id="pes_alcohol_specify">
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'Do you use drugs') ?></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="pes_drug" value="yes" onclick="openElement('hidden8')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'true') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_drug" value="no" onclick="hideElement('hidden8')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'fasle') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden8" style="display: none">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_drug_specify') ?>" id="<?= elementSelect($lang_id, 'pes_drug_specify') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= language($lang_id, 'If yes, has your usage changed (increased or decreased) since the time you were arrested') ?></label>
                <div class="radio">
                    <label>
                        <input type="radio" name="pes_changing_use" value="yes" onclick="openElement('hidden9')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'true') ?>
                    </label>
                        &nbsp;&nbsp;
                    <label>
                        <input type="radio" name="pes_changing_use" value="no" onclick="hideElement('hidden9')" <?php //if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'fasle') ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden9" style="display: none">
                <label><?= language($lang_id, 'explain') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_changing_use_specify') ?>" id="<?= elementSelect($lang_id, 'pes_changing_use_specify') ?>"></textarea>
            </div>
        </div>
        <hr>
        <h4><i class="fa fa-id-card"></i> <?= language($lang_id, 'Now I would like to talk about your life before you were arrested') ?></h4>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'How would you describe your family relationships') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_family_relationship') ?>" id="<?= elementSelect($lang_id, 'pes_family_relationship') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'Tell me about your work/education') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_work_or_education') ?>" id="<?= elementSelect($lang_id, 'pes_work_or_education') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'How was your financial situation') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_financial_situation') ?>" id="<?= elementSelect($lang_id, 'pes_financial_situation') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'Social activities & relationships') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_social_activity') ?>" id="<?= elementSelect($lang_id, 'pes_social_activity') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'Tell me about political activities or affiliations') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_political_activity') ?>" id="<?= elementSelect($lang_id, 'pes_political_activity') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'Have you had any past experiences of serious trauma that were NOT related to the current situation in Southern Thailand such as a major accident, childhood abuse, domestic violence, etc.') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_exp_of_serious') ?>" id="<?= elementSelect($lang_id, 'pes_exp_of_serious') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'Tell me about your religious practices') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_religios_practice') ?>" id="<?= elementSelect($lang_id, 'pes_religios_practice') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'Describe your typical daily activities') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_daily_activity') ?>" id="<?= elementSelect($lang_id, 'pes_daily_activity') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'Tell me about your interests') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_interest') ?>" id="<?= elementSelect($lang_id, 'pes_interest') ?>"></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= language($lang_id, 'What were your plans for the future') ?></label>
                <textarea class="form-control" rows="3" name="<?= elementSelect($lang_id, 'pes_future_plan') ?>" id="<?= elementSelect($lang_id, 'pes_future_plan') ?>"></textarea>
            </div>
        </div>
        <input type="hidden" name="operator" value="<?= $u_id ?>">
        <input type="hidden" name="pes_id" value="<?= $pes_id ?>">
        <input type="hidden" name="lang_id" value="<?= $lang_id ?>">
    </form>
    <button class="btn btn-primary" onclick="psychosocialAdd('module/evaluation/action/psychosocialAdd.php', 'psychoSocialForm')">
        <div id="processing"><i class="fa fa-check-circle"></i> <?= button_link($lang_id, 'save') ?></div>
    </button>
</div>

