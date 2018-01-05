<?php
    //sleep(1);
    //echo "OK";
?>
<div class="row">
    <div class="col-md-12">
            <div class="card">
              <h4 class="pull-left">โปรไฟล์</h4>
              <a href="?mod=biodata" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> back</a>
              <br><br>
              <div class="card-body">
                    <form name="profile_form" method="post" target="ifrm" enctype="multipart/form-data" action="module/profile/action/profile_edit.php">
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label>ชื่อ</label>
                                <input class="form-control" type="text" name="u_firstname" id="u_firstname" value="เฟาซาน">
                            </div>
                            <div class="col-md-4">
                                <label>นามสกุล</label>
                                <input class="form-control" type="text" name="u_lastname" id="u_lastname" value="เยาะเเต">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label>Name</label>
                                <input class="form-control" type="text" name="u_firstname_en" id="u_firstname_en" value="fauzan">
                            </div>
                            <div class="col-md-4">
                                <label>Lastname</label>
                                <input class="form-control" type="text" name="u_lastname_en" id="u_firstname_en" value="yohtae">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label>เบอร์โทรศัพท์</label>
                                <input class="form-control" type="text" name="u_telephone" id="u_telephone" value="0936925058">
                            </div>
                            <div class="col-md-4">
                                <label></label>
                                <input class="form-control" type="text" name="u_house_no" id="house_no" value="65">
                            </div>
                            <div class="col-md-4">
                                <label>หมู่ที่</label>
                                <input class="form-control" type="text" name="u_place" id="place" value="4">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label>ตำบล</label>
                                <input class="form-control" type="text" name="u_subdistrict" id="subdistrict" value="ยะหา">
                            </div>
                            <div class="col-md-4">
                                <label>อำเภอ</label>
                                <input class="form-control" type="text" name="u_district" id="district" value="ยะหา">
                            </div>
                            <div class="col-md-4">
                                <label>จังหวัด</label>
                                <input class="form-control" type="text" name="u_province" id="province" value="ยะลา">
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-md-4">
                                <label>รหัสไปรษณีย์</label>
                                <input class="form-control" type="text" name="u_post" id="post" value="95120">
                            </div>
                            <div class="col-md-4">
                                <label>รูป</label>
                                <input class="form-control" type="file" name="u_photo">
                            </div>
                            <input type="hidden" name="u_id" value="1">
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                            </div>
                        </div>
                  </form>
                  <iframe name="ifrm" style="display:none;" mark_dailymotion="1"></iframe>
                
              </div>
            </div>
          </div>
</div>

