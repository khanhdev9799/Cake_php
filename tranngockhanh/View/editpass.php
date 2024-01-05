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
        $pass = $result['pass'];
    }
    ?>


    <div class="container">
        <div class="text-center">
            <h4>Change Password</h4>
        </div>

        <div class="py-2">
            <form action="index.php?action=editpass&act=pass_action" method="post">
                <div class="row py-2">
                    <div class="col-md">
                        <label for="current_password">Current Password</label>
                        <input type="password" name="current_password" class="bg-light form-control" placeholder="Mật khẩu cũ" required>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6">
                        <label for="new_password">New Password</label>
                        <input type="password" name="new_password" class="bg-light form-control" placeholder="Mật khẩu mới" required>
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <label for="confirm_password">Confirm New Password</label>
                        <input type="password" name="confirm_password" class="bg-light form-control" placeholder="Nhập lại mật khẩu mới" required>
                    </div>
                </div>

                <div class="py-3 pb-4 border-bottom">
                    <button class="btn btn-primary mr-3" type="submit" name="submit" value="submit">Lưu thay đổi</button>
                    <a href="index.php?action=trangchu" class="btn btn-secondary">Hủy bỏ</a>
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