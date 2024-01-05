<?php
class HoaDon
{
    public function __construct()
    {
    }

    function getHoaDonAll()
    {
        $db =  new Connect();
        $select = "SELECT * FROM hoadon ORDER BY idHD ASC";
        $result = $db->getList($select);
        return $result;
    }

    public function getHoaDonById($idHD)
    {
        $db = new Connect();
        $select = "SELECT * FROM hoadon WHERE idHD = $idHD";
        $result = $db->getInstance($select);
        return $result;
    }

    function updateHoaDon($idHD, $idKH, $ngayHD, $tongTien)
    {
        $db = new Connect();
        $query = "  UPDATE hoadon 
                    SET idKH=$idKH, ngayHD='$ngayHD', tongTien=$tongTien 
                    WHERE idHD=$idHD";
        $db->exec($query);
    }
    

    function deleteHoaDon($idHD)
    {
        $db = new Connect();
        $query = "DELETE FROM hoadon WHERE idHD=$idHD";
        $db->exec($query);
    }
}
