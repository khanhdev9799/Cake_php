<?php
$act = "dangnhap";
if(isset($_GET["act"])){
    $act = $_GET["act"];
}
switch ($act) {
    case "dangnhap":
        include './View/dangnhap.php';
        break;

    case 'dangnhap_action':
        $tendn = '';
        $pass = '';
        if (isset($_REQUEST['username']) && isset($_REQUEST['pass'])) {
            $tendn = $_REQUEST['username'];
            $pass = $_REQUEST['pass'];
            $salt = 'TY345#';
            $staticsalt = 'G4334#';
            $passmd5 = md5($salt . $pass . $staticsalt);
            $user=new user();
            $dn=$user -> loginUser($tendn,$passmd5);
            if ($dn==true) {
                echo '<script> alert("Đăng nhập thành công");</script>';
                $_SESSION['idKH']=$dn['idKH'];
                $_SESSION['tenKH']=$dn['tenKH'];
                $_SESSION['username']=$dn['username'];
                echo '<meta http-equiv="refresh"  content="0; url=./index.php?action=home"/>';
            } else {
                echo '<script> alert("Đăng nhập thất bại");</script>';
                include "./View/dangnhap.php";
            }
        }
        break;
}
