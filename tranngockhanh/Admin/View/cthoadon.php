
<style>
.box{
    padding: 20px 10px;
    max-width: 100%;
    margin: 0 auto;
}
</style>
<?php
        if(isset($_SESSION['admin']))
        {
            include "View/headder.php";
        }
        ?>
<div class="table-reponsive box">
    <h3 class="text-center" style="margin-top:150px;"><b>DANH SÁCH CHI TIẾT HÓA ĐƠN</b></h3>
    <table id="example" class="table table-bordered">
        <thead>
        <tr>
                <th>Mã sản phẩm</th>
                <th>Số lượng mua</th>
                <th>Tình trạng</th>
                <th>Thành tiền</th>
                <th>Cập nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $cthd = new cthoadon();
                $result = $cthd->getCTHoaDonAll();
                while ($set = $result->fetch()) :
            ?>
            <tr>
                
                <td><?php echo $set['idSP']; ?></td>
                <td><?php echo $set['soLuongMua']; ?></td>
                <td><?php echo $set['tenTT']; ?></td>
                <td><?php echo $set['thanhTien']; ?></td>
                <td><a class="btn btn-danger" style="color:orange; margin-left:20px;" href="index.php?action=cthoadon&act=cthoadonedit&idSP=<?php echo $set['idSP']?>">Cập nhật</a></td> 
                <td><a class="btn btn-primary style="color:red; margin-left:6px;" href="index.php?action=cthoadon&actandhoadon&act=cthoadondelete_action&idSP=<?php echo $set['idSP']?>">Xóa</a></td> 
            </tr>
            <?php
                endwhile
            ?>
        </tbody>
    </table>
</div>
