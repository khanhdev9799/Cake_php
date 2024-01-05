<?php
function uploadImage()
{
    $target_dir = "./Content/avatar/";
    echo $target_dir;
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    echo $target_file;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadimage = 1;
    if (isset($_POST['submit'])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check != false) {
            $uploadimage = 1;
        } else {
            echo "Hình này ko có";
            $uploadimage = 0;
        }
    }
    if (file_exists($target_file)) {
        echo "File này đã tồn tài";
        $uploadimage = 0;
    }
    if ($_FILES["image"]["size"] > 5000000000000000000) {
        echo "Hình vượt dung lượng";
        $uploadimage = 0;
    }
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo " Hình ko đúng định dạng";
        $uploadimage = 0;
    }
    if ($uploadimage == 0) {
        echo "Lỗi quá trình upload";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo $target_file;
            echo "TC";
        } else {
            echo "TB";
        }
    }
}
