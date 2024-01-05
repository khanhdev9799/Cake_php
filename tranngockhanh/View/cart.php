<div class="table-responsive">
    <?php
    if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) :
        echo '<script> alert ("Giỏ hàng của bạn chưa có sản phẩm nào..." ) </script>';
        include "home.php";
    ?>
    <?php
    else :
    ?>
            <table class="table table-bordered cart-table">
                <thead>
                    <tr>
                        <td colspan="9">
                            <h2 style="color: blue; text-align: center;">THÔNG TIN GIỎ HÀNG</h2>
                        </td>
                    </tr>
                    <tr class="table-success">
                        <th>Số TT</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Tùy Chọn Của Bạn</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $j = 0;
                    foreach ($_SESSION['cart'] as $id => $item) :
                        $j++;
                    ?>
                        <tr>
                            <td><?php echo $j; ?></td>
                            <td><img src="Content/image/<?php echo $item['hinh']; ?>" class="product-image"></td>
                            <td class="product-name"><?php echo $item['tenSP']; ?></td>
                            <td class="product-options"><?php echo $item['tenTT']; ?></td>
                            <td class="product-quantity"><input type="text" name="newqty[<?php echo $idsp; ?>]" value="<?php echo $item['soluong']; ?>"></td>
                            <td class="product-price"><?php echo $item['gia']; ?><sup><u>đ</u></sup></td>
                            <td class="product-total"><?php echo number_format($item['total']); ?><sup><u>đ</u></sup></td>
                            <td class="product-actions">
                                <a href="index.php?action=giohang&act=delete_item&idSP=<?php echo $id; ?>"><button type="button" class="btn btn-primary">Xóa</button></a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    <tr>
                        <td colspan="6">
                            <b>Tổng Tiền</b>
                        </td>
                        <td>
                            <b>
                                <?php
                                $gh = new giohang();
                                echo $gh->getTotal();
                                ?>
                                <sup><u>đ</u></sup>
                            </b>
                        </td>
                        <td><a href="index.php?action=order">Thanh toán</a></td>
                    </tr>
                </tbody>
            </table>
    <?php
    endif;
    ?>
</div>

<style>
    .cart-table th,
    .cart-table td {
        font-weight: bold;
        font-size: 16px;
        text-align: center;
        vertical-align: middle;
    }

    .cart-table th {
        background-color: red;
        color: white;
    }

    .cart-table tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    .cart-table tr:nth-child(even) {
        background-color: #ffffff;
    }

    .product-image {
        max-width: 100px;
        max-height: 100px;
        object-fit: contain;
    }

    .product-name {
        max-width: 100px;
        word-wrap: break-word;
    }

    .product-options,
    .product-price,
    .product-total,
    .product-actions {
        max-width: 100px;
        word-wrap: break-word;
    }
</style>