<?php
class order
{
    public function __construct()
    {
    }
    function insertOrder($idKH)
    {
        $db = new connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "  INSERT INTO hoadon(idHD, idKH, ngayHD, tongTien) 
                    VALUES (NULL, '$idKH', '$ngay', 0)";
        $db->exec($query);
        $select = "SELECT idHD FROM hoadon ORDER BY idHD DESC LIMIT 1";
        $idHD = $db->getInstance($select);
        return $idHD[0];
    }

    function insertOderDetail($idHD, $idSP, $soLuongMua, $tenTT, $thanhTien)
    {
        $db = new connect();
        $query = "  INSERT INTO ct_hoadon (idHD, idSP, soLuongMua, tenTT, thanhTien) 
                    VALUES ('$idHD', '$idSP', '$soLuongMua', '$tenTT', '$thanhTien')";
        $db->exec($query);
    }


    function updateOder($idHD, $tongTien)
    {
        $db = new connect();
        $query = " UPDATE hoadon SET tongTien=$tongTien WHERE idHD=$idHD";
        $db->exec($query);
    }

    function getOrder($idHD)
    {
        $db = new connect();
        $select = " SELECT a.idHD, b.tenKH, b.email, b.diaChi, b.soDT, a.ngayHD
                    FROM hoadon a, khachhang b 
                    WHERE a.idKH = b.idKH and a.idHD = $idHD";
        $result = $db->getInstance($select);
        return $result;
    }

    function getOrderDetail($idHD)
    {
        $db = new connect();
        $select = " SELECT DISTINCT b.tenSP, a.gia, c.soLuongMua, c.thanhTien
                    FROM ct_sanpham a, sanpham b, ct_hoadon c 
                    WHERE a.idSP = b.idSP AND a.idSP = c.idSP AND c.idHD = $idHD";
        $result = $db->getList($select);
        return $result;
    }
}
