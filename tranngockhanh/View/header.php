<style>
    .nar-menu .nav-links li a {
        font-size: 20px;
        transition: font-size 0.3s;
    }

    .nar-menu .nav-links li a:hover {
        color: red;
        font-size: 24px;
    }

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
        /* font-size: 18px; */
    }

    .user-login {
        width: 60%;
        margin-left: 10px;
    }

    .user-avt {
        border-radius: 50%;
        cursor: pointer;
        width: 33px;
    }
    .bg-orange {
        background-color: orange;

        width: 1650px;
    }
</style>
</head>

<body>
    <header>
    <div class="text-center bg-orange border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white" style="font-size: 5em;"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>MeiCake</h1>
                    </a>
                </div>
            </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container justify-content-center">
            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nar-menu">
                        <li class="nav-item"><a class="nav-link" href="index.php">MeiCake</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?action=sanpham">CakeZone</a></li>
                    </ul>
                    <ul class="navbar-nav" style="margin-left: 900px;">
                        <li class="nav-item"><a href="index.php?action=giohang" class="nav-link">
                                <ion-icon name="cart-outline" class="ion-icon-cart" style="width: 50px; height: 50px;"></ion-icon>
                            </a>
                        </li>
                        <?php
                        if (isset($_SESSION['idKH']) && isset($_SESSION['tenKH'])) {
                            $idKH = $_SESSION['idKH'];
                            $dt = new user();
                            $result = $dt->getUserID($idKH);
                            $idKH = $result['idKH'];
                            $tenKH = $result['tenKH'];
                            // $hinh = $result['hinh'];
                        }
                        ?>

                        <?php
                        $isLoggedIn = false; // Mặc định là chưa đăng nhập

                        if (isset($_SESSION['idKH']) && isset($_SESSION['tenKH'])) {
                            $isLoggedIn = true; // Đã đăng nhập
                        }
                        ?>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <ion-icon name="person-outline" style="width: 50px; height: 50px;"></ion-icon>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <?php if ($isLoggedIn) : ?>
                                        <p style="color: red; margin-top: 5px; margin-left: 0px; font-size: 16px;">
                                            <?php echo $tenKH; ?></p>
                                        <hr>
                                        <li><a class="dropdown-item" href="index.php?action=dangky"><ion-icon name="person-add-outline"></ion-icon> Đăng ký</a></li>
                                        <li><a class="dropdown-item" href="index.php?action=dangxuat"><ion-icon name="log-out-outline"></ion-icon> Đăng xuất</a></li>
                                    <?php else : ?>
                                        <!-- Nút Đăng nhập và Đăng ký sẽ hiển thị khi chưa đăng nhập -->
                                        <li><a class="dropdown-item" href="index.php?action=dangnhap"><ion-icon name="log-in-outline"></ion-icon> Đăng nhập</a></li>
                                        <li><a class="dropdown-item" href="index.php?action=dangky"><ion-icon name="person-add-outline"></ion-icon> Đăng ký</a></li>
                                        <li><a class="dropdown-item" href="Admin/index.php"><ion-icon name="glasses-outline"></ion-icon> Admin</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>