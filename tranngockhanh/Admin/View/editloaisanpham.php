<style>
    .formlg {
        width: 6000px;
        min-height: 500px;
        height: auto;
        border-radius: 5px;
        margin: 5% auto;
        box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
        padding: 2%;
        background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
        background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);

    }

    form .con {
        display: -webkit-flex;
        display: flex;

        -webkit-justify-content: space-around;
        justify-content: space-around;

        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;

        margin: 0 auto;
    }

    /* the header form form */
    .head-form {
        margin: 2% auto 10% auto;
        text-align: center;
    }

    /* Login title form form */
    header h2 {
        font-size: 250%;
        font-family: 'Playfair Display', serif;
        color: #3e403f;
    }

    /*  A welcome message or an explanation of the login form */
    header p {
        letter-spacing: 0.05em;
    }


    .input-item {
        background: #fed1e3;
        color: #333;
        padding: 14.5px 0px 15px 9px;
        border-radius: 5px 0px 0px 5px;
    }

    /* Show/hide password Font Icon */
    #eye {
        background: #fff;
        color: #333;

        margin: 5.9px 0 0 0;
        margin-left: -20px;
        padding: 15px 9px 19px 0px;
        border-radius: 0px 5px 5px 0px;

        float: right;
        position: relative;
        right: 1%;
        top: -.2%;
        z-index: 5;

        cursor: pointer;
    }

    #eye1 {
        background: #55AC7A;
        color: #333;

        margin: 5.9px 0 0 0;
        margin-left: -20px;
        padding: 15px 9px 19px 0px;
        border-radius: 0px 5px 5px 0px;

        float: right;
        position: relative;
        right: 1%;
        top: -.2%;
        z-index: 5;

        cursor: pointer;
    }

    /* inputs form  */
    input[class="form-input"] {
        width: 240px;
        height: 50px;

        margin-top: 2%;
        padding: 15px;

        font-size: 16px;
        font-family: 'Abel', sans-serif;
        color: #8E6472;

        outline: none;
        border: none;

        border-radius: 0px 5px 5px 0px;
        transition: 0.2s linear;

    }

    input[id="txt-input"] {
        width: 250px;
    }

    /* focus  */
    input:focus {
        transform: translateX(-2px);
        border-radius: 5px;
    }

    .field-set button {
        display: inline-block;
        color: #952537;

        width: 280px;
        height: 50px;

        padding: 0 20px;
        background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);

        border-radius: 5px;

        outline: none;
        border: none;

        cursor: pointer;
        text-align: center;
        transition: all 0.2s linear;

        margin: 7% auto;
        letter-spacing: 0.05em;
    }

    /* Submits */
    .submits {
        width: 48%;
        display: inline-block;
        float: left;
        margin-left: 2%;

    }

    .log-in {
        font-size: 15px;
    }

    /*       Forgot Password button FAF3DD  */
    .frgt-pass {
        background: transparent;

    }

    /*     Sign Up button  */
    .sign-up {
        background: #F8F8E6;
        font-size: 15px;
    }

    .sign-up a {
        color: black;
    }

    .sign-up:hover {
        animation: ani9 0.4s ease-in-out infinite alternate;
        background-color: #fed6e3;
        transition-duration: 0.5s;

    }

    .log-in:hover {
        animation: ani9 0.4s ease-in-out infinite alternate;
    }

    @keyframes ani9 {
        0% {
            transform: translateY(3px);
        }

        100% {
            transform: translateY(5px);
        }
    }
</style>
<?php
        if(isset($_SESSION['admin']))
        {
            include "View/headder.php";
        }
        ?>
<div class="card mt-4" style="width: 1000px;">
    <div class="card-header">
        QUẢN LÝ LOẠI HÀNG
    </div>
    <div class="card-body">
        <table class="table table-striped table">
            <thead>
                <tr class="bg-info">
                    <th scope="col"></th>
                    <th scope="col">Mã loại</th>
                    <th scope="col">Tên loại</th>
                    <th scope="col">Id Menu</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php
                $hh = new hanghoa();
                $result = $hh->getListMaLoaiSP();
                while ($set = $result->fetch()) {
                ?>

                    <tr>
                        
                        <td><?php echo $set['idLoai']; ?></td>
                        <td><?php echo $set['tenLoai']; ?></td>
                        <td><?php echo $set['idMenu']; ?></td>
                        <td>
                        <a href="index.php?action=loaihang&act=delete_loai&id=<?php echo $set['idLoai']; ?>" class="btn btn-warning" style="background-color: red;">Xoá</a>


                            <a href="index.php?action=loaihang&act=sualoai&id=<?php echo $set['idLoai']; ?>" class="btn btn-info" style="background-color: blue;">Sửa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <input style type="hidden" name="xoa" value="" />
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        
        <a href="index.php?action=loaihang&act=themloai" class="btn btn-info">Thêm mới</a>
    </div>
</div>
<script>

</script>