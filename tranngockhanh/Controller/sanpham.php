<?php
    $act="sanpham";
    if (isset($_GET["act"]))
    {
        $act = $_GET["act"];
    }
    switch ($act) {
        case 'sanpham':
            include "./View/sanpham.php";
            break;
    }
?>