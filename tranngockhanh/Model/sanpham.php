<?php
class sanpham
{
    function __construct()
    {
    }

    function setSPNew()
    {
        $db = new connect();
        $select = " SELECT a.idSP, a.tenSP, a.hinh, d.gia, b.tenTT, c.tenLoai
                    FROM sanpham a, tinhtrang b, loai c, ct_sanpham d 
                    WHERE a.idSP = d.idSP and b.idTT = d.idTT and c.idLoai = d.idLoai
                    ORDER BY a.idSP
                    DESC LIMIT 8";
        $result = $db->getList($select);
        return $result;
    }
    function setSPSale()
    {
        $db = new connect();
        $select = " SELECT a.idSP, a.tenSP, a.hinh, d.gia, b.tenTT, c.tenLoai, d.giaSale
                    FROM sanpham a, tinhtrang b, loai c, ct_sanpham d 
                    WHERE a.idSP = d.idSP and b.idTT = d.idTT and c.idLoai = d.idLoai
                    AND d.giaSale > 0
                    ORDER BY a.idSP
                    DESC LIMIT 4";
        $sale = $db->getList($select);
        return $sale;
    }

    function getAllSP()
    {
        $db = new connect();
        $select = " SELECT a.idSP, a.tenSP, a.hinh, d.gia, b.tenTT, c.tenLoai
                    FROM sanpham a, tinhtrang b, loai c, ct_sanpham d 
                    WHERE a.idSP = d.idSP and b.idTT = d.idTT and c.idLoai = d.idLoai";
        $result = $db->getList($select);
        return $result;
    }

    function getAllSPPage($start, $limit)
    {
        $db = new connect();
        $select = " SELECT a.idSP, a.tenSP, a.hinh, d.gia, b.tenTT, c.tenLoai
                    FROM sanpham a, tinhtrang b, loai c, ct_sanpham d 
                    WHERE a.idSP = d.idSP and b.idTT = d.idTT and c.idLoai = d.idLoai limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getAllSPKMPage($start, $limit)
    {
        $db = new connect();
        $select = " SELECT a.idSP, a.tenSP, a.hinh, d.gia, b.tenTT, c.tenLoai, d.giaSale
                    FROM sanpham a, tinhtrang b, loai c, ct_sanpham d 
                    WHERE a.idSP = d.idSP and b.idTT = d.idTT and c.idLoai = d.idLoai AND d.giaSale > 0 limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function getAllSPKM()
    {
        $db = new connect();
        $select = " SELECT a.idSP, a.tenSP, a.hinh, d.gia, b.tenTT, c.tenLoai, d.giaSale
                    FROM sanpham a, tinhtrang b, loai c, ct_sanpham d 
                    WHERE a.idSP = d.idSP and b.idTT = d.idTT and c.idLoai = d.idLoai
                    AND d.giaSale > 0";
        $result = $db->getList($select);
        return $result;
    }

    function getLoai($id)
    {
        $db = new connect();
        $select = " SELECT DISTINCT a.idSP, b.idLoai, b.tenLoai
                    FROM ct_sanpham a, loai b
                    WHERE a.idLoai = b.idLoai and a.idSP=$id";
        $result = $db->getList($select);
        return $result;
    }

    function getTT($idSP)
    {
        $db = new connect();
        $select = " SELECT DISTINCT a.idSP, b.idTT, b.tenTT
                    FROM ct_sanpham a, tinhtrang b
                    where a.idTT = b.idTT and a.idSP=$idSP";
        $result = $db->getList($select);
        return $result;
    }

    function getHangSX($id)
    {
        $db = new connect();
        $select = " SELECT DISTINCT a.idSP ,b.idHangSX, b.tenHangSX 
                    FROM ct_sanpham a, hangsx b, sanpham c 
                    where c.idHangSX = b.idHangSX and a.idSP = c.idSP and a.idSP=$id";
        $result = $db->getList($select);
        return $result;
    }

    function getDetailSP($idSP)
    {
        $db = new connect();
        $select = " SELECT b.tenSP, b.idSP, a.gia, a.giaSale, b.hinh, c.tenTT, d.tenLoai, e.tenHangSX ,a.moTa, a.soLuongTon
                    FROM ct_sanpham a, sanpham b, tinhtrang c, loai d, hangsx e 
                    WHERE a.idSP = b.idSP and a.idTT = c.idTT and a.idLoai = d.idLoai 
                            and e.idHangSX = b.idHangSX
                            and b.idSP = $idSP";
        $result = $db->getInstance($select);
        return $result;
    }

    function getHangHoaId($id)
    {
        $db =  new connect();
        $select = " SELECT a.idSP, a.TenSP, a.Hinh, b.gia, b.giaSale, b.moTa, c.tenHangSX, r.tenLoai, d.tenTT
        FROM sanpham a
        JOIN ct_sanpham b ON a.idSP = b.idSP
   		JOIN tinhtrang d ON b.idTT = d.idTT
        JOIN loai r ON b.idLoai = r.idLoai
        JOIN hangsx c ON a.idHangSX = c.idHangSX
        WHERE a.idSP = 1
        LIMIT 1";
        $result = $db->getInstance($select);
        return $result;
    }
}
