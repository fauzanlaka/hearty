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
        <h4 class="title"><a class="btn btn-default icon-btn" href="#"><i class="fa fa-file"></i><?= language($lang_id, 'part') ?> 2</a></h4>
        <p><a class="btn btn-primary icon-btn" href="?mod=biodata"><i class="fa fa-arrow-left"></i>back</a></p>
    </div>
    <hr>
    <h4><i class="fa fa-id-card"></i> <?= language($lang_id, 'consent') ?></h4>
    <form name="consentForm" id="consentForm">
        <div class="row mb-10">
            <div class="col-md-12">
                <?php
                    $pes_question = "<label>Do you have any questions?</label><textarea class=\'form-control\' rows=\'5\' name=\'pes_question_en\' id=\'pes_question_en\'></textarea><input type=\'hidden\' id=\'hidvalue\' value=\'2\'>";
                ?>
                <label><?= language($lang_id, 'Do you have any questions') ?> </label>
                <textarea class="form-control" rows="5" name="<?= elementSelect($lang_id, 'pes_question') ?>" id="<?= elementSelect($lang_id, 'pes_question') ?>"><?= personInfo($pes_id, elementSelect($lang_id, 'pes_question'), $connect) ?></textarea>
            </div>
        </div>
        <div class="row mb-10">
            <div class="form-group">
                <div class="col-md-12">
                    <label class="control-label"><?= language($lang_id, 'Do I have your permission to conduct the evaluation for your case') ?> </label>
                    <div class="radio">
                        <label>
                            <?php $pes_permission_conduct = personInfo($pes_id, 'pes_permission_conduct', $connect); //echo $pes_permission_conduct ?>
                            <input type="radio" name="pes_permission_conduct" value="Yes" <?php if($pes_permission_conduct=='Yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'ok') ?>
                        </label>
                        &nbsp;&nbsp;
                        <label>
                            <input type="radio" name="pes_permission_conduct" value="No" <?php if($pes_permission_conduct=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'not') ?>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="operator" value="<?= $u_id ?>">
        <input type="hidden" name="pes_id" value="<?= $pes_id ?>">
        <input type="hidden" name="lang_id" value="<?= $lang_id ?>">
    </form>
    <button class="btn btn-primary" onclick="consentAdd('module/evaluation/action/consentAdd.php', 'consentForm')">
        <div id="processing"><i class="fa fa-check-circle"></i> <?= button_link($lang_id, 'save') ?></div>
    </button>
</div>

