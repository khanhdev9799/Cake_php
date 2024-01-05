<style>
    .wrapper {
        padding: 30px 50px;
        border: 1px solid #ddd;
        border-radius: 15px;
        margin: 10px auto;
        max-width: 600px;
        background-color: #fff;
    }

    h4 {
        letter-spacing: -1px;
        font-weight: 400;
        color: #e20404;
        text-align: center;
        display: inline-block;
    }

    .img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
    }

    label {
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 500;
        color: #777;
        padding-left: 3px;
    }

    .form-control {
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .form-control:focus {
        box-shadow: none;
        border: 1.5px solid #e20404;
    }

    select {
        display: block;
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 10px;
        height: 40px;
        padding: 5px 10px;
        margin-bottom: 10px;
    }

    select:focus {
        outline: none;
    }

    .border {
        background-color: #fff;
        color: #e20404;
    }

    .border:hover {
        background-color: #e20404;
        color: #fff;
    }

    .btn-primary {
        background-color: #e20404;
    }

    .danger {
        background-color: #fff;
        color: #e20404;
        border: 1px solid #ddd;
    }

    .danger:hover {
        background-color: #e20404;
        color: #fff;
    }
</style>
<div class="wrapper bg-white mt-sm-5">
    <?php
    if (isset($_GET['idkh'])) {
        $idKH = $_GET['idkh'];
        $ur = new user();
        $result = $ur->getUserID($idKH);
        $tenKH = $result['tenKH'];
        $pass = $result['pass'];
        $username = $result['username'];
        $diaChi = $result['diaChi'];
        $email = $result['email'];
        $soDT = $result['soDT'];
        // $hinh = $result['hinh'];
    }
    ?>


    <div class="container">
        <div class="text-center">
            <h4>Account settings</h4>
        </div>

        <div class="py-2">
            <form action="index.php?action=editprofile&act=profile_action" method="post" enctype="multipart/form-data">
                <div class="row py-2">
                    <div class="col-md-6">
                        <input style="display: none;" type="text" name="idKH" value="<?php if (isset($idKH)) echo $idKH; ?>">
                        <label for="name">Name</label>
                        <input type="text" name="tenKH" class="bg-light form-control" value="<?php if (isset($tenKH)) echo $tenKH; ?>" placeholder="name">
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php if (isset($username)) echo $username; ?>" class="bg-light form-control" placeholder="username">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md pt-md-0 pt-3">
                        <label for="lastname">Địa chỉ</label>
                        <input type="text" value="<?php if (isset($diaChi)) echo $diaChi; ?>" name="diaChi" class="bg-light form-control" placeholder="address">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="bg-light form-control" value="<?php if (isset($email)) echo $email; ?>" placeholder="mail">
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="phone">Số điện thoại</label>
                        <input type="tel" name="soDT" value="<?php if (isset($soDT)) echo $soDT; ?>" class="bg-light form-control" placeholder="phone number">
                    </div>
                </div>

                <div class="py-3 pb-4 border-bottom">
                    <button class="btn btn-primary mr-3" type="submit" name="submit" value="submit">Save Changes</button>
                    <a href="index.php?action=trangchu" class="btn btn-secondary">Cancel</a>
                </div>

                <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                    <div>
                        <b>Deactivate your account</b>
                        <p>Details about your company account and password</p>
                    </div>
                    <div class="ml-auto">
                        <a href="index.php?action=editprofile&act=delete&id=<?php echo $_SESSION['idKH']; ?>" class="btn btn-danger">Deactivate</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function thisFileUpload() {
        document.getElementById("fileupload").click();
    }

    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>