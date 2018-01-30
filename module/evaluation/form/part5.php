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
        <h4 class="title"><a class="btn btn-default icon-btn" href="#"><i class="fa fa-file"></i><?= language($lang_id, 'part') ?> 5</a></h4>
        <p><a class="btn btn-primary icon-btn" href="?mod=biodata"><i class="fa fa-arrow-left"></i>back</a></p>
    </div>
    <hr>
    <h4><i class="fa fa-id-card"></i> <?= $lang_text['Physical evidence'] ?></h4>
    <hr>
    <h5 class="text-primary"><?= language($lang_id, 'Traumatic Experiences Related the Current Situation in Southern Thailand') ?></h5>
    <form name="allegationForm" id="allegationForm">
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Acute Injury Type (circle)'] ?> </label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Pain'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <input type="checkbox" name="pes_sun" id="hi1" value="1" onclick="checkHide('hidden1')"><?= $lang_text['Other'] ?>
                    </label>
                </div>
            </div>
            <div class="col-md-6" id="hidden1" style="display: none;">
                <label><?= $lang_text['specify'] ?></label>
                <input type="text" class="form-control" name="" id="" value="">
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
