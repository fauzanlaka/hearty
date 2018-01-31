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
    <h5 class="text-primary"><?=$lang_text['Physical Symptoms and Disabilities'] ?></h5>
    <form name="allegationForm" id="allegationForm">
        <div class="row mb-10">
            <div class="col-md-6">
                <label>1.<?= $lang_text['Acute Injury Type (select)'] ?> </label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Pain'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Abrasion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Contusion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Laceration'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Incision'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Penetrating'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Bleeding'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['loss of consciousness'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Broken Bone'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Deformity'] ?>
                    &nbsp;&nbsp;
                    </label>
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
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Location'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6"> 
                <label><?= $lang_text['Intensity'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
        </div>
         <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Duration'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                 <label><?= $lang_text['> 6 Weeks'] ?></label>  &nbsp;&nbsp;<br>
                 <input type="radio" name="" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Healing Time'] ?></label><br>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Current'] ?></label>  &nbsp;&nbsp;<br>
                <input type="radio" name="yy" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="yy" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>

         <div class="row mb-10">
            <div class="col-md-6">
                <label>2.<?= $lang_text['Acute Injury Type (select)'] ?> </label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Pain'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Abrasion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Contusion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Laceration'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Incision'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Penetrating'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Bleeding'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['loss of consciousness'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Broken Bone'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Deformity'] ?>
                    &nbsp;&nbsp;
                    </label>
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
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Location'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6"> 
                <label><?= $lang_text['Intensity'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
        </div>
         <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Duration'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                 <label><?= $lang_text['> 6 Weeks'] ?></label>  &nbsp;&nbsp;<br>
                 <input type="radio" name="" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Healing Time'] ?></label><br>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Current'] ?></label>  &nbsp;&nbsp;<br>
                <input type="radio" name="yy" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="yy" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>


         <div class="row mb-10">
            <div class="col-md-6">
                <label>3.<?= $lang_text['Acute Injury Type (select)'] ?> </label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Pain'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Abrasion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Contusion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Laceration'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Incision'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Penetrating'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Bleeding'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['loss of consciousness'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Broken Bone'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Deformity'] ?>
                    &nbsp;&nbsp;
                    </label>
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
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Location'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6"> 
                <label><?= $lang_text['Intensity'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
        </div>
         <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Duration'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                 <label><?= $lang_text['> 6 Weeks'] ?></label>  &nbsp;&nbsp;<br>
                 <input type="radio" name="" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Healing Time'] ?></label><br>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Current'] ?></label>  &nbsp;&nbsp;<br>
                <input type="radio" name="yy" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="yy" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>


         <div class="row mb-10">
            <div class="col-md-6">
                <label>4.<?= $lang_text['Acute Injury Type (select)'] ?> </label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Pain'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Abrasion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Contusion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Laceration'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Incision'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Penetrating'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Bleeding'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['loss of consciousness'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Broken Bone'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Deformity'] ?>
                    &nbsp;&nbsp;
                    </label>
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
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Location'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6"> 
                <label><?= $lang_text['Intensity'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
        </div>
         <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Duration'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                 <label><?= $lang_text['> 6 Weeks'] ?></label>  &nbsp;&nbsp;<br>
                 <input type="radio" name="" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Healing Time'] ?></label><br>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Current'] ?></label>  &nbsp;&nbsp;<br>
                <input type="radio" name="yy" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="yy" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>


         <div class="row mb-10">
            <div class="col-md-6">
                <label>5.<?= $lang_text['Acute Injury Type (select)'] ?> </label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Pain'] ?>
                    </label>
                    &nbsp;&nbsp;
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Abrasion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Contusion'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Laceration'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Incision'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Penetrating'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Bleeding'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['loss of consciousness'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Broken Bone'] ?>
                    &nbsp;&nbsp;
                    </label>
                    <label>
                        <input type="checkbox" name="" value="1"><?= $lang_text['Deformity'] ?>
                    &nbsp;&nbsp;
                    </label>
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
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Location'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6"> 
                <label><?= $lang_text['Intensity'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
        </div>
         <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Duration'] ?></label><br>
                 <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                 <label><?= $lang_text['> 6 Weeks'] ?></label>  &nbsp;&nbsp;<br>
                 <input type="radio" name="" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>
        <div class="row mb-10">    
            <div class="col-md-6">
                <label><?= $lang_text['Healing Time'] ?></label><br>
                <input type="text" name="" id="" class="form-control">
            </div>
            <div class="col-md-6">
                <label><?= $lang_text['Current'] ?></label>  &nbsp;&nbsp;<br>
                <input type="radio" name="yy" id="" value="yes"> <?= $lang_text['yes1'] ?>&nbsp;&nbsp;
                 <input type="radio" name="yy" id="" value="no"> <?= $lang_text['No'] ?>
            </div>
        </div>

        <div class="row mb-10">
            <div class="col-md-12">
                <label><?= $lang_text['physical scars or marks'] ?></label>
            </div>
            <div class="col-md-6">
                <input type="radio" name="yy" id="" value="yes" > <?= $lang_text['HaveYes'] ?>&nbsp;&nbsp;
                <input type="radio" name="nn" id="" value="no" > <?= $lang_text['HaveNo'] ?>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Where on your body'] ?></label>
                <input type="text" name="aa" id="" class="form-control">
                <input type="text" name="aa" id="" class="form-control">
                <input type="text" name="aa" id="" class="form-control">
                <input type="text" name="aa" id="" class="form-control">
                <input type="text" name="aa" id="" class="form-control">
                
            </div>
        </div>
         <h5 class="text-primary"><?=$lang_text['Mental Health Post-Detention'] ?></h5>
         <label><?= $lang_text['Did you receive any medical examination'] ?></label>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['Before, during or upon release from detention?'] ?></label>
            </div>
            <div class="col-md-6">
                <input type="radio" name="yy" id="" value="yes"> <?= $lang_text['YesUsedto'] ?>&nbsp;&nbsp;
                 <input type="radio" name="yy" id="" value="no"> <?= $lang_text['NoUsedto'] ?>
            </div>
            
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['After your release?'] ?></label>
            </div>
            <div class="col-md-6">
                <input type="radio" name="yy" id="" value="yes"> <?= $lang_text['YesUsedto'] ?>&nbsp;&nbsp;
                 <input type="radio" name="yy" id="" value="no"> <?= $lang_text['NoUsedto'] ?>
            </div>
            
        </div>

         <label><?= $lang_text['receive any medical treatment'] ?></label>
         <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['While you were detained?'] ?></label>
            </div>
            <div class="col-md-6">
                <input type="radio" name="yy" id="" value="yes"> <?= $lang_text['YesUsedto'] ?>&nbsp;&nbsp;
                 <input type="radio" name="yy" id="" value="no"> <?= $lang_text['NoUsedto'] ?>
            </div>
            
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <label><?= $lang_text['After your release?'] ?></label>
            </div>
            <div class="col-md-6">
                <input type="radio" name="yy" id="" value="yes"> <?= $lang_text['YesUsedto'] ?>&nbsp;&nbsp;
                 <input type="radio" name="yy" id="" value="no"> <?= $lang_text['NoUsedto'] ?>
            </div>
            
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
