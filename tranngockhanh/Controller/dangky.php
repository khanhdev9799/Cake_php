<?php
$act="dangky";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangky':
        include "./View/dangky.php";
        break;

    case 'dangky_action':
        $tenKH = '';
        $diaChi = '';
        $soDT = '';
        $username = '';
        $email = '';
        $pass = '';
        $passmd5 = '';
        if (isset($_POST['name'])) {
            $tenKH = $_POST['name'];
            $diaChi = $_POST['address'];
            $soDT = $_POST['phone'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $salt = 'TY345#';
            $staticsalt = 'G4334#';
            $passmd5 = md5($salt . $pass . $staticsalt);
            $nd = new user();
            $check = $nd->selectCheckuser($username, $email, $soDT);
            if ($check == true) {
                echo '<script> alert("username, hoặc email, số đt đã tồn tại");</script>';
                include "./View/dangky.php";
            } else {
                $nd->Insertuser($tenKH, $username, $passmd5, $email, $diaChi, $soDT);
                echo '<script> alert("Đăng ký thành công");</script>';
                include "./View/home.php";
            }
            //$username-> Insertusername()
        }
        break;
}
