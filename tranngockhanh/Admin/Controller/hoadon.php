<?php
$act = "hoadon";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'hoadon':
        include './View/hoadon.php';
        break;
    case 'hoadonedit':
        include './View/edithoadon.php';
        break;
    case 'edithoadon_action':
        if (isset($_GET['idHD'])) {
            $idHD = $_GET['idHD'];
            $idKH = $_POST['idKH'];
            $ngayHD = $_POST['ngayHD'];
            $tongTien = $_POST['tongTien'];
            $hd = new hoadon();
            $hd->updatehoadon($idHD, $idKH, $ngayHD, $tongTien);
            echo '<script> alert ("Cập nhật hóa đơn thành công") </script>';
            include './View/hoadon.php';
        }
        break;
    case 'hoadondelete_action':
        if (isset($_GET['idHD'])) {
            $idHD = $_GET['idHD'];
            $hd = new hoadon();
            $hd->deletehoadon($idHD);
            echo '<script> alert ("Xóa hóa đơn hàng thành công") </script>';
            include './View/hoadon.php';
        }
        break;
}
