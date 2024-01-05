<style>
  .container-edithoadon {
    margin: 50px 0px 0px 370px;
    width: 500px;
    height: 450px;
    border: 1px solid black;
  }

  label {
    margin-left: 20px;
  }

  .email-edithoadon {
    margin: 30px 0px 30px 50px;
    width: 300px;
    height: 40px;
  }

  .button-edithoadon {
    margin-left: 225px;
    border: 1px solid black;
    background: aqua;
    color: white;
    width: 90px;
    height: 30px;

  }
</style>
<?php
        if(isset($_SESSION['admin']))
        {
            include "View/headder.php";
        }
        ?>
<?php
if (isset($_GET['act']) && $_GET['act'] == 'hoadonedit') {
  $ac = 1;
}

if ($ac == 1) {
  echo '<div class="text-center" style="margin:50px 0px 0px 520px"><h3><b>Cập Nhật Hóa Đơn</b></h3></div>';
}
?>

<div class="container-edithoadon">
  <?php
  if (isset($_GET['idHD'])) {
    $idHD = $_GET['idHD'];
    $hd = new HoaDon();
    $result = $hd->getHoaDonById($idHD);
    $idHD = $result['idHD'];
    $idKH = $result['idKH'];
    $ngayHD = $result['ngayHD'];
    $tongTien = $result['tongTien'];
  }
  ?>


  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=hoadon&act=edithoadon_action&idHD=' . $idHD . '" method="post" enctype="multipart/form-data">';
  }
  ?>
  <form action="" method="post">
    <label for="">MÃ SỐ HD</label>
    <input class="email-edithoadon" type="text" name="idHD" value="<?php echo $idHD; ?>" readonly> <br>

    <label for="">MÃ KH</label>
    <input style="margin-left:74px" class="email-edithoadon" type="text" name="idKH" value="<?php echo $idKH; ?>" maxlength="100px"> <br>

    <label for="">NGÀY ĐẶT</label>
    <input class="email-edithoadon" type="text" name="ngayHDdat" value="<?php echo $ngayHD; ?>" maxlength="100px"> <br>

    <label for="">TỔNG TIỀN</label>
    <input type="text" class="email-edithoadon" name="tongTien" value="<?php echo $tongTien; ?>" maxlength="100px"> <br>

    <button class="button-edithoadon" type="submit" value="<?php echo ($ac == 1) ? 'Update' : 'Create'; ?>">Submit</button>
  </form>
</div>