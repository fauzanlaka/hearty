<?php
    include 'language/profile.php';
    include 'language/button_link.php';
    include 'language/language.php';
    $connect = 'connect/connect.php';
    $lang_id = profile($u_id, 'u_language', $connect);
    $u_photo = profile($u_id, 'u_photo', $connect);
?>

    
    <div class="page-title">
        <div>
            <h1><i class="fa fa-user-circle-o"></i> <?= index($lang_id, 'profile') ?></h1>
            <p><?= index($lang_id, 'database') ?></p>
        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-home fa-lg"></i></li>
            </ul>
        </div>
    </div>
<div class="row">
    
<div class="col-md-12">
            <div class="card">
              <table class="table table-bordered table-striped table-responsive">
                
                <tbody>
                  <tr>
                    <td width="15%" rowspan="5" align="center"><img width="150px" height="170px" src="module/user/photo/<?= $u_photo ?>"></td>
                    <td width="20%">ชื่อ-สกุล (ไทย)</td>
                    <td><?= profile($u_id, 'u_firstname', $connect) ?> <?= profile($u_id, 'u_lastname', $connect) ?></td>
                  </tr>
                  <tr>
                    <td>Name-Lastname (English)</td>
                    <td><?= profile($u_id, 'u_firstname_en', $connect) ?> <?= profile($u_id, 'u_lastname_en', $connect) ?></td>
                  </tr>
                  <tr>
                    <td><?= lang_profile($lang_id, 'telephone') ?></td>
                    <td><?= profile($u_id, 'u_telephone', $connect) ?></td>
                  </tr>
                  <tr>
                    <td><?= lang_profile($lang_id, 'address') ?></td>
                    <td>บ้านเลขที่ <?= profile($u_id, 'u_house_no', $connect) ?> หมู่ที่ <?= profile($u_id, 'u_place', $connect) ?> ตำบล <?= profile($u_id, 'u_subdistrict', $connect) ?> อำเภอ <?= profile($u_id, 'u_district', $connect) ?> จังหวัด <?= profile($u_id, 'u_province', $connect) ?> รหัสไปรษณีย์ <?= profile($u_id, 'u_post', $connect) ?></td>
                  </tr>
                  <tr>
                    <td><?= lang_profile($lang_id, 'other') ?></td>
                    <td>Larry</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card p-0">
            <ul class="nav nav-tabs nav-stacked user-tabs">
                <li class="active"><a href="#system-setting" data-toggle="tab"><?= lang_profile($lang_id, 'system') ?></a></li>
                <li><a href="#profile" data-toggle="tab"><?= lang_profile($lang_id, 'profile') ?></a></li>
                <li><a href="#username-password" data-toggle="tab"><?= lang_profile($lang_id, 'user&password') ?></a></li>
            </ul>
        </div>
    </div>

    <div class="col-md-9">
        <div class="tab-content">
            
            <!-- system-setting -->
            <div class="tab-pane active" id="system-setting">
                <div class="card user-settings">
                    <h4 class="line-head"><?= lang_profile($lang_id, 'system') ?></h4>
                    <form class="form-horizontal" name="system_setting_form">
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="inputEmail"><?= lang_profile($lang_id, 'language') ?></label>
                            <div class="col-lg-2">
                                <?php
                                    $u_language = profile($u_id, 'u_language', $connect);
                                ?>
                                <select class="form-control" id="u_language" name="u_language">
                                    <option value="th" <?php if($u_language=='th'){echo 'selected';} ?>>ไทย</option>
                                    <option value="en" <?php if($u_language=='en'){echo 'selected';} ?>>english</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="u_id" value="<?= $u_id ?>">
                    </form>
                    <button class="btn btn-primary" onclick="system_setting('module/profile/action/system_setting.php', 'system_setting_form')"><i class="fa fa-fw fa-lg fa-check-circle"></i><?= button_link($lang_id, 'save') ?></button>
                    
                </div>
            </div>
            <!-- /system-setting -->
            
            <!-- profile -->
            <div class="tab-pane fade" id="profile">
                <div class="card user-settings">
                    <h4 class="line-head"><?= lang_profile($lang_id, 'profile') ?></h4>
                    <form name="profile_form" method="post" target="ifrm" enctype="multipart/form-data" action="module/profile/action/profile_edit.php">
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label>ชื่อ</label>
                                <input class="form-control" type="text" name="u_firstname" id="u_firstname" value="<?= profile($u_id, 'u_firstname', $connect) ?>">
                            </div>
                            <div class="col-md-4">
                                <label>นามสกุล</label>
                                <input class="form-control" type="text" name="u_lastname" id="u_lastname" value="<?= profile($u_id, 'u_lastname', $connect) ?>">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label>Name</label>
                                <input class="form-control" type="text" name="u_firstname_en" id="u_firstname_en" value="<?= profile($u_id, 'u_firstname_en', $connect) ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Lastname</label>
                                <input class="form-control" type="text" name="u_lastname_en" id="u_firstname_en" value="<?= profile($u_id, 'u_lastname_en', $connect) ?>">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'telephone') ?></label>
                                <input class="form-control" type="text" name="u_telephone" id="u_telephone" value="<?= profile($u_id, 'u_telephone', $connect) ?>">
                            </div>
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'house_no') ?></label>
                                <input class="form-control" type="text" name="u_house_no" id="house_no" value="<?= profile($u_id, 'u_house_no', $connect) ?>">
                            </div>
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'place') ?></label>
                                <input class="form-control" type="text" name="u_place" id="place" value="<?= profile($u_id, 'u_place', $connect) ?>">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'subdistrict') ?></label>
                                <input class="form-control" type="text" name="u_subdistrict" id="subdistrict" value="<?= profile($u_id, 'u_subdistrict', $connect) ?>">
                            </div>
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'district') ?></label>
                                <input class="form-control" type="text" name="u_district" id="district" value="<?= profile($u_id, 'u_district', $connect) ?>">
                            </div>
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'province') ?></label>
                                <input class="form-control" type="text" name="u_province" id="province" value="<?= profile($u_id, 'u_province', $connect) ?>">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'post') ?></label>
                                <input class="form-control" type="text" name="u_post" id="post" value="<?= profile($u_id, 'u_post', $connect) ?>">
                            </div>
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'image') ?></label>
                                <input class="form-control" type="file" name="u_photo">
                            </div>
                            <input type="hidden" name="u_id" value="<?= $u_id ?>">
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                            </div>
                        </div>
                  </form>
                  <iframe name="ifrm" style="display:none;"></iframe>
                </div>
            </div>
            <!-- /profile -->
            
            
            <div class="tab-pane fade" id="username-password">
                <div class="card user-settings">
                    <h4 class="line-head"><?= lang_profile($lang_id, 'user&password') ?></h4>
                    <form name="username_form">
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'username') ?></label>
                                <input type="text" class="form-control" name="username" id="username" value="<?= profile($u_id, 'u_username', $connect) ?>">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'old_password') ?></label>
                                <input type="password" class="form-control" name="password" id="password" value="">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'new_password') ?></label>
                                <input type="password" class="form-control" name="newpassword" id="newpassword" value="">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label><?= lang_profile($lang_id, 'confirm_new_password') ?></label>
                                <input type="password" class="form-control" name="con_newpassword" id="con_newpassword" value="">
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-12">
                                <a class="btn btn-primary" onclick="username_edit('module/profile/action/usernameEdit.php', 'username_form')"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div id="process"></div>
            
        </div>
    </div>
     

      

</div>