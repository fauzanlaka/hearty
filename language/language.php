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
                }
        }
    }
?>

