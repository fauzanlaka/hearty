<?php
    include '../../../function/profile.php';
    include '../../../function/global.php';
    $connect = "../../../connect/connect.php";
    $u_id = $_POST['u_id'];
    $u_photo = profile($u_id, 'u_photo', $connect);
    //สำเนาบัตรประจำตัวประชาชน
    if($_FILES['u_photo']['tmp_name']==""){
        $u_photo_name = $u_photo;
    }else{
        $u_photo_tmp = $_FILES['u_photo']['tmp_name'];
        $u_photo_tmp_name = $_FILES['u_photo']['name'];
        $u_photo_name = time().$u_id.$u_photo_tmp_name;
        move_uploaded_file($u_photo_tmp, "../../../module/user/photo/".$u_photo_name);
    }
    $form_data = array(
        'u_firstname' => addslashes($_POST['u_firstname']),
        'u_lastname' => addslashes($_POST['u_lastname']),
        'u_firstname_en' => addslashes($_POST['u_firstname_en']),
        'u_lastname_en' => addslashes($_POST['u_lastname_en']),
        'u_telephone' => addslashes($_POST['u_telephone']),
        'u_house_no' => addslashes($_POST['u_house_no']),
        'u_place' => addslashes($_POST['u_place']),
        'u_subdistrict' => addslashes($_POST['u_subdistrict']),
        'u_district' => addslashes($_POST['u_district']),
        'u_province' => addslashes($_POST['u_province']),
        'u_post' => addslashes($_POST['u_post']),
        'u_photo' => $u_photo_name
    );
    dbRowUpdate('user', $form_data, "WHERE u_id='$u_id'");
?>
<script>
    top.location.reload();
</script>