<?php
$act = "order";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'order':
        if (isset($_SESSION['idKH'])) {
            $hd = new order();
            $idHD = $hd->insertOrder($_SESSION['idKH']);
            $_SESSION['idHD'] = $idHD;
            $tongTien = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
                $hd->insertOderDetail($idHD, $item['idSP'], $item['soluong'], $item['tenTT'], $item['total']);
                $tongTien += $item['total'];
            }
            $hd->updateOder($idHD, $tongTien);
            include "./View/order.php";
        } else {
            echo '<script>alert("Bạn chưa đăng nhập, vui lòng đăng nhập");</script>';
            echo '<meta http-equiv="refresh"  content="0; url=../tranngockhanh/index.php?action=dangnhap"/>';
        }
        break;
    case 'confirm':
        unset($_SESSION['cart']);
        unset($_SESSION['idHD']);
        echo '<meta http-equiv="refresh"  content="0; url=../tranngockhanh/index.php"/>';
        break;
}
