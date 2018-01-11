<?php
    //sleep(1);
    $u_id = $_GET['userid'];
    $connect = '../../../connect/connect.php';
    include '../../../connect/connect.php';
    include '../../../function/profile.php';
    include '../../../language/button_link.php';
    include '../../../language/language.php';
    $lang_id = profile($u_id, 'u_language', $connect);
?>
<div class="row">
    <div class="col-md-3">
        <div class="bs-component">
            <div class="list-group">
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading"><?= language($lang_id, 'client photo') ?> </h4>
                </a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading"><?= language($lang_id, 'part') ?> 1</h4>
                </a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading"><?= language($lang_id, 'part') ?> 2</h4>
                </a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading"><?= language($lang_id, 'part') ?> 3</h4>
                </a>
            </div>    
        </div>
    </div>
    
    <div class="col-md-9" id="contentPart">
        <div class="card">
            <div class="card-title-w-btn">
                <h4 class="title"><a class="btn btn-default icon-btn" href="#"><i class="fa fa-file"></i><?= language($lang_id, 'part') ?> 1</a></h4>
                <p><a class="btn btn-primary icon-btn" href="?mod=biodata"><i class="fa fa-arrow-left"></i>back</a></p>
            </div>
            <hr>
            <form name="biodataForm" id="biodataForm">
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'idcard') ?></label>
                            <input class="form-control" type="text" name="pes_idcard" id="pes_idcard" placeholder="<?= language($lang_id, 'idcard') ?>" onkeyup="dataCheck('module/evaluation/action/idcard.php', 'biodataForm', 'idcardAlert')">
                            <div id="idcardAlert"></div>
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Interviewee’s Name') ?></label>
                            <input class="form-control" type="text" name="pes_name_th" id="pes_name_th" placeholder="<?= language($lang_id, 'Interviewee’s Name') ?>">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'lastname') ?></label>
                            <input class="form-control" type="text" name="pes_lastname_th" id="pes_lastname_th" placeholder="<?= language($lang_id, 'lastname') ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'birth date') ?></label>
                            <input type="date" class="form-control" name="pes_birth_date" id="pes_birth_date">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Nationality (country of origin)') ?></label>
                            <select class="form-control" name="pes_nationality" id="pes_nationality">
                                <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                <option value="thai">ไทย</option>
                                <option value="malay">Malay</option>
                                <option value="thai/malay">ไทย/Malay</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Client’s Gender') ?></label>
                            <select class="form-control" name="pes_gender" id="pes_gender">
                                <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                <option value="male"><?= language($lang_id, 'male') ?></option>
                                <option value="female"><?= language($lang_id, 'female') ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'house no') ?></label>
                            <input type="text" class="form-control" name="pes_house_no" id="pes_house_no" placeholder="<?= language($lang_id, 'house no') ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'place') ?></label>
                            <input type="text" class="form-control" name="pes_place" id="pes_place" placeholder="<?= language($lang_id, 'place') ?>">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'road') ?></label>
                            <input type="text" class="form-control" name="pes_road" id="pes_road" placeholder="<?= language($lang_id, 'road') ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'soi') ?></label>
                            <input type="text" class="form-control" name="pes_soi" id="pes_soi" placeholder="<?= language($lang_id, 'soi') ?>">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'subdistrict') ?></label>
                            <input type="text" class="form-control" name="pes_subdistrict" id="pes_subdistrict" placeholder="<?= language($lang_id, 'subdistrict') ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'district') ?></label>
                            <input type="text" class="form-control" name="pes_district" id="pes_district" placeholder="<?= language($lang_id, 'district') ?>">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'province') ?></label>
                            <input type="text" class="form-control" name="pes_province" id="pes_province" placeholder="<?= language($lang_id, 'province') ?>">
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'post code') ?></label>
                            <input type="text" class="form-control" name="pes_post" id="pes_post" placeholder="<?= language($lang_id, 'post code') ?>">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'evaluator') ?></label>
                            <input class="form-control" type="text" value="<?= profile($u_id, 'u_firstname', $connect) ?> <?= profile($u_id, 'u_lastname', $connect) ?>" disabled=""> 
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Date of Evaluation') ?></label>
                            <input class="form-control" type="date" name="pes_date_of_evaluation" id="pes_date_of_evaluation">
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Religion') ?></label>
                            <input type="text" class="form-control" name="pes_religion" id="pes_religion">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-10">
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Language of Interview') ?></label>
                            <select class="form-control" name="pes_language_of_interview" id="pes_language_of_interview">
                                <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                <option value="thai">ไทย</option>
                                <option value="patani">มลายูท้องถิ่น</option>
                                <option value="english">English</option>
                                <option value="malay">Malay</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label><?= language($lang_id, 'Referring Group/Organization') ?></label>
                            <select class="form-control" name="pes_referring_group" id="pes_referring_group">
                                <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                <?php
                                    $organization = mysqli_query($con, "SELECT * FROM organization");
                                    while($organizationRs = mysqli_fetch_array($organization)){ 
                                        $ora_id = str_replace("\'", "&#39;", $organizationRs["ora_id"]);
                                        $ora_name_th = str_replace("\'", "&#39;", $organizationRs["ora_name_th"]);
                                ?>
                                <option value="<?= $ora_id ?>"><?= $ora_name_th ?></option>
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
                                        <input type="radio" name="pes_interpreter" id="pes_interpreter" value="Yes"><?= language($lang_id, 'yes') ?>
                                    </label>
                                    &nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="pes_interpreter" id="pes_interpreter" value="No" checked=""><?= language($lang_id, 'no') ?>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label><?= language($lang_id, 'Interpreted Language') ?></label>
                                <select class="form-control" name="pes_interpreted_language" id="pes_interpreted_language">
                                    <option value="" disabled="" selected="" style="display: none;"><?= language($lang_id, 'please select') ?></option>
                                    <option value="thai">ไทย</option>
                                    <option value="patani">มลายูท้องถิ่น</option>
                                    <option value="english">English</option>
                                    <option value="malay">Malay</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label"><?= language($lang_id, 'Member of Ethnic Group') ?></label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="pes_ethnic"  value="Yes"><?= language($lang_id, 'true') ?>
                                    </label>
                                    &nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="pes_ethnic" value="No" checked=""><?= language($lang_id, 'fasle') ?>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label><?= language($lang_id, 'Specify') ?></label>
                                <input type="text" class="form-control" name="pes_ethnic_name" id="pes_ethnic_name" placeholder="<?= language($lang_id, 'Member of Ethnic Group') ?>">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="operator" value="<?= $u_id ?>">
                </form>
        </div>
    </div>
</div>

