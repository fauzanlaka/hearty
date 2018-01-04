<?php
    header("content-type: text/javascript");
    include '../../../function/global.php';
    $u_id = $_POST['u_id'];
    $form_data = array(
        'u_username' => addslashes($_POST['username']),
        'u_password' => addslashes(md5(md5(md5(($_POST['con_newpassword'])))))
    );
    dbRowUpdate('user', $form_data, "WHERE u_id='$u_id'");
    echo "document.getElementById('confirm_new_password_alert').innerHTML = '';";
    echo "swal(\"updated!\", \"You clicked the button!\", \"success\");";
?>

