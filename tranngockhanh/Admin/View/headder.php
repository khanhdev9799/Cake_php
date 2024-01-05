<div class="container">
    <header class="row no-gutters">
        <!-- nav san pham -->
        <section class="col-12 header-section" style="height: 70px;">
            <div class="col-12">
                <div class="row">

                    <!-- test -->
                    <nav class="navbar navbar-expand-sm bg-light navbar-light">
                        <!-- Brand -->
                        <a class="navbar-brand" href="/tranngockhanh/index.php">
                            <img src="../Content/image/banner.jpg" alt="Logo" class="img-fluid header-logo">
                        </a>
                        <!-- Links -->
                        <ul class="navbar-nav">

                            <!-- Quản lí sản phẩm -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Quản Lí Sản Phẩm
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php?action=loaihang">Loại Sản Phẩm</a>
                                    <a class="dropdown-item" href="index.php?action=sanpham">Sản Phẩm</a>
                                </div>
                            </li>
                            <!-- Thống kê -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Thống Kê
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php?action=customer">Khách hàng </a>
                                    <a class="dropdown-item" href="index.php?action=hoadon">Hiển thị Hóa Đơn</a>
                                </div>
                            </li>
                            
                        </ul>
                    </nav>
                    <!-- end test -->
                </div>
            </div>

        </section>



    </header>
</div>
<!-- dang ky -->

<style>
    .navbar {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-nav .nav-item .nav-link {
        color: black;
        transition: padding 0.3s;
        padding: 0.5rem 1rem;
        font-weight: 500;
        font-size: 20px;
    }

    .navbar-nav .nav-item .nav-link {
        position: relative;
        overflow: hidden;
        transition: color 0.3s, font-size 0.3s;
    }

    .navbar-nav .nav-item .nav-link::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        z-index: -1;
        transform: scaleX(0);
        transform-origin: left;
    }

    .navbar-nav .nav-item .nav-link:hover::before {
        opacity: 0.3;
        transform: scaleX(1);
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: red;
        font-size: 22px;
        transform: scale(1.05);
    }

    .navbar-nav .nav-item:last-child .nav-link {
        margin-right: 0;
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .dropdown-menu a.dropdown-item {
        color: #333;
        transition: color 0.3s;
        font-size: 16px;
    }

    .dropdown-menu a.dropdown-item:hover {
        color: red;
    }

    .header-section {
        display: flex;
        align-items: center;
    }

    .header-logo {
        height: 30px;
        border-radius: 30px;
    }
</style>