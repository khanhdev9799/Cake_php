<style>
  .container-editcustomer{
    margin: 50px 0px 0px 370px;
    width: 500px;
    height: 900px;
    border: 1px solid black;
  }
  label{
    margin-left:20px;
  }
  .email-editcustomer{
    margin: 30px 0px 30px 50px;
    width:300px;
    height:40px;
  }
  .button-editcustomer{
    margin-left:225px;
    border:1px solid white;
    background:black;
    color:white;
    width:90px;
    height:30px;
    border-radius:5px;
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
  if ($_GET['act'] == 'customeredit') {
    $ac = 1;
  }
}
?>
<?php
if ($ac == 1) {
  echo '<div class="text-center" style="margin:50px 0px 0px 520px"><h3><b>Update Customer</b></h3></div>';
}
?>

<div class="container-editcustomer">
<?php
  if (isset($_GET['idKH'])) {
    $idKH = $_GET['idKH'];
    $kh = new customer();
    $result = $kh->getCustomerId($idKH);
    $idKH = $result['idKH'];
    $tenKH = $result['tenKH'];
    $user = $result['username'];
    $pass = $result['pass'];
    $email = $result['email'];
    $diaChi= $result['diaChi'];
    $soDT= $result['soDT'];
  }
  ?>


  <?php
  if ($ac == 1) {
    echo '<form action="index.php?action=customer&act=editcustomer_action&idKH=' . $idKH . '" method="post" enctype="multipart/form-data">';
  }
  ?>
    <form action="" method="post">
    <label for="">Mã khách hàng</label>
    <input class="email-editcustomer" type="text" name="idKH" value="<?php if($ac == 1) {echo $idKH;}else if($ac == 2) {echo '';} ?>" readonly> <br>
    <label for="">Tên khách hàng</label>
    <input style="margin-left:74px" class="email-editcustomer" type="text" name="tenKH" value="<?php if($ac == 1) {echo $tenKH;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
    <label for="">username</label>
    <input class="email-editcustomer" type="text" name="username" value="<?php if($ac == 1) {echo $user;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
    <label for="">password</label>
    <input type="text" class="email-editcustomer" name="pass" value="<?php if($ac == 1) {echo $pass;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
    <label for="">email</label>
    <input type="text" class="email-editcustomer" name="email" value="<?php if($ac == 1) {echo $email;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
    <label for="">Địa chỉ</label>
    <input type="text" class="email-editcustomer" name="diaChi" value="<?php if($ac == 1) {echo $diaChi;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
    <label for="">Số điện thoại</label>
    <input type="text" class="email-editcustomer" name="soDT" value="<?php if($ac == 1) {echo $soDT;}else if($ac == 2) {echo '';} ?>" maxlength="100px"> <br>
    <button class="button-editcustomer" type="submit" value="<?php if($ac == 1) {echo 'Update';} else if($ac == 2) {echo 'Create';} ?>">Submit</button>
    </form>
</div>