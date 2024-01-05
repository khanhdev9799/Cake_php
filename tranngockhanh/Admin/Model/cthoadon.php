<?php
class cthoadon
{
    public function __construct()
    {}

    function getCTHoaDonAll()
    {
        $db =  new connect();
        $select = "select *  from ct_hoadon ORDER BY idSP asc";
        $result = $db->getList($select);
        return $result;
    }
    public function getcthoadonId($idSP) {
        $db = new connect();
        $select = "select * from ct_hoadon where idSP = $idSP";
        $result = $db->getInstance($select);
        return $result;
    }

    function updatecthoadon($idSP, $soLuongMua, $thanhTien, $tenTT) {
        $db=new connect();
        $query="update ct_hoadon set idSP=$idSP, soLuongMua=$soLuongMua, thanhTien=$thanhTien, tenTT=$tenTT 
        where idSP=$idSP";
        $db->exec($query);
    }

    function deletecthoadon($idSP) {
        $db=new connect();
        $query = "delete from ct_hoadon where idSP=$idSP";
        $db->exec($query);
    }
}
?>