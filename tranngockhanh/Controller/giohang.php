<?php
$act = 'giohang';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        if (isset($_POST['idSP'])) {
            $idSP = $_POST['idSP'];
            $tenTT = $_POST['tenTT'];
            $soluong = $_POST['soluong'];
            $gh = new giohang();
            $gh->add_items($idSP, $soluong, $tenTT);
        }
        include "./View/cart.php";
        break;

    case 'update_item':
        if (isset($_POST['newqty'])) {
            $newqty = $_POST['newqty'];
            $gh = new giohang();
            foreach ($newqty as $idSP => $qty) {
                if ($_SESSION['cart'][$idSP]['soluong'] != $qty) {
                    $gh->update_item($idSP, $qty);
                }
            }
        }
        echo '<meta http-equiv="refresh" content="0; url=../index.php?action=giohang"/>';
        break;


    case 'delete_item':
        if (isset($_GET['idSP'])) {
            $idSP = $_GET['idSP'];
            $gh = new giohang();
            $gh->delete_item($idSP);
        }
        include "./View/cart.php";
        break;
}
