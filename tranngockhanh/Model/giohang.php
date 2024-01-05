<?php
class giohang
{
    function add_items($idSP, $soluong, $tenTT)
    {
        $product = new sanpham();
        $db = new connect();
        $pros = $product->getDetailSP($idSP);
        $hinh = $pros['hinh'];
        $tenSP = $pros['tenSP'];
        $gia = $pros['gia'];
        $giaSale = $pros['giaSale'];
        $total = $soluong * $gia;
        $item = array(
            'idSP' => $idSP,
            'hinh' => $hinh,
            'tenSP' => $tenSP,
            'tenTT' => $tenTT,
            'soluong' => $soluong,
            'gia' => $gia,
            'total' => $total,
            'originalQuantity' => $pros['soLuongTon']
        );
        $_SESSION['cart'][] = $item;
        $soLuongTon = $pros['soLuongTon'] - $soluong;
        $select = " UPDATE ct_sanpham
                    SET soLuongTon = $soLuongTon
                    WHERE idSP = $idSP";
        return $db->exec($select);
    }

    function getTotal()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        return number_format($subtotal, 2);
    }

    function delete_item($idSP)
    {
        $db = new connect();
    
        // Use $idSP as the index consistently
        $originalQuantity = $_SESSION['cart'][$idSP]['originalQuantity'];
        $soLuongTon = $originalQuantity;
    
        $select = " UPDATE ct_sanpham
                    SET soLuongTon = $soLuongTon
                    WHERE idSP = " . $_SESSION['cart'][$idSP]['idSP'];
        $db->exec($select);
    
        unset($_SESSION['cart'][$idSP]);
    }
    

    function update_item($idSP, $soluong)
    {
        if ($soluong <= 0) {
            $this->delete_item($idSP);
        } else {
            $_SESSION['cart'][$idSP]['soluong'] = $soluong;
            $total_new = $_SESSION['cart'][$idSP]['soluong'] * $_SESSION['cart'][$idSP]['dongia'];
            $_SESSION['cart'][$idSP]['total'] = $total_new;
        }
    }
}
