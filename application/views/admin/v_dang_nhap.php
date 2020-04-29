<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Đăng nhập - United Pets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="./main.87c0748b313a1dda75f5.css" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/abouttab2.jpg');">
                                            
                                        </div>
                                        <div class="slider-content"><h3>United Pets</h3>
                                            <p>Nơi trao đi và nhận lại những tình yêu dành cho các bạn nhỏ...</p></div>
                                    </div>
                                </div>
                            
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/abouttab3.jpg');">
                                            
                                        </div>
                                        <div class="slider-content"><h3>Sứ mệnh của chúng tôi</h3>
                                            <p>Yêu thương, chăm sóc đem lại cho các bạn nhỏ một mái ấm tình thương</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <img src="./assets/images/logo-inverse.png" style="margin-bottom:50px" />
                            <h4 class="mb-0">
                                <span>Vui lòng đăng nhập...</span></h4>
                            <div class="divider row"></div>
                            <div>
                                <form method="POST" action="<?=base_url();?>admin/Dang_nhap/kiem_tra_dang_nhap">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input name="txtEmail" id="exampleEmail" placeholder="Nhập email..." type="email" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="examplePassword" class="">Mật khẩu</label><input name="txtPassword" id="examplePassword" placeholder="Nhập mật khẩu..." type="password"
                                                                                                                                                   class="form-control"></div>
                                        </div>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <a href="./quen_mat_khau.html" class="btn-lg btn btn-link">Quên mật khẩu</a>
                                            <input class="btn btn-primary btn-lg" type="submit" value="Đăng nhập">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="./assets/scripts/main.87c0748b313a1dda75f5.js"></script></body>
</html>
