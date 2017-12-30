<?php
    header("content-type: text/javascript");
    session_start();
    include 'connect/connect.php';
    $login = mysqli_real_escape_string($con, $_POST['username']);
    $loginText = addslashes($login);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $passwordText = addslashes($password);
     
    $user = mysqli_query($con, "SELECT * FROM user WHERE u_username='$loginText' AND u_password='$passwordText'");
    $user_num = mysqli_num_rows($user);
    $user_res = mysqli_fetch_array($user);

    if($user_num > 0){ 
        $_SESSION["u_id"] = $user_res["u_id"];
        $_SESSION["u_user_status"] = $user_res["u_user_status"];
        echo "location = 'index.php?mod=index';"; 
    }else{
        echo "document.getElementById('loginStatus').innerHTML = '<font color=\"red\">ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</font>'";
    }
?>
