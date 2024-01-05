<?php


$sp = new sanpham();
$result = $sp->getAllSP();
$count = $result->rowCount();
$limit = 8;
$p = new page();
$page = $p->findPage($count, $limit);
$start = $p->findStart($limit);
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

$ac = 1;
?>

<div id="products" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mb-4">TẤT CẢ SẢN PHẨM</h1>
            </div>
        </div>
        <!-- Grid row for displaying products -->
        <div class="row">
            <?php
            $sp = new sanpham();
            $result = $sp->getAllSPPage($start, $limit);

            while ($set = $result->fetch()) :
            ?>
                <!-- Grid column for a product -->
                <div class="col-lg-3 col-md-4 mb-3">
                    <div class="card">
                        <!-- Product image -->
                        <img style="max-height: 200px;" src="Content/image/<?php echo $set["hinh"] ; ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <!-- Product title and price -->
                            <h5 class="card-title">
                                <font color="red"><?php echo $set["gia"] . '<sup><u>đ</u></sup>'; ?></font>
                            </h5>
                            <!-- Product name and details -->
                            <p class="card-text">
                                <a href="index.php?action=ct_sanpham&idSP=<?= $set['idSP'] ?>">
                                    <span style="font-size: 20px;">
                                        <?php echo $set["tenSP"] . " - " . $set["tenTT"]; ?>
                                    </span>
                                </a>
                            </p>
                            
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <!-- End Grid row -->
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <ul class="pagination justify-content-center">
                <?php
                if ($current_page > 1 && $page > 1) {
                    echo '<li class="page-item"><a class="page-link" href="index.php?action=sanpham&page=' . ($current_page - 1) . '">Prev</a></li>';
                }
                for ($i = 1; $i <= $page; $i++) {
                    echo '<li class="page-item"><a class="page-link" href="index.php?action=sanpham&page=' . $i . '">' . $i . '</a></li>';
                }
                if ($current_page < $page && $page > 1) {
                    echo '<li class="page-item"><a class="page-link" href="index.php?action=sanpham&page=' . ($current_page + 1) . '">Next</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>
