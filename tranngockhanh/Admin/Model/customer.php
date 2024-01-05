<?php
class customer
{
    public function __construct()
    {}

    function getCustomerAll()
    {
        $db =  new connect();
        $select = "select *  from khachhang ORDER BY idKH asc";
        $result = $db->getList($select);
        return $result;
    }
    public function getCustomerId($idKH) {
        $db = new connect();
        $select = "select * from khachhang where idKH = $idKH";
        $result = $db->getInstance($select);
        return $result;
    }

    function updatecustomer($idKH, $tenKH, $username, $pass, $email, $diaChi, $soDT) {
        $db=new connect();
        $query="update khachhang set idKH=$idKH, tenKH='$tenKH', username='$username', pass='$pass', email='$email', diaChi='$diaChi', 
        soDT=$soDT where idKH=$idKH";
        $db->exec($query);
    }

    function deletecustomer($idKH) {
        $db=new connect();
        $query = "delete from khachhang where idKH=$idKH";
        $db->exec($query);
    }
}
?>
