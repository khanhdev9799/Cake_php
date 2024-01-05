<?php
        if(isset($_SESSION['admin']))
        {
            include "View/headder.php";
        }
        ?>
<?php
if (isset($_GET["act"])) {
  if ($_GET["act"] == "insertsp") {
    $ac = 1;
  } elseif ($_GET["act"] == "update") {
    $ac = 2;
  } else {
    $ac = 0;
  }
}
?>
<!-- biện luận để lấy tiêu đề -->
<?php
if ($ac == 1) {
  echo '<div class="row col-md-4 col-md-offset-4"><h3> THÊM SẢN PHẨM</h3></div>';
} elseif ($ac == 2) {
  echo '<div class="row col-md-4 col-md-offset-4"><h3> CẬP NHẬT SẢN PHẨM</h3></div>';
} else {
  echo '<div class="row col-md-4 col-md-offset-4"><h3> KHÔNG CÓ TRANG NÀO</h3></div>';
}
?>

<div class="row col-md-4 col-md-offset-4">
  <!-- tiến hành lấy thông tin của 1 sản phẩm -->
  <?php
  if (isset($_GET['id'])) {
    $idSP = $_GET['id'];
    $hh = new HangHoa();
    $result = $hh->getCTSanPhamByID($idSP);
    $tenSP = $result['tenSP'];
    $gia = $result['gia'];
    $giaSale = $result['giaSale'];
    $hinh = $result['hinh'];
    $idTT = $result['idTT'];
    $idLoai = $result['idLoai'];
    $idHangSX = $result['idHangSX'];
    $soLuongTon = $result['soLuongTon'];
    $ngayLap = $result['ngayLap'];
    $moTa = $result['moTa'];
  }
  ?>
  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=sanpham&act=insert_action" method="post" enctype="multipart/form-data">';
  } else if ($ac == 2) {
    echo '<form action="index.php?action=sanpham&act=update_action&id=<?php echo $idSP; ?>" method="post" enctype="multipart/form-data"> ';
  } else {
    echo 'rong';
  }
  ?>


  <table class="table" style="border: 0px;">
    <tr>
      <td>Tên Bánh</td>
      <td><input type="text" class="form-control" name="tenSP" value="<?php if (isset($tenSP)) echo $tenSP; ?>" maxlength="100px"></td>
    </tr>
    <tr>
      <td>Hình</td>
      <td>
        <label for="file"><img width="50px" id="output" height="50px" src="Content/image/<?php if (isset($idSP)) echo $hinh; ?>"></label>
        Chọn file để upload:
        <input type="file" name="image" id="fileupload" onchange="loadFile(event)">
      </td>
    </tr>
    <tr>
      <td>Số lượng tồn</td>
      <td><input type="text" class="form-control" name="soLuongTon" value="<?php if (isset($soLuongTon)) echo $soLuongTon; ?>"></td>
    </tr>
    <tr>
      <td>Giá</td>
      <td><input type="text" class="form-control" name="gia" value="<?php if (isset($gia)) echo $gia; ?>"></td>
    </tr>
    <tr>
      <td>Giá giảm</td>
      <td><input type="text" class="form-control" name="giaSale" value="<?php if (isset($giaSale)) echo $giaSale; ?>"></td>
    </tr>
    <tr>
      <td>Ngày lập</td>
      <td><input type="date" class="form-control" name="ngayLap" value="<?php if (isset($ngayLap)) echo $ngayLap; ?>"></td>
    </tr>
    <tr>
      <td>Mô tả</td>
      <td><input type="text" class="form-control" name="moTa" value="<?php if (isset($moTa)) echo $moTa; ?>"></td>
    </tr>
    <tr>
      <td>Size Bánh</td>
      <td>
        <select name="idTT" class="form-control" style="width:150px;">
          <?php
          $selectTT = -1;
          if (isset($idTT) && $idTT != -1) {
            $selectTT = $idTT;
          }
          $hh = new HangHoa();
          $results = $hh->getListTinhTrang();
          while ($set = $results->fetch()) :
          ?>
            <option value="<?php echo $set['idTT']; ?>" <?php if ($selectTT == $set['idTT']) echo 'selected="selected"'; ?>><?php echo $set['tenTT']; ?></option>
          <?php
          endwhile
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Loại Bánh</td>
      <td>
        <select name="idLoai" class="form-control" style="width:150px;">
          <?php
          $selectLoai = -1;
          if (isset($idLoai) && $idLoai != -1) {
            $selectLoai = $idLoai;
          }
          $hh = new HangHoa();
          $results = $hh->getListMaLoaiSP();
          while ($set = $results->fetch()) :
          ?>
            <option value="<?php echo $set['idLoai']; ?>" <?php if ($selectLoai == $set['idLoai']) echo 'selected="selected"'; ?>><?php echo $set['tenLoai']; ?></option>
          <?php
          endwhile
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Kiểu Bánh</td>
      <td>
        <select name="idHangSX" class="form-control" style="width:150px;">
          <?php
          $hang = -1;
          if (isset($idHangSX) && $idHangSX != -1) {
            $hang = $idHangSX;
          }
          $hh = new HangHoa();
          $results = $hh->getListHang();
          while ($set = $results->fetch()) :
          ?>
            <option value="<?php echo $set['idHangSX']; ?>" <?php if ($hang == $set['idHangSX']) echo 'selected="selected"'; ?>><?php echo $set['tenHangSX']; ?></option>
          <?php
          endwhile
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" value="submit" name="submit">
      </td>
    </tr>
  </table>
  </form>
</div>
<script>
  var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>