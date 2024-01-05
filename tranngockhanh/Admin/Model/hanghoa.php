<?php
class HangHoa
{
  public function __construct()
  {
  }

  function getListSanPham()
  {
    $db = new connect();
    $select = " SELECT DISTINCT b.idSP, a.tenSP, a.hinh, b.soLuongTon, b.gia, b.giaSale, b.ngayLap, b.moTa, c.tenLoai, d.tenTT, e.tenHangSX
                FROM sanpham a, ct_sanpham b, loai c, tinhtrang d, hangsx e 
                WHERE 	a.idSP = b.idSP 
                AND b.idLoai = c.idLoai 
                AND b.idTT = d.idTT
                AND a.idHangSX = e.idHangSX";
    $result = $db->getList($select);
    return $result;
  }

  function getListTinhTrang()
  {
    $db = new connect();
    $select = "SELECT * FROM tinhtrang";
    $result = $db->getList($select);
    return $result;
  }

  function getListMaLoaiSP()
  {
    $db = new connect();
    $select = "SELECT * FROM loai";
    $result = $db->getList($select);
    return $result;
  }

  function getListHang()
  {
    $db = new connect();
    $select = "SELECT * FROM hangsx";
    $result = $db->getList($select);
    return $result;
  }

  function insertSanPham($tenSP, $idHangSX, $hinh)
  {
    $db = new connect();
    $query = "INSERT INTO sanpham (idSP, tenSP, idHangSX, hinh) 
                VALUES (NULL, '$tenSP', $idHangSX, '$hinh')";
    $db->exec($query);

    $select = "SELECT LAST_INSERT_ID() as lastID";
    $result = $db->getInstance($select);
    return $result[0];
  }

  function insertChiTietSanPham($idSP, $idTT, $idLoai, $soLuongTon, $gia, $giaSale, $ngayLap, $moTa)
  {
    $db = new connect();
    $query = "  INSERT INTO ct_sanpham (idSP, idTT, idLoai, soLuongTon, gia, giaSale, ngayLap, moTa) 
                VALUES ($idSP, $idTT, $idLoai, $soLuongTon, $gia, $giaSale, '$ngayLap', '$moTa')";
    $db->exec($query);
  }

  function getSanPhamByID($id)
  {
    $db = new connect();
    $select = "SELECT * FROM sanpham WHERE idSP = $id";
    $result = $db->getInstance($select);
    return $result;
  }

  function getCTSanPhamByID($id)
  {
    $db = new connect();
    $select = " SELECT * FROM ct_sanpham a, sanpham b 
                WHERE a.idSP = b.idSP and  a.idSP = $id";
    $result = $db->getInstance($select);
    return $result;
  }

  function updateSanPham($idSP, $tenSP, $idHangSX, $hinh)
  {
    $db = new connect();
    $query = "  UPDATE sanpham 
                SET tenSP='$tenSP', idHangSX=$idHangSX, hinh='$hinh'
                WHERE idSP=$idSP";
    $db->exec($query);
  }

  function updateChiTietSanPham($idSP, $idTT, $idLoai, $soLuongTon, $gia, $giaSale, $ngayLap, $moTa)
  {
    $db = new connect();
    $query = "  UPDATE ct_sanpham 
                SET idTT=$idTT, idLoai=$idLoai, soLuongTon=$soLuongTon, gia=$gia, giaSale=$giaSale, ngayLap='$ngayLap', moTa='$moTa'
                WHERE idSP=$idSP";
    $db->exec($query);
  }

  function deleteSanPham($id)
  {
    $db = new connect();
    $query = "DELETE FROM sanpham WHERE idSP=$id";
    $db->exec($query);
  }

  function getListHangHoa_thongke1()
  {
    $db = new connect();
    $select = " SELECT a.idSP, b.tenSP, sum(a.soLuongMua) as soluongban FROM ct_hoadon a 
                    INNER JOIN sanpham b ON a.idSP = b.idSP 
                    GROUP BY a.idSP, b.tenSP";
    $result = $db->getList($select);
    return $result;
  }

  function deleteMaHang($id)
  {
    $db = new connect();
    $query = "delete from sanpham where idSP=$id";
    $db->exec($query);
  }

  function insertLoaiHang($tenLoai, $idMenu)
  {
    $db = new connect();
    $query = "INSERT INTO loai(idLoai,tenLoai,idMenu)
              VALUES (NULL,'$tenLoai',$idMenu)";
    $db->exec($query);
  }

  function deleteMaloai($id)
  {
    $db = new connect();
    $query = "DELETE FROM loai WHERE idLoai=$id";
    $db->exec($query);
  }

  function getThongKeMatHang($ngay, $thang, $nam)
  {
    $db = new connect();
    $select = " SELECT b.tenSP, c.ngayHD, SUM(a.soLuongMua) AS soluong
                FROM ct_hoadon a 
                INNER JOIN sanpham b ON a.idSP = b.idSP
                INNER JOIN hoadon c ON a.idHD = c.idHD 
                WHERE DAY(c.ngayHD) = '$ngay' AND MONTH(c.ngayHD) = '$thang' AND YEAR(c.ngayHD) = '$nam'
                GROUP BY b.tenSP, c.ngayHD";
    $result = $db->getList($select);
    return $result;
  }

  function getLoaiByID($id)
  {
    $db = new connect();
    $select = "SELECT * FROM loai WHERE idLoai=$id";
    $result = $db->getInstance($select);
    return $result;
  }

  function updateLoai($id, $tenloai, $idmenu)
  {
    $db = new connect();
    $query = "UPDATE loai 
                  SET tenLoai='$tenloai',
                  idMenu=$idmenu
                  WHERE idLoai=$id";
    $db->exec($query);
  }

  function insertCSVLoaiHang($maloai, $tenloai, $idmenu)
  {
    $db = new connect();
    $query = "INSERT INTO loai(idLoai, tenLoai, idMenu) VALUES ($maloai, '$tenloai', $idmenu)";
    $db->exec($query);
  }

  function getListHangHoa_thongke()
  {
    $db = new connect();
    $select = " SELECT a.idSP, b.tenSP, sum(a.soLuongMua) as soluongban FROM ct_hoadon a 
                    INNER JOIN sanpham b ON a.idSP = b.idSP 
                    WHERE YEAR(a.ngayMua) = YEAR(CURDATE())
                    GROUP BY a.idSP, b.tenSP";
    $result = $db->getList($select);
    return $result;
  }
}
