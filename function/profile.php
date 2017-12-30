<?php
    function profile($u_id, $outputKey, $connect){
        include $connect;
        $sql = mysqli_query($con, "SELECT * FROM user WHERE u_id='$u_id'");
        $result = mysqli_fetch_array($sql);
        switch ($outputKey){
            case 'u_firstname':
                return $u_fname = str_replace("\'", "&#39;", $result["u_firstname"]);
                break;
            case 'u_lastname':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_lastname"]);
                break;
            case 'u_firstname_en':
                return $u_fname = str_replace("\'", "&#39;", $result["u_firstname_en"]);
                break;
            case 'u_lastname_en':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_lastname_en"]);
                break;
            case 'u_user_status':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_user_status"]);
                break;
            case 'u_language':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_language"]);
                break;
            case 'u_telephone':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_telephone"]);
                break;
            case 'u_house_no':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_house_no"]);
                break;
            case 'u_place':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_place"]);
                break;
            case 'u_subdistrict':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_subdistrict"]);
                break;
            case 'u_district':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_district"]);
                break;
            case 'u_province':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_province"]);
                break;
            case 'u_post':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_post"]);
                break;
            case 'u_photo':
                return $u_lastname = str_replace("\'", "&#39;", $result["u_photo"]);
                break;
            case 'u_username':
                return $u_username = str_replace("\'", "&#39;", $result["u_username"]);
                break;
        }
    }
?>

