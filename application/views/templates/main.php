<!DOCTYPE html>
<html lang="id-id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?> | <?= $app_name ?></title>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="Toko Bunga Papan Ucapan Bandung">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="icon" href="<?= base_url() ?>assets/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= base_url() ?>assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#fff">
  <meta name="theme-color" content="##E72463">
  <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/favicon/icon-144x144.png">
  <!-- CSS
	============================================ -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/front') ?>/css/vendor/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/front') ?>/css/vendor/font.awesome.min.css">
  <!-- Linear Icons CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/front') ?>/css/vendor/linearicons.min.css">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/front') ?>/css/plugins/swiper-bundle.min.css">
  <!-- Animation CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/front') ?>/css/plugins/animate.min.css">
  <!-- Jquery ui CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/front') ?>/css/plugins/jquery-ui.min.css">
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/front') ?>/css/plugins/nice-select.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?= base_url('assets/template/front') ?>/css/plugins/magnific-popup.css">

  <!-- Main Style CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/template/front') ?>/css/style.css">

  <style>
    .single-shipping {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-flex;
      display: -ms-flexbox;
      display: flex;
      margin-top: 30px;
    }

    .single-shipping .shipping-icon img {
      width: 70px;
    }

    .single-shipping .shipping-content {
      -webkit-box-flex: 1;
      -webkit-flex: 1;
      -moz-flex: 1;
      -ms-flex: 1;
      flex: 1;
      padding-left: 15px;
    }

    .single-shipping .shipping-content .title {
      font-size: 14px;
      line-height: 16px;
      text-transform: capitalize;
      font-weight: 700;
      margin-bottom: 7px;
      color: #222222;
    }

    .single-shipping .shipping-content p {
      font-size: 14px;
      line-height: 18px;
      font-weight: 300;
    }
  </style>

  <?php if (!empty($plugin_styles)) : ?>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <?php foreach ($plugin_styles as $style) : ?>
      <link href="<?= $style ?>" rel="stylesheet" type="text/css" />
    <?php endforeach; ?>
    <!-- END PAGE LEVEL PLUGINS -->
  <?php endif; ?>
</head>


<body>

  <!-- Header Area Start Here -->
  <header class="main-header-area">
    <!-- Main Header Area Start -->
    <div class="main-header header-transparent header-sticky">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
            <div class="header-logo d-flex align-items-center">
              <a href="index.html">
                <img class="img-full" src="<?= base_url('assets/template/front') ?>/images/logo/logo.svg" alt="Header Logo">
              </a>
            </div>
          </div>
          <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
            <nav class="main-nav d-none d-lg-flex">
              <ul class="nav">
                <li>
                  <a class="active" href="index.html">
                    <span class="menu-text"> Home</span>
                    <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-submenu dropdown-hover">
                    <li><a class="active" href="index.html">Home Page - 1</a></li>
                    <li><a href="index-2.html">Home Page - 2</a></li>
                    <li><a href="index-3.html">Home Page - 3</a></li>
                  </ul>
                </li>
                <li>
                  <a href="shop.html">
                    <span class="menu-text">Shop</span>
                    <i class="fa fa-angle-down"></i>
                  </a>
                  <div class="mega-menu dropdown-hover">
                    <div class="menu-colum">
                      <ul>
                        <li><span class="mega-menu-text">Shop</span></li>
                        <li><a href="shop.html">Shop Left Sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                        <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                        <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                        <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                      </ul>
                    </div>
                    <div class="menu-colum">
                      <ul>
                        <li><span class="mega-menu-text">Product</span></li>
                        <li><a href="product-details.html">Single Product</a></li>
                        <li><a href="variable-product-details.html">Variable Product</a></li>
                        <li><a href="external-product-details.html">External Product</a></li>
                        <li><a href="gallery-product-details.html">Gallery Product</a></li>
                        <li><a href="countdown-product-details.html">Countdown Product</a></li>
                      </ul>
                    </div>
                    <div class="menu-colum">
                      <ul>
                        <li><span class="mega-menu-text">Others</span></li>
                        <li><a href="error-404.html">Error 404</a></li>
                        <li><a href="compare.html">Compare Page</a></li>
                        <li><a href="cart.html">Cart Page</a></li>
                        <li><a href="checkout.html">Checkout Page</a></li>
                        <li><a href="wishlist.html">Wishlist Page</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li>
                  <a href="blog-details-fullwidth.html">
                    <span class="menu-text"> Blog</span>
                    <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-submenu dropdown-hover">
                    <li><a href="blog.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                    <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                    <li><a href="blog-grid.html">Blog Grid Page</a></li>
                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                    <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                    <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                    <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">
                    <span class="menu-text"> Pages</span>
                    <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-submenu dropdown-hover">
                    <li><a href="contact-us.html">Contact</a></li>
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="frequently-questions.html">FAQ</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                  </ul>
                </li>
                <li>
                  <a href="about-us.html">
                    <span class="menu-text"> About Us</span>
                  </a>
                </li>
                <li>
                  <a href="contact-us.html">
                    <span class="menu-text">Contact Us</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-2 col-md-6 col-6 col-custom">
            <div class="header-right-area main-nav">
              <ul class="nav">
                <li class="sidemenu-wrap">
                  <a href="#"><i class="fa fa-search"></i> </a>
                  <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-search">
                    <li>
                      <form action="#">
                        <input name="search" id="search" placeholder="Search" type="text">
                        <button type="submit"><i class="fa fa-search"></i></button>
                      </form>
                    </li>
                  </ul>
                </li>
                <li class="account-menu-wrap d-none d-lg-flex">
                  <a href="#" class="off-canvas-menu-btn">
                    <i class="fa fa-bars"></i>
                  </a>
                </li>
                <li class="mobile-menu-btn d-lg-none">
                  <a class="off-canvas-btn" href="#">
                    <i class="fa fa-bars"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Header Area End -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper" id="mobileMenu">
      <div class="off-canvas-overlay"></div>
      <div class="off-canvas-inner-content">
        <div class="btn-close-off-canvas">
          <i class="fa fa-times"></i>
        </div>
        <div class="off-canvas-inner">
          <div class="search-box-offcanvas">
            <form>
              <input type="text" placeholder="Search product...">
              <button class="search-btn"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <!-- mobile menu start -->
          <div class="mobile-navigation">
            <!-- mobile menu navigation start -->
            <nav>
              <ul class="mobile-menu">
                <li class="menu-item-has-children"><a href="#">Home</a>
                  <ul class="dropdown">
                    <li><a href="index.html">Home Page 1</a></li>
                    <li><a href="index-2.html">Home Page 2</a></li>
                    <li><a href="index-3.html">Home Page 3</a></li>
                    <li><a href="index-4.html">Home Page 4</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Shop</a>
                  <ul class="megamenu dropdown">
                    <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                      <ul class="dropdown">
                        <li><a href="shop.html">Shop Left Sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                        <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                        <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                        <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                      </ul>
                    </li>
                    <li class="mega-title has-children"><a href="#">Product Details</a>
                      <ul class="dropdown">
                        <li><a href="product-details.html">Single Product Details</a></li>
                        <li><a href="variable-product-details.html">Variable Product Details</a>
                        </li>
                        <li><a href="external-product-details.html">External Product Details</a>
                        </li>
                        <li><a href="gallery-product-details.html">Gallery Product Details</a>
                        </li>
                        <li><a href="countdown-product-details.html">Countdown Product
                            Details</a></li>
                      </ul>
                    </li>
                    <li class="mega-title has-children"><a href="#">Others</a>
                      <ul class="dropdown">
                        <li><a href="error404.html">Error 404</a></li>
                        <li><a href="compare.html">Compare Page</a></li>
                        <li><a href="cart.html">Cart Page</a></li>
                        <li><a href="checkout.html">Checkout Page</a></li>
                        <li><a href="wishlist.html">Wish List Page</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="menu-item-has-children "><a href="#">Blog</a>
                  <ul class="dropdown">
                    <li><a href="blog.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                    <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                    <li><a href="blog-grid.html">Blog Grid Page</a></li>
                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                    <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                    <li><a href="blog-details-sidebar.html">Blog Details Sidebar Page</a></li>
                    <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth Page</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children "><a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="frequently-questions.html">FAQ</a></li>
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="login-register.html">login &amp; register</a></li>
                  </ul>
                </li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="contact-us.html">Contact</a></li>
              </ul>
            </nav>
            <!-- mobile menu navigation end -->
          </div>
          <!-- mobile menu end -->
          <div class="offcanvas-widget-area">
            <div class="top-info-wrap text-left text-black">
              <div class="widget-social">
                <a class="facebook-color-bg" title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <!-- off-canvas menu end -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-menu-wrapper" id="sideMenu">
      <div class="off-canvas-overlay"></div>
      <div class="off-canvas-inner-content">
        <div class="off-canvas-inner">
          <div class="btn-close-off-canvas">
            <i class="fa fa-times"></i>
          </div>

          <!-- offcanvas widget area start -->
          <div class="offcanvas-widget-area">
            <ul class="menu-top-menu">
              <li><a href="about-us.html">Tentang Kami</a></li>
            </ul>
            <p class="desc-content">Toko Bunga Papan Ucapan menawarkan proses pemesanan yang sangat mudah,
              tinggal
              cari
              produk yang Anda inginkan, atau rekomendasi produk sesuai dengan moment yang Anda
              butuhkan
              melalui katalog produk di website ini, maupun langsung hubungi team CS kami yang siap
              membantu anda 24 jam untuk membantu pemesanan bunga secara online dan offline.</p>
            <div class="top-info-wrap text-left text-black">
              <div class="widget-social">
                <a class="facebook-color-bg" title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
              </div>
            </div>
          </div>
          <!-- offcanvas widget area end -->

        </div>
      </div>
    </aside>
    <!-- off-canvas menu end -->
  </header>
  <!-- Header Area End Here -->
  <!-- Slider/Intro Section Start -->
  <div class="intro11-slider-wrap section-2">
    <div class="intro11-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="intro11-section swiper-slide slide-bg-1 bg-position" style="background-image: url('<?= base_url('assets/template/front') ?>/images/slider/3-2.jpg');">
          <!-- Intro Content Start -->
          <div class="intro11-content-2 text-center">
            <h1 class="different-title">Welcome</h1>
            <h2 class="title text-white">Toko Bunga Ucapan Bandung</h2>
            <a href="product-details.html" class="btn flosun-button  secondary-btn theme-color rounded-0">Pesan Sekarang</a>
          </div>
          <!-- Intro Content End -->
        </div>
        <div class="intro11-section swiper-slide slide-5 slide-bg-1 bg-position">
          <!-- Intro Content Start -->
          <div class="intro11-content-2 text-center">
            <h1 class="different-title">Quality</h1>
            <h2 class="title text-white">Bunga dengan kualitas terbaik</h2>
            <a href="product-details.html" class="btn flosun-button  secondary-btn theme-color rounded-0">Pesan Sekarang</a>
          </div>
          <!-- Intro Content End -->
        </div>
      </div>
      <!-- Slider Navigation -->
      <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i></div>
      <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
      <!-- Slider pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- Slider/Intro Section End -->

  <!-- keunggulan -->
  <div class="categories-area pt-40 bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="single-shipping">
            <div class="shipping-icon">
              <img src="<?= base_url('assets/template/front') ?>/images/shipping-icon/Freshness.png" alt="">
            </div>
            <div class="shipping-content">
              <h5 class="title">Bunga Berkualitas</h5>
              <p>Kami selalu menghadirkan rangkaian bunga terbaik dengan bunga segar pilihan.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="single-shipping">
            <div class="shipping-icon">
              <img src="<?= base_url('assets/template/front') ?>/images/shipping-icon/Online-Order.png" alt="">
            </div>
            <div class="shipping-content">
              <h5 class="title">Pelayanan Ramah</h5>
              <p>Dilayani oleh CS yang sudah berpengalaman dalam berbagai macam rangkaian bunga.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="single-shipping">
            <div class="shipping-icon">
              <img src="<?= base_url('assets/template/front') ?>/images/shipping-icon/Free-Delivery.png" alt="">
            </div>
            <div class="shipping-content">
              <h5 class="title">Kiriman Tepat Waktu</h5>
              <p>Layanan terbaik anda dengan pengiriman selalu on time.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Product Area Start-->
  <div class="product-area mt-text-2 py-5">
    <div class="container custom-area-2 overflow-hidden">
      <div class="row">
        <!--Section Title Start-->
        <div class="col-12 col-custom">
          <div class="section-title text-center mb-30">
            <span class="section-title-1">Bunga Terbaik Dari Kami</span>
            <h3 class="section-title-3">Bunga Apa Yang Anda Cari Hari Ini ?</h3>
          </div>
        </div>
        <!--Section Title End-->
      </div>
      <div class="row product-row">
        <div class="col-12 col-custom">
          <div class="product-slider swiper-container anime-element-multi">
            <div class="swiper-wrapper">
              <div class="single-item swiper-slide">
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/1.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/2.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Flowers daisy pink
                          stick</a></h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/3.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/4.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Jasmine flowers
                          white</a></h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
              </div>
              <div class="single-item swiper-slide">
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/5.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/6.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Blossom bouquet
                          flower</a></h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/2.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/1.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Orchid flower red
                          stick</a></h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
              </div>
              <div class="single-item swiper-slide">
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/7.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/8.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Rose bouquet white</a>
                      </h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/9.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/2.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Hyacinth white stick</a>
                      </h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
              </div>
              <div class="single-item swiper-slide">
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/3.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/4.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Glory of the Snow</a>
                      </h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/6.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/5.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Jack in the Pulpit</a>
                      </h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
              </div>
              <div class="single-item swiper-slide">
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/8.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/7.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Pearly Everlasting</a>
                      </h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/9.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/8.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Flowers daisy pink
                          stick</a></h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
              </div>
              <div class="single-item swiper-slide">
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/2.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/1.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Flowers white</a></h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
                <!--Single Product Start-->
                <div class="single-product position-relative mb-30">
                  <div class="product-image">
                    <a class="d-block" href="product-details.html">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/9.jpg" alt="" class="product-image-1 w-100">
                      <img src="<?= base_url('assets/template/front') ?>/images/product/3.jpg" alt="" class="product-image-2 position-absolute w-100">
                    </a>
                    <div class="add-action d-flex flex-column position-absolute">
                      <a href="compare.html" title="Compare">
                        <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" title="Compare"></i>
                      </a>
                      <a href="wishlist.html" title="Add To Wishlist">
                        <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" title="Wishlist"></i>
                      </a>
                      <a href="#exampleModalCenter" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" title="Quick View"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-content">
                    <div class="product-title">
                      <h4 class="title-2"> <a href="product-details.html">Flower red stick</a>
                      </h4>
                    </div>
                    <div class="price-box">
                      <span class="regular-price ">Rp 800.000.00</span>
                      <span class="old-price"><del>Rp 900.000.00</del></span>
                    </div>
                    <a href="cart.html" class="btn product-cart">Pesan Sekarang</a>
                  </div>
                </div>
                <!--Single Product End-->
              </div>
            </div>
            <!-- Slider pagination -->
            <div class="swiper-pagination default-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="product-countdown-area product-countdown-style pb-text-4">
    <div class="container">
      <div class="row">
        <!--Section Title Start-->
        <div class="col-12 mb-1">
          <div class="section-title text-center mb-30 mb-1">
            <span class="section-title-1">Terlengkap Dan Terjangkau</span>
            <h3 class="section-title-3" style="padding-bottom: 0;">Toko Bunga Ucapan Bandung</h3>
          </div>
        </div>
        <!--Section Title End-->
      </div>
      <div class="row">
        <div class="col-lg-8 ms-auto me-auto">
          <div class="history-area-content pb-0 mb-0 border-0">
            <p><span class="fw-bold">Toko Bunga Ucapan Bandung</span> merupakan salah satu toko bunga
              terbaik di <span class="fw-bold">Kota Bandung</span> dengan produk kami berbagai macam
              karangan bunga dan rangkaian bunga seperti :
            </p>
            <br>
            <div class="container">
              <ul style="list-style-type: disc;">
                <li>PAPAN BUNGA Single 2in1 Steroform</li>
                <li>HANDBUQUET</li>
                <li>BUQUET ( Meja, Standing, box )</li>
                <li>SALIB, KRANS DUKA</li>
                <li>Bunga Semat / kantong</li>
                <li>Dekorasi Bahagia, Duka</li>
                <li>Parcel Buah, Cookies</li>
                <li>dll.</li>
              </ul>
            </div>

            <br>
            <p>Produk yang kami sediakan menggunakan bunga yang fresh dan bermacam warna yang bisa
              disesuaikan untuk moment Anda. Selain itu kami juga menggunakan bunga buatan untuk pengganti
              bunga asli agar karangan bunga Anda tidak cepat layu.</p>

            <a href="product-details.html" class="btn flosun-button  secondary-btn theme-color rounded-0 mt-3">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="testimonial-area mt-text-2 py-5">
    <div class="container custom-area">
      <div class="row">
        <!--Section Title Start-->
        <div class="col-12 col-custom">
          <div class="section-title text-center">
            <span class="section-title-1">Kepuasan Pelanggan adalah yang utama</span>
            <h3 class="section-title-3">Testimoni</h3>
          </div>
        </div>
        <!--Section Title End-->
      </div>
      <div class="row">
        <div class="testimonial-carousel swiper-container intro11-carousel-wrap col-12 col-custom">
          <div class="swiper-wrapper">
            <div class="single-item swiper-slide">
              <!--Single Testimonial Start-->
              <div class="single-testimonial text-center">
                <div class="testimonial-img">
                  <img src="<?= base_url('assets/template/front') ?>/images/testimonial/testimonial1.jpg" alt="">
                </div>
                <div class="testimonial-content">
                  <p>These guys have been absolutely outstanding. Perfect Themes and the best of all
                    that you have many options to choose! Best Support team ever! Very fast
                    responding! Thank you very much! I highly recommend this theme and these people!
                  </p>
                  <div class="testimonial-author">
                    <h6>Katherine Sullivan <span>Customer</span></h6>
                  </div>
                </div>
              </div>
              <!--Single Testimonial End-->
            </div>
            <div class="single-item swiper-slide">
              <!--Single Testimonial Start-->
              <div class="single-testimonial text-center">
                <div class="testimonial-img">
                  <img src="<?= base_url('assets/template/front') ?>/images/testimonial/testimonial2.jpg" alt="">
                </div>
                <div class="testimonial-content">
                  <p>These guys have been absolutely outstanding. Perfect Themes and the best of all
                    that you have many options to choose! Best Support team ever! Very fast
                    responding! Thank you very much! I highly recommend this theme and these people!
                  </p>
                  <div class="testimonial-author">
                    <h6>Alex Jhon <span>Customer</span></h6>
                  </div>
                </div>
              </div>
              <!--Single Testimonial End-->
            </div>
          </div>
          <!-- Slider Navigation -->
          <div class="home1-slider-prev swiper-button-prev main-slider-nav"><i class="lnr lnr-arrow-left"></i>
          </div>
          <div class="home1-slider-next swiper-button-next main-slider-nav"><i class="lnr lnr-arrow-right"></i></div>
          <!-- Slider pagination -->
          <div class="swiper-pagination default-pagination"></div>
        </div>
      </div>
    </div>
  </div>


  <div class="our-history-area pt-text-3 bg-light py-5">
    <div class="container">
      <div class="row">
        <!--Section Title Start-->
        <div class="col-12 mb-0">
          <div class="section-title text-center mb-30 mb-0">
            <span class="section-title-1">Terbaik Dan Terpercaya</span>
            <h3 class="section-title-3 mb-0">Tunggu Apa Lagi</h3>
          </div>
        </div>
        <!--Section Title End-->
      </div>
      <div class="row">
        <div class="col-lg-8 ms-auto me-auto">
          <div class="history-area-content pb-0 mb-0 border-0 text-center">
            <p>Toko Bunga Papan Ucapan menawarkan proses pemesanan yang sangat mudah, tinggal
              cari
              produk yang Anda inginkan, atau rekomendasi produk sesuai dengan moment yang Anda
              butuhkan
              melalui katalog produk di website ini, maupun langsung hubungi team CS kami yang siap
              membantu anda 24 jam untuk membantu pemesanan bunga secara online dan offline.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Footer Area Start-->
  <footer class="footer-area">
    <div class="footer-widget-area">
      <div class="container container-default custom-area">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-custom">
            <div class="single-footer-widget m-0">
              <div class="footer-logo">
                <a href="index.html">
                  <img src="<?= base_url('assets/template/front') ?>/images/logo/logo-footer.svg" alt="Logo Image">
                </a>
              </div>
              <p class="desc-content">Kami menyediakan berbagai macam rangkaian bunga dengan design yang
                modern yang tentunya bisa anda lakukan costum baik ukuran atau jenis bunga</p>
              <div class="social-links">
                <ul class="d-flex">
                  <li>
                    <a class="rounded-circle" href="#" title="Facebook">
                      <i class="fa fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a class="rounded-circle" href="#" title="Twitter">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a class="rounded-circle" href="#" title="Linkedin">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a class="rounded-circle" href="#" title="Youtube">
                      <i class="fa fa-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a class="rounded-circle" href="#" title="Vimeo">
                      <i class="fa fa-vimeo"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-custom">
            <div class="single-footer-widget">
              <h2 class="widget-title">Menyediakan</h2>
              <ul class="widget-list">
                <li><a href="about-us.html">Box</a></li>
                <li><a href="contact-us.html">Bunga Duka</a></li>
                <li><a href="about-us.html">Bunga Selamat</a></li>
                <li><a href="about-us.html">Bunga Weding</a></li>
                <li><a href="about-us.html">Bunga bouquet</a></li>
                <li><a href="about-us.html">Standing Flower</a></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-custom">
            <div class="single-footer-widget">
              <h2 class="widget-title">Info Kontak</h2>
              <div class="widget-body">
                <address>123, ABC, Road ##, Main City, Your address goes here.<br>Phone: 01234 567
                  890<br>Email: https://example.com</address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright-area">
      <div class="container custom-area">
        <div class="row">
          <div class="col-12 text-center col-custom">
            <div class="copyright-content" id="copyright">

            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Footer Area End-->

  <!-- Scroll to Top Start -->
  <a class="scroll-to-top" href="#">
    <i class="lnr lnr-arrow-up"></i>
  </a>
  <!-- Scroll to Top End -->

  <!-- JS
    ============================================ -->

  <!-- jQuery JS -->
  <script src="<?= base_url('assets/template/front') ?>/js/vendor/jquery-3.6.0.min.js"></script>
  <!-- jQuery Migrate JS -->
  <script src="<?= base_url('assets/template/front') ?>/js/vendor/jquery-migrate-3.3.2.min.js"></script>
  <!-- Modernizer JS -->
  <script src="<?= base_url('assets/template/front') ?>/js/vendor/modernizr-3.7.1.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="<?= base_url('assets/template/front') ?>/js/vendor/bootstrap.bundle.min.js"></script>

  <!-- Swiper Slider JS -->
  <script src="<?= base_url('assets/template/front') ?>/js/plugins/swiper-bundle.min.js"></script>
  <!-- nice select JS -->
  <script src="<?= base_url('assets/template/front') ?>/js/plugins/nice-select.min.js"></script>
  <!-- Ajaxchimpt js -->
  <script src="<?= base_url('assets/template/front') ?>/js/plugins/jquery.ajaxchimp.min.js"></script>
  <!-- Jquery Ui js -->
  <script src="<?= base_url('assets/template/front') ?>/js/plugins/jquery-ui.min.js"></script>
  <!-- Jquery Countdown js -->
  <script src="<?= base_url('assets/template/front') ?>/js/plugins/jquery.countdown.min.js"></script>
  <!-- jquery magnific popup js -->
  <script src="<?= base_url('assets/template/front') ?>/js/plugins/jquery.magnific-popup.min.js"></script>

  <!-- Main JS -->
  <script src="<?= base_url('assets/template/front') ?>/js/main.js"></script>
  <script>
    document.getElementById('copyright').innerHTML = `<p>Copyright © ${(new Date().getFullYear())} Toko Bunga Ucapan Bandung</p>`;
  </script>
  <!-- PAGE RELATED PLUGIN(S) -->
  <?php if (!empty($plugin_scripts)) : ?>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <?php foreach ($plugin_scripts as $script) : ?>
      <script src="<?= $script ?>" type="text/javascript"></script>
    <?php endforeach; ?>
    <!-- END PAGE LEVEL PLUGINS -->
  <?php endif; ?>
  <script src="<?= $this->plugin->build_url('javascripts/api-client.js', FALSE, 'site') ?>" type="text/javascript"></script>
  <script src="<?= $this->plugin->build_url('javascripts/application.js', FALSE, 'site') ?>" type="text/javascript"></script>
  <script src="<?= $this->plugin->build_url('javascripts/dt.helper.js', FALSE, 'site') ?>" type="text/javascript"></script>
  <?php if (file_exists(VIEWPATH . "javascripts/contents/{$content}.js")) : ?>
    <script src="<?= $this->plugin->build_url("javascripts/contents/{$content}.js") ?>" type="text/javascript"></script>
  <?php endif; ?>

</body>

</html>