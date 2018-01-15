<?php
    function personInfo($pes_id, $output, $connect){
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM person WHERE pes_id='$pes_id'");
        $result = mysqli_fetch_array($sql);
        switch ($output){
            case 'pes_idcard':
                return str_replace("\'", "&#39;", $result["pes_idcard"]);
                break;
            case 'pes_name_th':
                return str_replace("\'", "&#39;", $result["pes_name_th"]);
                break;
            case 'pes_lastname_th':
                return str_replace("\'", "&#39;", $result["pes_lastname_th"]);
                break;
            case 'pes_gender':
                return str_replace("\'", "&#39;", $result["pes_gender"]);
                break;
            case 'pes_birthdate':
                return $result['pes_birthdate'];
                break;
            case 'pes_nationality':
                return $result['pes_nationality'];
                break;
            case 'pes_gender':
                return $result['pes_gender'];
                break;
            case 'pes_house_no':
                return $result['pes_house_no'];
                break;
            case 'pes_place':
                return str_replace("\'", "&#39;", $result["pes_place"]);
                break;
            case 'pes_road':
                return str_replace("\'", "&#39;", $result["pes_road"]);
                break;
            case 'pes_soi':
                return str_replace("\'", "&#39;", $result["pes_soi"]);
                break;
            case 'pes_subdistrict':
                return str_replace("\'", "&#39;", $result["pes_subdistrict"]);
                break;
            case 'pes_district':
                return str_replace("\'", "&#39;", $result["pes_district"]);
                break;
            case 'pes_province':
                return str_replace("\'", "&#39;", $result["pes_province"]);
                break;
            case 'pes_post':
                return str_replace("\'", "&#39;", $result["pes_post"]);
                break;
            case 'pes_date_of_evaluation':
                return str_replace("\'", "&#39;", $result["pes_date_of_evaluation"]);
                break;
            case 'pes_religion':
                return str_replace("\'", "&#39;", $result["pes_religion"]);
                break;
            case 'pes_language_of_interview':
                return str_replace("\'", "&#39;", $result["pes_language_of_interview"]);
                break;
            case 'pes_referring_group':
                return str_replace("\'", "&#39;", $result["pes_referring_group"]);
                break;
            case 'pes_interpreter':
                return str_replace("\'", "&#39;", $result["pes_interpreter"]);
                break;
            case 'pes_interpreted_language':
                return str_replace("\'", "&#39;", $result["pes_interpreted_language"]);
                break;
            case 'pes_ethnic':
                return str_replace("\'", "&#39;", $result["pes_ethnic"]);
                break;
            case 'pes_ethnic_name':
                return str_replace("\'", "&#39;", $result["pes_ethnic_name"]);
                break;
            case 'ora_id':
                return $result['pes_referring_group'];
                break;
            case 'pes_question_th':
                return str_replace("\'", "&#39;", $result["pes_question_th"]);
                break;
            case 'pes_question_en':
                return str_replace("\'", "&#39;", $result["pes_question_en"]);
                break;
            case 'pes_permission_conduct':
                return str_replace("\'", "&#39;", $result["pes_permission_conduct"]);
                break;
        }
    }
?>

