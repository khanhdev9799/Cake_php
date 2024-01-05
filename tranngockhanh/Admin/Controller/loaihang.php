<?php
$action = "loaihang";
if (isset($_GET['act'])) {
  $action = $_GET['act'];
}
switch ($action) {
  case "loaihang":

    include "View/editloaisanpham.php";
    break;
  case "import_loai":
    if (isset($_POST['submit'])) {
      // Bưới 1: lấy 1 file từ server  về, mà file up lên nó lưu trong $_FILES
      $file = $_FILES["file"]["tmp_name"];
      // khi lấy về thì phải xóa những signature 
      file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));
      // Bước 2: mở file ra fopen r,w
      $file_open = fopen($file, "r");
      // Bước 3:đọc nội dung của file
      $hh = new HangHoa();
      while (($csv = fgetcsv($file_open, 1000, ',')) !== false) {
        // $csv=[Null,Dép quay kẹp,6]
        $idLoai = $csv[0];
        $tenLoai = $csv[1];
        $idMenu = $csv[2];
        $hh->insertcsvLoaiHang($idLoai, $tenLoai, $idMenu);
      }
      echo '<script> alert("Import thành công")</script>';
    }
    include "View/editloaisanpham.php";
    break;
  case "delete_loai":
    if (isset($_GET['id'])) {
      $idLoai = $_GET['id'];
      $hh = new HangHoa();
      $hh->deleteMaloai($idLoai);
      echo '<script> alert("Xóa sản phẩm thành công")</script>';
    }
    include "View/editloaisanpham.php";
    break;

  case 'themloai':
    include "View/addloaisanpham.php";
    break;
  case 'themloai_action':
    if (isset($_POST['submit'])) {
      $idLoai = $_POST['idLoai'];
      $tenLoai = $_POST['tenLoai'];
      $idMenu = $_POST['idMenu'];
      // đem toàn bộ thông tin này chèn vào database
      $hh = new HangHoa();
      $hh->insertLoaiHang($tenLoai, $idMenu);
      // sau khi chèn xong, đưa hình từ server về thư mục cần đỗ vào
      if (isset($hh)) // chèn đc thì trả về là true
      {
        echo '<script> alert("Lưu sản phẩm thành công")</script>';
      }
    }
    include "View/editloaisanpham.php";
    break;

  case 'sualoai':
    include "View/addloaisanpham.php";
    break;
  case 'sualoai_action':
    if (isset($_POST['submit'])) {
      $idLoai = $_POST['idLoai'];
      $tenLoai = $_POST['tenLoai'];
      $idMenu = $_POST['idMenu'];
      // đem toàn bộ thông tin này chèn vào database
      $hh = new HangHoa();
      $hh->updateloai($idLoai, $tenLoai, $idMenu);
      // sau khi update xong, đưa hình từ server về thư mục cần đỗ vào
      if (isset($hh)) // chèn đc thì trả về là true
      {
        echo '<script> alert("Update sản phẩm thành công")</script>';
      }
    }
    include "View/editloaisanpham.php";
    break;
}
