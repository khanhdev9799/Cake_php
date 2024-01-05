<?php
include_once "Model/hanghoa.php";

$hanghoa = new HangHoa();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['thong_ke'])) {
    $ngay = isset($_POST['so_ngay']) ? $_POST['so_ngay'] : '';
    $thang = isset($_POST['so_thang']) ? $_POST['so_thang'] : '';
    $nam = isset($_POST['so_nam']) ? $_POST['so_nam'] : '';

    $resultMatHang = $hanghoa->getThongKeMatHang($ngay, $thang, $nam);
    $tenhh = [];
    $soluongban = [];

    foreach ($resultMatHang as $row) {
        $tenhh[] = $row['tenSP'];
        $soluongban[] = $row['soluong'];
    }

    echo json_encode(['tenhh' => $tenhh, 'soluongban' => $soluongban]);
    exit;
}

include "View/thongke.php";
?>
