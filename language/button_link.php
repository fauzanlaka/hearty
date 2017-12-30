<?php
    function button_link($lang_id, $lang_value){
        switch ($lang_id){
            //ภาษาอังกฤษ
            case 'en':
                switch ($lang_value){
                    case 'save':
                        return "save";
                        break;
                }
            //ภาษาอังกฤษ
            case 'th':
                switch ($lang_value){
                    case 'save':
                        return "บันทึก";
                        break;
                }
        }
    }
?>

