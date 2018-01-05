<?php
    function language($lang_id, $lang_value){
        switch ($lang_id){
            //ภาษาอังกฤษ
            case 'en':
                switch ($lang_value){
                    case 'setting':
                        return "setting";
                        break;
                    case 'logout':
                        return "logout";
                        break;
                    case 'add new':
                        return "add new";
                        break;
                    case 'all':
                        return "all item";
                        break;
                    case 'idcard':
                        return 'idcard';
                        break;
                    case 'name':
                        return "name";
                        break;
                    case 'lastname':
                        return 'lastname';
                        break;
                    case 'gender':
                        return 'gender';
                        break;
                }
            //ภาษาอังกฤษ
            case 'th':
                switch ($lang_value){
                    case 'setting':
                        return 'ตั้งค่า';
                        break;
                    case 'logout':
                        return "ออกจากระบบ";
                        break;
                    case 'add new':
                        return 'เพิ่มใหม่';
                        break;
                    case 'all':
                        return "ทั้งหมด";
                        break;
                    case 'idcard':
                        return 'เลขประจำตัวประชาชน';
                        break;
                    case 'name':
                        return "ชื่อ";
                        break;
                    case 'lastname':
                        return 'นามสกุล';
                        break;
                    case 'gender':
                        return 'เพศ';
                        break;
                }
        }
    }
?>

