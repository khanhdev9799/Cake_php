<?php
        if(isset($_SESSION['admin']))
        {
            include "View/headder.php";
        }
        ?>
<?php
if (isset($_GET["act"])) {
  if ($_GET["act"] == "themloai") {
    $ac = 1;
  } elseif ($_GET["act"] == "sualoai") { 
    $ac = 2;
  } else {
    $ac = 0;
  }
}
?>
<!-- biện luận để lấy tiêu đề -->
<?php
if ($ac == 1) {
  echo '<div class="row col-md-4 col-md-offset-4"><h3> THÊM LOẠI HÀNG</h3></div>';
} else if ($ac == 2) {
  echo '<div class="row col-md-4 col-md-offset-4"><h3> CẬP NHẬT LOẠI HÀNG</h3></div>';
} else {
  echo '<div class="row col-md-4 col-md-offset-4"><h3> KHÔNG CÓ TRANG NÀO</h3></div>';
}
?>
<div class="card mt-3">
  <div class="card-header info">
    QUẢN LÝ LOẠI HÀNG
  </div>
  <div class="card-body" style="width: 1000px;">
    <?php
    if (isset($_GET['id'])) {
      $idLoai = $_GET['id']; //2
      $hh = new HangHoa();
      $result = $hh->getLoaiByID($idLoai);
      $tenLoai = $result['tenLoai'];
      $idMenu = $result['idMenu'];
    }
    ?>
    <?php
    if ($ac == 1) {
      echo '<form action="index.php?action=loaihang&act=themloai_action" method="post" enctype="multipart/form-data">';
    } else if ($ac == 2) {
      echo '<form action="index.php?action=loaihang&act=sualoai_action&id=<?php echo $idLoai;?>" method="post" enctype="multipart/form-data">';
    } else {
      echo 'rong';
    }
    ?>

    
    <div class="form-group">
      <label for="">Tên danh mục</label>
      <input type="text" name="tenLoai" value="<?php if (isset($tenLoai)) echo $tenLoai; ?>" class="form-control">

    </div>
    <div class="form-group">
      <label for="">Menu số:</label>
      <input type="text" name="idMenu" value="<?php if (isset($idMenu)) echo $idMenu; ?>" class="form-control">

    </div>

    <div class="form-group">
      <button type="submit" value="submit" name="submit" class="btn btn-primary">Lưu</button>
      <a href="index.php?action=loaihang" class="btn btn-danger">Danh sách</a>
    </div>
    </form>
  </div>
</div>