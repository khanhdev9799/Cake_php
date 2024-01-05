<style>
  .container-editcthoadon {
    margin: 30px 0px 30px 350px;
    width: 550px;
    height: 640px;
    border: 1px solid black;
  }

  label {
    margin-left: 20px;
  }

  .email-editcthoadon {
    margin: 30px 0px 30px 50px;
    width: 300px;
    height: 40px;
  }

  .button-editcthoadon {
    margin-left: 230px;
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
if (isset($_GET['act'])) {
  if ($_GET['act'] == 'cthoadonedit') {
    $ac = 1;
  }
}
?>
<?php
if ($ac == 1) {
  echo '<div class="text-center" style="margin:50px 0px 0px 520px"><h3><b>Cập Nhật Chi Tiết Hóa Đơn</b></h3></div>';
}
?>

<div class="container-editcthoadon">
  <?php
  if (isset($_GET['idSP'])) {
    $idSP = $_GET['idSP'];
    $cthd = new cthoadon();
    $result = $cthd->getcthoadonId($idSP);
    $idSP = $result['idSP'];
    $soLuongMua = $result['soLuongMua'];
    $thanhTien = $result['thanhTien'];
    $tenTT = $result['tenTT'];
  }
  ?>


  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=cthoadon&act=editcthoadon_action&idSP=' . $idSP . '" method="post" enctype="multipart/form-data">';
  }
  ?>
  <form action="" method="post">


    <label for="">MÃ HH</label>
    <input style="margin-left:114px" class="email-editcthoadon" type="text" name="idSP" value="<?php if ($ac == 1) {
                                                                                                  echo $idSP;
                                                                                                } else if ($ac == 2) {
                                                                                                  echo '';
                                                                                                } ?>"> <br>

    <label for="">SỐ LƯỢNG MUA</label>
    <input class="email-editcthoadon" type="text" name="soLuongMua" value="<?php if ($ac == 1) {
                                                                              echo $soLuongMua;
                                                                            } else if ($ac == 2) {
                                                                              echo '';
                                                                            } ?>"> <br>

    <label for="">TỔNG TIỀN</label>
    <input style="margin-left:84px" type="text" class="email-editcthoadon" name="thanhTien" value="<?php if ($ac == 1) {
                                                                                                      echo $thanhTien;
                                                                                                    } else if ($ac == 2) {
                                                                                                      echo '';
                                                                                                    } ?>"> <br>

    <label for="">TÌNH TRẠNG</label>
    <input style="margin-left:84px" type="text" class="email-editcthoadon" name="tenTT" value="<?php if ($ac == 1) {
                                                                                                  echo $tenTT;
                                                                                                } else if ($ac == 2) {
                                                                                                  echo '';
                                                                                                } ?>"> <br>

    <button class="button-editcthoadon" type="submit" value="<?php if ($ac == 1) {
                                                                echo 'Update';
                                                              } else if ($ac == 2) {
                                                                echo 'Create';
                                                              } ?>">Submit</button>
  </form>
</div>