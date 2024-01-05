<style>
.box{
    padding: 20px 10px;
    max-width: 100%;
    margin: auto;
}

</style>
<?php
        if(isset($_SESSION['admin']))
        {
            include "View/headder.php";
        }
        ?>

<div class="table-reponsive box">
    <h3 class="text-center" style="margin:150px 0px 30px 0px;"><b>DANH SÁCH KHÁCH HÀNG</b></h3>
    <table id="example" class="table table-bordered">
        <thead>
        <tr>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Username</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $kh = new customer();
                $result = $kh->getCustomerAll();
                while ($set = $result->fetch()) :
        ?>
            <tr>
                <td><?php echo $set['idKH']; ?> </td>
                <td><?php echo $set['tenKH']; ?></td>
                <td><?php echo $set['username']; ?></td>
                <td><?php echo $set['pass']; ?></td> 
                <td><?php echo $set['email']; ?></td>                     
                <td><?php echo $set['diaChi']; ?></td>                     
                <td><?php echo $set['soDT']; ?></td>                                   
                <td><a class="btn btn-warning" style="color:black; margin-left:20px;" href="index.php?action=customer&act=customeredit&idKH=<?php echo $set['idKH']?>">Cập Nhật</a></td> 
                <td><a class="btn btn-dark" style="color: white; margin-left:6px;" href="index.php?action=customer&act=customerdelete_action&idKH=<?php echo $set['idKH']?>">Xóa</a></td> 
            </tr>
            <?php
                endwhile
            ?>
        </tbody>
    </table>
</div>
