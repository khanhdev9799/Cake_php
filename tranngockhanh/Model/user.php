<?php

class user
{
    function __construct()
    {
    }

    function InsertUser($tenKH, $user, $pass, $email, $diaChi, $soDT)
    {
        $db = new connect();
        $query = "  INSERT INTO khachhang (idKH, tenKH, username, pass, email, diaChi, soDT) 
                    VALUES (NULL, '$tenKH', '$user', '$pass', '$email', '$diaChi', '$soDT')";
        $db->exec($query);
    }

    function selectCheckUser($user, $email, $soDT)
    {
        $db = new connect();
        $select = "SELECT * FROM khachhang a WHERE a.username='$user' OR a.email='$email' OR a.soDT='$soDT'";
        echo $select;
        $result = $db->getInstance($select);
        return $result;
    }

    function loginUser($user, $pass)
    {
        $db = new connect();
        $select = " SELECT * FROM khachhang a WHERE a.username='$user' and a.pass='$pass'";
        $result = $db->getInstance($select);
        return $result;
    }

    function getUserID($idKH)
    {
        $db = new connect();
        $select = " SELECT * from khachhang where idKH=$idKH";
        $result = $db->getInstance($select);
        return $result;
    }

    function updateUser($idKH, $tenKH, $username, $email, $diaChi, $soDT, $hinh)
    {
        $db = new connect();
        $query = "  UPDATE khachhang
                    SET tenKH='$tenKH',
                        username='$username',
                        email='$email',
                        diaChi='$diaChi',
                        soDT=$soDT,
                        hinh=$hinh,
                    WHERE idKH=$idKH";
        $db->exec($query);
    }

    function updatePass($idKH, $newPassword)
    {
        $db = new connect();
        $query = "  UPDATE khachhang
                    SET pass = '$newPassword'
                    WHERE idKH = $idKH";
        $db->exec($query);
    }

    function deleteUser($idKH)
    {
        $db = new connect();
        $query = " DELETE from khachhang where idKH=$idKH";
        $db->exec($query);
    }
}
