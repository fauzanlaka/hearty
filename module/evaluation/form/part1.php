<?php
    $u_id = $_GET['userid'];
    $pes_id = $_GET['id'];
    $connect = '../../../connect/connect.php';
    include '../../../connect/connect.php';
    include '../../../function/profile.php';
    include '../../../language/button_link.php';
    include '../../../language/language.php';
    include '../../../function/person.php';
    $lang_id = profile($u_id, 'u_language', $connect);
?>
        <div class="card">
            <div class="card-title-w-btn">
                <h4 class="title"><a class="btn btn-default icon-btn" href="#"><i class="fa fa-file"></i><?= language($lang_id, 'part') ?> 1</a></h4>
                <p><a class="btn btn-primary icon-btn" href="?mod=biodata"><i class="fa fa-arrow-left"></i>back</a></p>
            </div>
            <hr>
            <h4><i class="fa fa-id-card"></i> <?= language($lang_id, 'background information') ?></h4>
            <form name="biodataForm" id="biodataForm">
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'idcard') ?></label>
                            <input class="form-control" type="text" name="pes_idcard" id="pes_idcard" value="<?= personInfo($pes_id, 'pes_idcard', $connect) ?>">
                            <div id="idcardAlert"></div>
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Interviewee’s Name') ?></label>
                            <input class="form-control" type="text" name="pes_name_th" id="pes_name_th" value="<?= personInfo($pes_id, 'pes_name_th', $connect) ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'lastname') ?></label>
                            <input class="form-control" type="text" name="pes_lastname_th" id="pes_lastname_th" value="<?= personInfo($pes_id, 'pes_lastname_th', $connect) ?>">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'birth date') ?></label>
                            <input type="date" class="form-control" name="pes_birth_date" id="pes_birth_date" value="<?= personInfo($pes_id, 'pes_birthdate', $connect) ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Nationality (country of origin)') ?></label>
                            <select class="form-control" name="pes_nationality" id="pes_nationality">
                                <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                <?php $nationality = personInfo($pes_id, 'pes_nationality', $connect); ?>
                                <option value="thai" <?php if($nationality=='thai'){echo 'selected';} ?>>ไทย</option>
                                <option value="malay" <?php if($nationality=='malay'){echo 'selected';} ?>>Malay</option>
                                <option value="thai/malay" <?php if($nationality=='thai/malay'){echo 'selected';} ?>>ไทย/Malay</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Client’s Gender') ?></label>
                            <select class="form-control" name="pes_gender" id="pes_gender">
                                <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                <?php $gender = personInfo($pes_id, 'pes_gender', $connect) ?>
                                <option value="male" <?php if($gender=='male'){echo 'selected';} ?>><?= language($lang_id, 'male') ?></option>
                                <option value="female" <?php if($gender=='female'){echo 'selected';} ?>><?= language($lang_id, 'female') ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'house no') ?></label>
                            <input type="text" class="form-control" name="pes_house_no" id="pes_house_no" value="<?= personInfo($pes_id, 'pes_house_no', $connect) ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'place') ?></label>
                            <input type="text" class="form-control" name="pes_place" id="pes_place" value="<?= personInfo($pes_id, 'pes_place', $connect) ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'road') ?></label>
                            <input type="text" class="form-control" name="pes_road" id="pes_road" value="<?= personInfo($pes_id, 'pes_road', $connect) ?>">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'soi') ?></label>
                            <input type="text" class="form-control" name="pes_soi" id="pes_soi" value="<?= personInfo($pes_id, 'pes_soi', $connect) ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'subdistrict') ?></label>
                            <input type="text" class="form-control" name="pes_subdistrict" id="pes_subdistrict" value="<?= personInfo($pes_id, 'pes_subdistrict', $connect) ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'district') ?></label>
                            <input type="text" class="form-control" name="pes_district" id="pes_district" value="<?= personInfo($pes_id, 'pes_district', $connect) ?>">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'province') ?></label>
                            <input type="text" class="form-control" name="pes_province" id="pes_province" value="<?= personInfo($pes_id, 'pes_province', $connect) ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'post code') ?></label>
                            <input type="text" class="form-control" name="pes_post" id="pes_post" value="<?= personInfo($pes_id, 'pes_post', $connect) ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'evaluator') ?></label>
                            <input class="form-control" type="text" value="<?= profile($u_id, 'u_firstname', $connect) ?> <?= profile($u_id, 'u_lastname', $connect) ?>" disabled=""> 
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Date of Evaluation') ?></label>
                            <input class="form-control" type="date" name="pes_date_of_evaluation" id="pes_date_of_evaluation" value="<?= personInfo($pes_id, 'pes_date_of_evaluation', $connect) ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Religion') ?></label>
                            <input type="text" class="form-control" name="pes_religion" id="pes_religion" value="<?= personInfo($pes_id, 'pes_religion', $connect) ?>">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Language of Interview') ?></label>
                            <select class="form-control" name="pes_language_of_interview" id="pes_language_of_interview">
                                <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                <?php $lang_interview = personInfo($pes_id, 'pes_language_of_interview', $connect); ?>
                                <option value="thai" <?php if($lang_interview=='thai'){echo 'selected';} ?>>ไทย</option>
                                <option value="patani" <?php if($lang_interview=='patani'){echo 'selected';} ?>>มลายูท้องถิ่น</option>
                                <option value="english" <?php if($lang_interview=='english'){echo 'selected';} ?>>English</option>
                                <option value="malay" <?php if($lang_interview=='malay'){echo 'selected';} ?>>Malay</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Referring Group/Organization') ?></label>
                            <select class="form-control" name="pes_referring_group" id="pes_referring_group">
                                <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                <?php
                                    $ora_id_get = personInfo($pes_id, 'ora_id', $connect);
                                    $organization = mysqli_query($con, "SELECT * FROM organization");
                                    while($organizationRs = mysqli_fetch_array($organization)){ 
                                        $ora_id = str_replace("\'", "&#39;", $organizationRs["ora_id"]);
                                        $ora_name_th = str_replace("\'", "&#39;", $organizationRs["ora_name_th"]);
                                ?>
                                <option value="<?= $ora_id ?>" <?php if($ora_id_get==$ora_id){echo 'selected';} ?>><?= $ora_name_th ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label"><?= language($lang_id, 'Interpreter') ?></label>
                                <div class="radio">
                                    <label>
                                        <?php $interptreter = personInfo($pes_id, 'pes_interpreter', $connect); ?>
                                        <input type="radio" name="pes_interpreter" id="pes_interpreter" value="Yes" <?php if($interptreter=='Yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'yes') ?>
                                    </label>
                                    &nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="pes_interpreter" id="pes_interpreter" value="No" <?php if($interptreter=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'no') ?>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label><?= language($lang_id, 'Interpreted Language') ?></label>
                                <select class="form-control" name="pes_interpreted_language" id="pes_interpreted_language">
                                    <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                    <?php $interptreter_lang = personInfo($pes_id, 'pes_interpreted_language', $connect); ?>
                                    <option value="thai" <?php if($interptreter_lang=='thai'){echo 'selected';} ?>>ไทย</option>
                                    <option value="patani" <?php if($interptreter_lang=='patani'){echo 'selected';} ?>>มลายูท้องถิ่น</option>
                                    <option value="english" <?php if($interptreter_lang=='english'){echo 'selected';} ?>>English</option>
                                    <option value="malay" <?php if($interptreter_lang=='malay'){echo 'selected';} ?>>Malay</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label"><?= language($lang_id, 'Member of Ethnic Group') ?></label>
                                <div class="radio">
                                    <?php $ethnic = personInfo($pes_id, 'pes_ethnic', $connect) ?>
                                    <label>
                                        <input type="radio" name="pes_ethnic"  value="Yes" <?php if($ethnic=='Yes'){echo "checked='checked'";} ?>><?= language($lang_id, 'true') ?>
                                    </label>
                                    &nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="pes_ethnic" value="No" <?php if($ethnic=='No'){echo "checked='checked'";} ?>><?= language($lang_id, 'fasle') ?>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label><?= language($lang_id, 'Specify') ?></label>
                                <input type="text" class="form-control" name="pes_ethnic_name" id="pes_ethnic_name" value="<?= personInfo($pes_id, 'pes_ethnic_name', $connect) ?>">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="operator" value="<?= $u_id ?>">
                    <input type="hidden" name="pes_id" value="<?= $pes_id ?>">
                    <input type="hidden" name="lang_id" value="<?= $lang_id ?>">
                </form>
            <button class="btn btn-primary" onclick="personUpdate('module/evaluation/action/personUpdate.php', 'biodataForm')">
                <div id="processing"><i class="fa fa-fw fa-lg fa-check-circle"></i> <?= button_link($lang_id, 'save') ?></div> 
            </button>
        </div>