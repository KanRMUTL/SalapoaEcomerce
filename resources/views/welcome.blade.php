<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ร้านซาลาเปา</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="store/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="store/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="store/css/themify-icons.css" type="text/css">
        <link rel="stylesheet" href="store/css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="store/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="store/css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="store/css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="store/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="store/css/style.css" type="text/css">

    </head>
    <body style="font-family: 'Kanit', sans-serif;">
        <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="container">
        <div class="inner-header p-0">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="store/img/logo.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-7 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="si-pic" style="width:25%">
                                                    <img src="store/img/food/06.jpg" alt="">
                                                </td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>฿13.00 x 1</p>
                                                        <h6>ซาลาเปา ไส้ที่ 2</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="si-pic" style="width:25%">
                                                    <img src="store/img/food/07.jpg" alt="">
                                                </td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>฿14.00 x 2</p>
                                                        <h6>ซาลาเปา ไส้ที่ 1</h6>
                                                    </div>
                                                </td>
                                                <td class="si-close">
                                                    <i class="ti-close"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>รวม:</span>
                                    <h5>฿41.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="#" class="primary-btn view-card">ไปที่ตะกร้า</a>
                                    <a href="#" class="primary-btn checkout-btn">ชำระเงิน</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">฿41.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        store_xx@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        084 - xxx xxxx
                    </div>
                </div>
                <div class="ht-right">
                    <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container text-center">

                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="/">หน้าแรก</a></li>
                        <li><a href="#">เลือกซื้อซาลาเปา</a></li>
                        <li><a href="#">ตะกร้าสินค้า</a></li>
                        <li><a href="#">ติดต่อเรา</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="store/img/food/04.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1>ชื่อร้าน XXXXX</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    {{-- <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div> --}}
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="store/img/food/01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1>ชื่อร้าน XXXXX</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    {{-- <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad pb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="store/img/food/05.jpg">
                        <h2>ซาลาเปา</h2>
                        <a href="#">หลากหลายไส้ให้คุณเลือก</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 pt-5">
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="store/img/food/07.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_plus_alt"></i>
                                </div>
                                <ul>
                                    <li class="quick-view"><a href="#">+ เพิ่มในตะกร้า</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">ซาลาเปา</div>
                                <a href="#">
                                    <h5>ไส้ที่ 1</h5>
                                </a>
                                <div class="product-price">
                                    ฿14.00
                                    <span>฿35.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="store/img/food/06.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_plus_alt"></i>
                                </div>
                                <ul>
                                    <li class="quick-view"><a href="#">+ เพิ่มในตะกร้า</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">ซาลาเปา</div>
                                <a href="#">
                                    <h5>ไส้ที่ 2</h5>
                                </a>
                                <div class="product-price">
                                    ฿13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="store/img/food/08.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_plus_alt"></i>
                                </div>
                                <ul>
                                    <li class="quick-view"><a href="#">+ เพิ่มในตะกร้า</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">ซาลาเปา</div>
                                <a href="#">
                                    <h5>ไส้ที่ 3</h5>
                                </a>
                                <div class="product-price">
                                    ฿34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->


    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="store/img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-widget">
                        <h5>เมนู</h5>
                        <ul>
                            <li class="active"><a href="/">หน้าแรก</a></li>
                                <li><a href="#">เลือกซื้อซาลาเปา</a></li>
                                <li><a href="#">ตะกร้าสินค้า</a></li>
                                <li><a href="#">ติดต่อเรา</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

        <script src="js/app.js"></script>

        <!-- Js Plugins -->
    <script src="store/js/jquery-3.3.1.min.js"></script>
    <script src="store/js/bootstrap.min.js"></script>
    <script src="store/js/jquery-ui.min.js"></script>
    <script src="store/js/jquery.countdown.min.js"></script>
    <script src="store/js/jquery.nice-select.min.js"></script>
    <script src="store/js/jquery.zoom.min.js"></script>
    <script src="store/js/jquery.dd.min.js"></script>
    <script src="store/js/jquery.slicknav.js"></script>
    <script src="store/js/owl.carousel.min.js"></script>
    <script src="store/js/main.js"></script>
    </body>
</html>
