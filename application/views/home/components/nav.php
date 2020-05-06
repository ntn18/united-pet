<nav id="main-nav" class="navbar-expand-xl fixed-top">
        <div class="row">
            <!-- Start Top Bar -->
            <div class="container-fluid top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Start Contact Info -->
                            <ul class="contact-details float-left">
                                <li><i class="fa fa-envelope"></i><a href="mailto:email@hotro.com">email@hotro.com</a></li>
                                <li><i class="fa fa-phone"></i>(+84) 456-7889</li>
                            </ul>
                            <!-- End Contact Info -->
                            <!-- Start Social Links -->
                            <ul class="social-list float-right list-inline">
                                <li class="list-inline-item"><a title="Facebook" href="#"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a title="Twitter" href="#"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="Instagram" href="#"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                            <!-- /End Social Links -->
                        </div>
                        <!-- col-md-12 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- End Top bar -->
            <!-- Navbar Starts -->
            <div class="navbar container-fluid">
                <div class="container ">
                    <!-- logo -->
                    <a class="nav-brand" href="index.html">
                        <img src="img/logo.png" alt="" class="img-fluid">
                    </a>
                    <!-- Navbartoggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggle-icon">
                            <i class="fas fa-bars"></i>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <!-- menu item -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url();?>trang_chu">Trang chủ</a>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?=base_url();?>gioi_thieu" id="about-dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Giới thiệu</a>
                                <div class="dropdown-menu pattern2" aria-labelledby="about-dropdown">
                                    <a class="dropdown-item" href="<?=base_url();?>gioi_thieu">Giới thiệu</a>
                                    <a class="dropdown-item" href="<?=base_url();?>doi_ngu">Đội ngũ tình nguyện</a>
                                </div>
                            </li>

                            <!-- menu item -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?=base_url();?>nhan_nuoi" id="adopt-dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nhận nuôi</a>
                                <div class="dropdown-menu pattern2" aria-labelledby="adopt-dropdown">
                                    <a class="dropdown-item" href="<?=base_url();?>nhan_nuoi">Danh sách</a>
                                    <a class="dropdown-item" href="<?=base_url();?>cau_chuyen">Câu chuyện nhỏ</a>
                                </div>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url();?>tinh_nguyen">Tình nguyện</a>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url();?>quyen_gop">Quyên góp</a>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url();?>lien_he">Liên hệ</a>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url();?>tin_tuc">Bài viết</a>
                            </li>
                        </ul>
                        <!--/ul -->
                    </div>
                    <!--collapse -->
                </div>
                <!-- /container -->
            </div>
            <!-- /navbar -->
        </div>
        <!--/row -->
    </nav>