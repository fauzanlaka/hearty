<?php
    function lang_profile($lang_id, $lang_value){
        switch ($lang_id){
            //ภาษาอังกฤษ
            case 'en':
                switch ($lang_value){
                    case 'system':
                        return "system";
                        break;
                    case 'profile':
                        return 'profile';
                        break;
                    case 'user&password':
                        return 'username & password';
                        break;
                    //form --> id=setting
                    case 'language':
                        return 'language';
                        break;
                    //form --> id=profile
                    case 'name':
                        return 'Name';
                        break;
                    case 'lastname':
                        return 'Lastname';
                        break;
                    case 'telephone':
                        return 'Telephone';
                        break;
                    case 'house_no':
                        return 'House No.';
                        break;
                    case 'place':
                        return 'Place';
                        break;
                    case 'subdistrict':
                        return 'Subdistrict';
                        break;
                    case 'district':
                        return 'District';
                        break;
                    case 'province':
                        return 'Province';
                        break;
                    case 'post':
                        return 'Post code';
                        break;
                    case 'image':
                        return 'photo';
                        break;
                    case 'address':
                        return 'address';
                        break;
                    case 'other':
                        return 'Others';
                        break;
                    case 'username':
                        return 'Username';
                        break;
                    case 'password':
                        return 'Password';
                        break;
                    case 'old_password':
                        return 'Old password';
                        break;
                    case 'new_password':
                        return 'New password';
                        break;
                    case 'confirm_new_password':
                        return 'Confirm new password';
                        break;
                }
            //ภาษาอังกฤษ
            case 'th':
                switch ($lang_value){
                    case 'system':
                        return 'ตั้งค่าระบบ';
                        break;
                    case 'profile':
                        return 'โปรไฟล์';
                        break;
                    case 'user&password':
                        return 'ชื่อผู้ใช้และรหัสผ่าน';
                        break;
                    //form
                    case 'language':
                        return 'ภาษา';
                        break;
                    //form --> id=profile
                    case 'name':
                        return 'ชื่อ';
                        break;
                    case 'lastname':
                        return 'นามากุล';
                        break;
                    case 'telephone':
                        return 'เบอร์โทรศัพท์';
                        break;
                    case 'house no':
                        return 'บ้านเลขที่.';
                        break;
                    case 'place':
                        return 'หมู่ที่';
                        break;
                    case 'subdistrict':
                        return 'ตำบล';
                        break;
                    case 'district':
                        return 'อำเภอ';
                        break;
                    case 'province':
                        return 'จังหวัด';
                        break;
                    case 'post':
                        return 'รหัสไปรษณีย์';
                        break;
                    case 'image':
                        return 'รูป';
                        break;
                    case 'address':
                        return 'ที่อยู่';
                        break;
                    case 'other':
                        return 'อิ่นๆ';
                        break;
                    case 'username':
                        return 'ชื่อผู้ใช้';
                        break;
                    case 'password':
                        return 'รหัสผ่าน';
                        break;
                    case 'old_password':
                        return 'รหัสผ่านเดิม';
                        break;
                    case 'new_password':
                        return 'รหัสผ่านใหม่';
                        break;
                    case 'confirm_new_password':
                        return 'ยืนยันรหัสผ่านใหม่';
                        break;
                }
        }
    }
?>

