<?php
    header('content-type: text/javascript');
    include '../../../function/global.php';
    $u_id = $_POST['u_id'];
    $form_data = array(
            'u_language' => $_POST['u_language']
        );
    dbRowUpdate('user', $form_data, "WHERE u_id='$u_id'");
    //echo "swal(\"Good job!\", \"You clicked the button!\", \"success\");"; 
    echo "location.reload();";
?>

