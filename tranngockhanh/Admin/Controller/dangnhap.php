<?php
    $act="dangnhap";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act){
        case 'dangnhap':
            include "./View/dangnhap.php";
            break;
        case 'dangnhap_action':
            if(isset($_POST['txtusername'])&& isset($_POST['txtpassword']))
            {
                $user=$_POST['txtusername'];
                $pass=$_POST['txtpassword'];
                // kiểm tra có tồn tại database
                $dn = new dangnhap();
                $check = $dn->loginadmin($user,$pass);
                if($check!=false)
                {
                    $_SESSION['admin']=$check['user'];
                    echo '<script>alert("Đăng nhập thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=sanpham"/>';
                }
                else
                {
                    echo '<script>alert("Bạn đăng nhập sai")</script>';
                    include "./View/dangnhap.php";
                }
            }
            break;
    }
?>