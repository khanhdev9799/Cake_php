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
    <h3 class="text-center" style="margin:150px 0px 30px 0px;"><b>DANH SÁCH HÓA ĐƠN</b></h3>
    <table id="example" class="table table-bordered">
        <thead>
        <tr>
                <th>Mã số hóa đơn</th>
                <th>Mã khách hàng</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $hd = new hoadon();
                $result = $hd->getHoaDonAll();
                while ($set = $result->fetch()) :
        ?>
            <tr>
                <td><?php echo $set['idHD']; ?> </td>
                <td><?php echo $set['idKH']; ?></td>
                <td><?php echo $set['ngayHD']; ?></td>
                <td><?php echo $set['tongTien']; ?></td>                     
                <td><a style="color:orange; margin-left:20px;" href="index.php?action=hoadon&act=hoadonedit&idHD=<?php echo $set['idHD']?>">Cập Nhật</a></td> 
                <td><a style="color:red; margin-left:6px;" href="index.php?action=hoadon&act=hoadondelete_action&idHD=<?php echo $set['idHD']?>">Xóa</a></td> 
            </tr>
            <?php
                endwhile
            ?>
        </tbody>
    </table>
</div>
