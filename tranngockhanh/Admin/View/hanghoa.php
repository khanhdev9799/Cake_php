<?php
        if(isset($_SESSION['admin']))
        {
            include "View/headder.php";
        }
        ?>
<div class="col-md-4 col-md-offset-4">
  <h3><b>DANH SÁCH SẢN PHẨM</b></h3>
</div>
<div class="row col-12">
  <a href="index.php?action=sanpham&act=insertsp">
    <h4>Thêm sản phẩm</h4>
  </a>
</div>
<div class="row">
  <table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Hình</th>
        <th>Số lượng tồn</th>
        <th>Đơn giá</th>
        <th>Giảm giá</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Loại</th>
        <th>Kích cỡ</th>
        <th>Kiểu bánh </th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new HangHoa();
      $result = $hh->getListSanPham();
      while ($set = $result->fetch()) :
      ?>
        <tr>
          <td><?php echo $set['idSP']; ?></td>
          <td><?php echo $set['tenSP']; ?></td>
          <td><img width="50px" height="50px" src="../Content/image/<?php echo $set['hinh']; ?>" /></td>
          <td><?php echo $set['soLuongTon']; ?></td>
          <td><?php echo $set['gia']; ?></td>
          <td><?php echo $set['giaSale']; ?></td>
          <td><?php echo $set['ngayLap']; ?></td>
          <td><?php echo $set['moTa']; ?></td>
          <td><?php echo $set['tenLoai']; ?></td>
          <td><?php echo $set['tenTT']; ?></td>
          <td><?php echo $set['tenHangSX']; ?></td>
          <td><a class="btn btn-warning" href="index.php?action=sanpham&act=update&id=<?php echo $set['idSP']; ?>">Cập nhật</a></td>
          <td><a class="btn btn-warning" href="index.php?action=sanpham&act=delete&id=<?php echo $set['idSP']; ?>">Xóa</a></td>
        </tr>
      <?php
      endwhile;
      ?>
    </tbody>
  </table>
</div>

