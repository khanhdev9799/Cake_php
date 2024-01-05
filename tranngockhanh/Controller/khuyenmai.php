<?php
    $act="khuyenmai";
    if (isset($_GET["act"]))
    {
        $act = $_GET["act"];
    }
    switch ($act) {
        case 'khuyenmai':
            include "./View/khuyenmai.php";
            break;
        
        // case 'khuyenmai':
        //     include "./View/sanpham.php";
        //     break;

    }
?>