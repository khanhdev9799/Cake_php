<?php
$hd = new order();
$result = $hd->getOrder($_SESSION['idHD']);
$idHD = $result['idHD'];
$tenKH = $result['tenKH'];
$email = $result['email'];
$diaChi = $result['diaChi'];
$soDT = $result['soDT'];
$ngayHD = $result['ngayHD'];
$d = new DateTime($ngayHD);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fw-bold fs-3 text-danger text-center">HÓA ĐƠN</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Số hóa đơn:</strong></p>
                            <p class="mb-1"><strong>Ngày mua:</strong></p>
                            <p class="mb-1"><strong>Họ và tên:</strong></p>
                            <p class="mb-1"><strong>Email:</strong></p>
                            <p class="mb-1"><strong>Địa chỉ:</strong></p>
                            <p class="mb-1"><strong>Số điện thoại:</strong></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1"><?php echo $idHD; ?></p>
                            <p class="mb-1"><?php echo $d->format('d/m/Y'); ?></p>
                            <p class="mb-1"><?php echo $tenKH; ?></p>
                            <p class="mb-1"><?php echo $email; ?></p>
                            <p class="mb-1"><?php echo $diaChi; ?></p>
                            <p class="mb-1"><?php echo $soDT; ?></p>
                        </div>
                    </div>
                    <hr>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">STT</th>
                                <th class="text-center">Tên Bánh</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-center">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 0;
                            $kq = $hd->getOrderDetail($_SESSION['idHD']);
                            while ($set = $kq->fetch()) :
                                $index++;
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $index; ?></td>
                                    <td class="ps-4"><?php echo $set['tenSP']; ?></td>
                                    <td class="text-center"><?php echo $set['gia']; ?></td>
                                    <td class="text-center"><?php echo $set['soLuongMua']; ?></td>
                                    <td class="text-center"><?php echo number_format($set['thanhTien']); ?> đ</td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="fs-3">Tổng tiền</td>
                                <td colspan="2" class="text-center fs-3 fw-bold">
                                    <?php
                                    $cart = new giohang();
                                    echo $cart->getTotal();
                                    ?> đ
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="text-end mt-5">
                        <a href="index.php?action=order&act=confirm" class="btn btn-danger btn-lg fw-bold">Xác nhận</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>