<?php
$act = "customer";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'customer':
        include './View/customer.php';
        break;
    case 'customeredit':
        include './View/editcustomer.php';
        break;
    case 'editcustomer_action':
        if (isset($_GET['idKH'])) {
            $idKH = $_GET['idKH'];
            $tenKH = $_POST['tenKH'];
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $diaChi = $_POST['diaChi'];
            $soDT = $_POST['soDT'];

            $kh = new customer();
            $kh->updatecustomer($idKH, $tenKH, $username, $pass, $email, $diaChi, $soDT);
            echo '<script> alert ("Cập nhật thông tin khách hàng thành công") </script>';
            include './View/customer.php';
        }
        break;
    case 'customerdelete_action':
        if (isset($_GET['idKH'])) {
            $idKH = $_GET['idKH'];
            $kh = new customer();
            $kh->deletecustomer($idKH);
            echo '<script> alert ("Xóa hóa thông tin khách hàng thành công") </script>';
            include './View/customer.php';
        }
        break;
}
