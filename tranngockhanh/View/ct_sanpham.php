<script type="text/javascript">
    function chonloai(a) {
        document.getElementById("loai").value = a;
    }
</script>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
            </div>
        </div>
        <article class="row">
            <form action="index.php?action=giohang" method="post">
                <div class="col-md-6">
                    <div class="tab-content">
                        <?php
                        $idSP = 0;
                        $tenSP = '';
                        $tenTT = '';
                        $gia = 0;
                        $moTa = '';
                        $hinh = '';
                        $tenLoai = '';
                        $tenHangSX = '';
                        $soLuongTon = '';
                        if (isset($_GET['idSP'])) {
                            $idSP = $_GET['idSP'];
                            $dt = new sanpham();
                            $result = $dt->getDetailSP($idSP);
                            $idSP = $result['idSP'];
                            $tenSP = $result['tenSP'];
                            $tenTT = $result['tenTT'];
                            $gia = $result['gia'];
                            $moTa = $result['moTa'];
                            $hinh = $result['hinh'];
                            $tenLoai = $result['tenLoai'];
                            $tenHangSX = $result['tenHangSX'];
                            $soLuongTon = $result['soLuongTon'];
                        }
                        ?>
                        <div class="tab-pane active">
                            <img src="Content/image/<?php echo $hinh ; ?>" alt="">
                        </div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                    </ul>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="idSP" value="<?php echo $idSP; ?>" />
                    <h3 class="product-title"><?php echo $tenSP; ?></h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <h4 class="product-namebrand">
                        <?php echo $tenHangSX; ?>
                    </h4>
                    <p class="product-description">
                        <?php echo $moTa; ?>
                    </p>
                    <h4 class="price">Giá bán: <?php echo number_format($gia); ?>đ</h4>
                    <h5 class="colors">size bánh:
                        <select name="tenTT" class="form-select" style="width: 150px;">
                            <?php
                            $result = $dt->getTT($idSP);
                            while ($set = $result->fetch()) {
                            ?>
                                <option value="<?php echo $tenTT; ?>"><?php echo $tenTT; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <br>
                        <input type="hidden" name="loai" id="loai" value="0" />
                        Loại Bánh:
                        <button type="button" class="btn btn-primary" id="setloai">
                            <?php echo $tenLoai; ?>
                        </button>
                        <br><br>
                        Số Lượng:
                        <input type="number" id="soluong" name="soluong" min="1" max="<?php echo $soLuongTon; ?>" value="1" />
                    </h5>
                    <h5>Số lượng còn: <?php echo number_format($soLuongTon); ?></h5>
                    <div class="action">
                        <!-- <button class="btn btn-primary add-to-cart" type="submit" data-toggle="modal" data-target="#myModal">MUA NGAY</button> -->
                        <button class="btn btn-primary add-to-cart" type="submit" data-toggle="modal" data-target="#myModal" <?php if ($soLuongTon === 0) echo 'style="display: none;"'; ?>>MUA NGAY</button>
                        
                    </div>
                </div>
            </form>
        </article>
    </div>
</section>

<!-- PHP k có form lồng form -->


<!-- ... Rest of your HTML code ... -->

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> -->



<style>
    .benefit {
        margin-top: 74px;
    }

    .benefit_row {
        padding-left: 15px;
        padding-right: 15px;
    }

    .benefit_col {
        padding-left: 0px;
        padding-right: 0px;
    }

    .benefit_item {
        height: 100px;
        background: #f3f3f3;
        border-right: solid 1px #FFFFFF;
        padding-left: 25px;
    }

    .benefit_col:last-child .benefit_item {
        border-right: none;
    }

    .benefit_icon i {
        font-size: 30px;
        color: #fe4c50;
    }

    .benefit_content {
        padding-left: 22px;
    }

    .benefit_content h6 {
        text-transform: uppercase;
        line-height: 18px;
        font-weight: 500;
        margin-bottom: 0px;
    }

    .benefit_content p {
        font-size: 12px;
        line-height: 18px;
        margin-bottom: 0px;
        color: #51545f;
    }

    .tabs_section_container {
        width: 100%;
        padding-bottom: 80px;
        border-bottom: solid 1px #ebebeb;
    }

    .tabs_container {
        margin-top: 66px;
        margin-bottom: 66px;
    }

    .tab {
        margin-right: 50px;
        cursor: pointer;
    }

    .tab:last-child {
        margin-right: 0px;
    }

    .tab span {
        height: 40px;
        line-height: 40px;
        font-size: 16px;
        font-weight: 500;
        color: #1e1e27;
    }

    .tab:hover span {
        color: #b5aec4;
    }

    .tab.active span {
        color: #fe4c50;
        border-bottom: solid 1px #fe4c50;
    }

    .tab_container {
        width: 100%;
        display: none;
    }

    .tab_container.active {
        display: block;
    }



    .tab_title {
        margin-bottom: 98px;
    }

    .tab_title h4 {
        display: inline-block;
        color: #fe4c50;
        border-bottom: solid 1px #fe4c50;
    }

    .tab_text_block {
        margin-bottom: 133px;
    }

    .tab_text_block p {
        font-weight: 400;
        margin-top: 10px;
    }

    .tab_image {
        width: 100%;
        margin-bottom: 131px;
    }

    .tab_image img {
        width: 60%;
    }

    .desc_last {
        margin-bottom: 0px;
    }



    .additional_info_col h1 span {
        margin-left: 22px;
    }

    .additional_info_title {
        margin-bottom: 48px;
    }



    .reviews_title {
        margin-bottom: 58px;
    }

    .user_review_container {
        width: 100%;
        margin-bottom: 37px;
    }

    .reviews_col {
        padding-right: 30px;
    }

    .user_pic {
        width: 70px;
        height: 70px;
        background: #ebebeb;
        border-radius: 100%;
        object-fit: cover;
    }

    .user_rating .star_rating {
        margin-left: 5px;
        margin-top: 13px;
    }

    .user_rating .star_rating li {
        margin-right: -3px;
    }

    .user_rating .star_rating li i {
        font-size: 12px;
    }

    .review {
        padding-left: 30px;
    }

    .review_date {
        color: #fe4c50;
        margin-top: -4px;
    }

    .user_name {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 18px;
    }

    .review p {
        font-weight: 400;
    }

    .add_review {
        margin-top: 94px;
    }

    #review_form>div {
        margin-bottom: 40px;
    }

    #review_form div:nth-child(2) h1 {
        display: inline-block;
    }

    #review_form div:nth-child(2) {
        margin-bottom: 20px;
    }

    #review_form>div:last-child {
        margin-bottom: 0px;
    }

    .add_review h1 {
        font-size: 18px;
        font-weight: 500;
    }

    .form_input {
        display: block;
        width: 100%;
        height: 50px;
        border: solid 1px #e5e5e5;
        padding-left: 20px;
    }

    .input_name {
        margin-bottom: 19px;
        margin-top: 31px;
    }

    .input_review {
        display: block;
        width: 100%;
        border: solid 1px #e5e5e5;
        margin-top: 23px;
        padding-left: 20px;
        padding-top: 13px;
    }

    .user_star_rating {
        display: inline-block;
        margin-left: 18px;
    }

    .user_star_rating li {
        display: inline-block;
        margin-right: -3px;
        cursor: pointer;
    }

    .user_star_rating li i {
        color: #f5c136;
        font-size: 18px;
    }

    .review_submit_btn {
        width: 170px;
        border: none;
        color: #FFFFFF;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
    }

    .user_star_rating {
        display: inline-block;
        margin-left: 18px;
    }

    .user_star_rating li {
        display: inline-block;
        margin-right: -3px;
        cursor: pointer;
    }

    .user_star_rating li i {
        color: #f5c136;
        font-size: 18px;
    }

    .review_submit_btn {
        width: 170px;
        border: none;
        color: black;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $(".tab").click(function() {
            var tabId = $(this).attr("data-active-tab");
            $(".tab_container").removeClass("active");
            $("#" + tabId).addClass("active");
        });
    });
</script>

<style>
    .tab-pane img {
        max-width: 100%;
        height: auto;
    }

    .reviews_title {
        margin-bottom: 58px;
    }

    .user_review_container {
        margin-bottom: 37px;
        border: 1px solid #e5e5e5;
        padding: 15px;
        background-color: #f9f9f9;
    }

    .user_review_container .user {
        width: 70px;
        height: 70px;
        background: #ebebeb;
        border-radius: 100%;
        object-fit: cover;
    }

    .user_review_container .user_pic img {
        width: 100%;
        height: 100%;
        border-radius: 100%;
    }

    .user_rating .star_rating {
        margin-top: 10px;
    }

    .user_rating .star_rating li {
        display: inline-block;
        margin-right: 5px;
    }

    .user_rating .star_rating li i {
        font-size: 20px;
        color: #fe4c50;
    }

    .review_date {
        font-weight: 500;
        margin-top: 5px;
        color: #666;
    }

    .user_name {
        font-weight: 500;
        font-size: 18px;
    }

    .user_name,
    .review p {
        margin-bottom: 10px;
    }

    .add_review {
        margin-top: 40px;
    }

    .add_review h1 {
        font-size: 24px;
        font-weight: 600;
    }

    .form_input {
        width: 100%;
        height: 50px;
        border: 1px solid #e5e5e5;
        padding: 0 20px;
        font-size: 16px;
    }

    .input_name {
        margin-top: 20px;
    }

    .input_review {
        height: 150px;
        resize: none;
    }
</style>

<style>
    .user_star_rating {
        margin-top: 20px;
    }

    .user_star_rating li {
        display: inline-block;
        margin-right: 10px;
        cursor: pointer;
    }

    .user_star_rating li i {
        font-size: 24px;
        color: #fe4c50;
    }

    .add_review {
        margin-top: 40px;
    }

    .add_review h1 {
        font-size: 24px;
        font-weight: 600;
    }

    .form_input {
        width: 100%;
        height: 50px;
        border: 1px solid #e5e5e5;
        padding: 0 20px;
        font-size: 16px;
    }

    .input_name {
        margin-top: 20px;
    }

    .input_review {
        width: 100%;
        height: 150px;
        border: 1px solid #e5e5e5;
        padding: 10px;
        font-size: 16px;
    }
</style>

<style>
    .review_submit_btn {
        width: 170px;
        height: 50px;
        background-color: #fe4c50;
        color: white;
        font-size: 16px;
        font-weight: 500;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        /* Add rounded corners */
        transition: background-color 0.3s ease;
        /* Add a smooth transition effect */

        /* Add a hover effect */
    }

    .review_submit_btn:hover {
        background-color: #ff5a5f;
    }

    .reviews_col {
        max-height: 450px;
        /* Đặt chiều cao tối đa bạn muốn, ví dụ 300px */
        overflow-y: auto;
        /* Tạo thanh cuộn dọc khi nội dung vượt quá chiều cao tối đa */
    }

    .user_name {
        font-weight: 500;
        font-size: 24px;
        /* Kích thước chữ lớn hơn ở đây */
        color: #ff0000;
        /* Đổi màu chữ thành màu bạn muốn */
    }

    .review p {
        font-size: 18px;
        /* Kích thước chữ lớn hơn ở đây */
    }
</style>