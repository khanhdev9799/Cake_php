<?php
$action = "sanpham";

if (isset($_GET['act'])) {
    $action = $_GET['act'];
}

$hanghoa = new HangHoa(); // Assuming HangHoa class is defined and available

switch ($action) {
    case "sanpham":
        include "View/hanghoa.php";
        break;

    case "insertsp":
        include "View/edithanghoa.php";
        break;

    case "insert_action":
        if (isset($_POST['submit'])) {
            $tenSP = $_POST['tenSP'];
            $hinh = $_FILES['image']['name'];
            $soLuongTon = $_POST['soLuongTon'];
            $gia = $_POST['gia'];
            $giaSale = $_POST['giaSale'];
            $ngayLap = $_POST['ngayLap'];
            $moTa = $_POST['moTa'];
            $idLoai = $_POST['idLoai'];
            $idTT = $_POST['idTT'];
            $idHangSX = $_POST['idHangSX'];
            // Inserting data into the 'sanpham' table
            $idSP = $hanghoa->insertSanPham($tenSP, $idHangSX, $hinh);

            // Inserting data into the 'ct_sanpham' table
            $hanghoa->insertChiTietSanPham($idSP, $idTT, $idLoai, $soLuongTon, $gia, $giaSale, $ngayLap, $moTa);

            // After inserting, upload the image to the desired directory
            if (isset($hanghoa)) {
                uploadImage();
                echo '<script> alert("Lưu sản phẩm thành công")</script>';
            }
        }
        include "View/hanghoa.php";
        break;

    case "update":
        include "View/edithanghoa.php";
        break;

    case "update_action":
        if (isset($_POST['submit'])) {
            // Extracting data from the form
            $idSP = $_POST['idSP'];
            $tenSP = $_POST['tenSP'];
            $gia = $_POST['gia'];
            $giaSale = $_POST['giaSale'];
            $hinh = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : null;
            $idLoai = isset($_POST['idLoai']) ? $_POST['idLoai'] : null;
            $idTT = isset($_POST['idTT']) ? $_POST['idTT'] : null;
            $idHangSX = isset($_POST['idHangSX']) ? $_POST['idHangSX'] : null;
            $ngayLap = isset($_POST['ngayLap']) ? $_POST['ngayLap'] : null;
            $moTa = isset($_POST['moTa']) ? $_POST['moTa'] : null;
            $soLuongTon = isset($_POST['soLuongTon']) ? $_POST['soLuongTon'] : null;

            // Updating data in the 'sanpham' table
            $hanghoa->updateSanPham($idSP, $tenSP, $idHangSX, $hinh);

            // Updating data in the 'ct_sanpham' table
            $hanghoa->updateChiTietSanPham($idSP, $idTT, $idLoai, $soLuongTon, $gia, $giaSale, $ngayLap, $moTa);

            // After updating, upload the image to the desired directory
            if (isset($hanghoa)) {
                uploadImage();
                echo '<script> alert("Update sản phẩm thành công")</script>';
            }
        }
        include "View/hanghoa.php";
        break;

    case "delete":
        if (isset($_GET['id'])) {
            $idSP = $_GET['id'];
            // Deleting data from the database
            $hanghoa->deleteSanPham($idSP);
            echo '<script> alert("Xóa sản phẩm thành công")</script>';
        }
        include "View/hanghoa.php";
        break;

    case 'thongke':
        include "View/thongke.php";
        break;
}
