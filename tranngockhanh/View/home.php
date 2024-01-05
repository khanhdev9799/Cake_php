<style>
    .product-section {
        margin: 20px 0;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .product-section img {
        max-width: 100%;
        height: auto;
        border: none !important;
    }

    .carousel-item img {
        width: 100%;
        height: 600px;
        object-fit: cover;
    }

    .section-title {
        font-weight: bold;
        color: red;
    }

    .btn-xem-tat-ca {
        color: #fff;
        background-color: red;
    }

    .carousel-indicators {
        display: none;
    }
</style>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Content/image/hero.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
      <h1 class="font-secondary text-primary mb-4">Super Crispy</h1>
      <h1 class="display-1 text-uppercase text-white mb-4">CakeZone</h1>
      <h1 class="text-uppercase text-white">The Best Cake In London</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Content/image/hero.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
      <h1 class="font-secondary text-primary mb-4">Super Crispy</h1>
      <h1 class="display-1 text-uppercase text-white mb-4">CakeZone</h1>
      <h1 class="text-uppercase text-white">The Best Cake In London</h1>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="Content/image/hero.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
      <h1 class="font-secondary text-primary mb-4">Super Crispy</h1>
      <h1 class="display-1 text-uppercase text-white mb-4">CakeZone</h1>
      <h1 class="text-uppercase text-white">The Best Cake In London</h1>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Sản phẩm mới nhất -->
<section class="text-center product-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-title mb-4">SẢN PHẨM</h1>
            </div>
        </div>
        <div class="row" >
            <?php
            $sp = new sanpham();
            $result = $sp->setSPNew();
            while ($set = $result->fetch()) :
            ?>
                <div class="col-lg-3 col-md-4 mb-3">
                    <div class="card" >
                        <img style="max-height: 200px;" src="Content\image\<?php echo $set["hinh"] ; ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title" style="color: red;">
                                <?php echo number_format($set['gia']) . 'đ'; ?>
                            </h5>
                            <p class="card-text">
                                <a href="index.php?action=ct_sanpham&idSP=<?= $set['idSP'] ?>">
                                    <span style="font-size: 20px;">
                                        <?php echo $set["tenSP"] ?>
                                    </span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <a href="index.php?action=sanpham">
                    <button class="btn btn-xem-tat-ca">Xem tất cả</button>
                </a>
            </div>
        </div>
    </div>
</section>