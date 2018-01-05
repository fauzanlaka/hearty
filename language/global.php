<?php
    function lang_global($lang_id, $lang_value){
        switch ($lang_id){
            //ภาษาอังกฤษ
            case 'en':
                switch ($lang_value){
                    case 'add new':
                        return "add new";
                        break;
                }
            //ภาษาอังกฤษ
            case 'th':
                switch ($lang_value){
                    case 'add new':
                        return 'เพิ่มใหม่';
                        break;
                }
        }
    }
?>

