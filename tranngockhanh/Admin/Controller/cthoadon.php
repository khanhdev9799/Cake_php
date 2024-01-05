<?php
$act = "cthoadon";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'cthoadon':
        include "./View/cthoadon.php";
        break;
    case 'cthoadonedit':
        include './View/editcthoadon.php';
        break;
    case 'editcthoadon_action':
        if(isset($_GET['idSP'])) {
            $idSP = $_POST['idSP'];
            $soLuongMua = $_POST['soLuongMua'];
            $thanhTien = $_POST['thanhTien'];
            $tenTT = $_POST['tenTT'];

            $cthd = new cthoadon();
            $cthd->updatecthoadon($idSP, $soLuongMua, $thanhTien, $tenTT);
            echo '<script> alert ("Cập nhật chi tiết hóa đơn thành công") </script>';
            include './View/cthoadon.php';
        }
        break;
    case 'cthoadondelete_action':
        if(isset($_GET['idSP'])) {
            $idSP=$_GET['idSP'];
            $cthd = new cthoadon();
            $cthd->deletecthoadon($idHD);
            echo '<script> alert ("Xóa chi tiết hóa đơn hàng thành công") </script>';
            include './View/cthoadon.php';
        }
        break;
    }
?>
