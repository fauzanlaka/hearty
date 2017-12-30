<?php
    function menu($lang_id, $lang_value){
        switch ($lang_id){
            //ภาษาอังกฤษ
            case 'en':
                switch ($lang_value){
                    case 'user':
                        return "user";
                        break;
                    case 'setting':
                        return 'setting';
                        break;
                    case 'logout':
                        return 'logout';
                        break;
                }
            //ภาษาไทย
            case 'th':
                switch ($lang_value){
                    case 'user':
                        return 'ผู้ใช้';
                        break;
                    case 'setting':
                        return 'ตั้งค่า';
                        break;
                    case 'logout':
                        return 'ออกจากระบบ';
                        break;
                }
        }
    }
?>

