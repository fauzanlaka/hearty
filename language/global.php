<?php
    function lang_global($lang_id, $lang_value){
        switch ($lang_id){
            //ภาษาอังกฤษ
            case 'en':
                switch ($lang_value){
                    case 'evaluation':
                        return "evaluation";
                        break;
                }
            //ภาษาอังกฤษ
            case 'th':
                switch ($lang_value){
                    case 'evaluation':
                        return 'แบบประเมิน';
                        break;
                    case 'profile':
                }
        }
    }
?>

