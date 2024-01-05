<?php
class comment
{
    function __construct()
    {
    }

    function insertComment($idSP, $idKH, $noidung)
    {
        $db = new connect();
        $date = new DateTime('now');
        $datecreate = $date->format('Y-m-d');
        $query = "INSERT INTO binhluan (idSP, idKH, ngaybl, noidung) VALUES ($idSP, $idKH, '$datecreate', '$noidung')";
        $db->exec($query);
    }

    function getComment($idSP)
    {
        $db = new connect();
        $select = " select a.username, b.noidung, b.ngaybl, a.tenKH
                        from khachhang a
                        inner join binhluan b 
                        on a.idKH = b.idKH where b.idSP = $idSP";
        $result = $db->getList($select);
        return $result;
    }
}
