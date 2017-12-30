<?php
    function index($lang_id, $lang_value){
        switch ($lang_id){
            //ภาษาอังกฤษ
            case 'en':
                switch ($lang_value){
                    case 'Announce':
                        return "Announce";
                        break;
                    case 'Login History':
                        return 'Login History';
                        break;
                    case 'profile':
                        return 'PROFILE';
                        break;
                    case 'database':
                        return 'database';
                        break;
                }
            //ภาษาอังกฤษ
            case 'th':
                switch ($lang_value){
                    case 'Announce':
                        return 'ประกาศ';
                        break;
                    case 'Login History':
                        return "ประวัติเข้าใช้งานระบบ";
                        break;
                    case 'profile':
                        return 'โปรไฟล์';
                        break;
                    case 'database':
                        return 'ฐานข้อมูล';
                        break;
                }
        }
    }
?>

