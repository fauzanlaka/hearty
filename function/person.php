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
        }
    }
?>

