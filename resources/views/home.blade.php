<!doctype html>
<html class="no-js" lang="en">

@include('partials.head')

<body>

    <div class="main-wrapper">
        @include('partials.header')
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Keranjang Belanja</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Sepatu Kulit Pantofel Pria FY21</a></h4>
                                <span> 1 × Rp200.000	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Sepatu Kulit Asli Pria CJ C16</a></h4>
                                <span> 1 × Rp190.000	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>Rp.390.000</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.html">Lihat Keranjang</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">Ke Pembayaran</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile menu start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="header-offer-wrap mobile-header-padding-border-4">
                        <p><i class="icon-paper-plane"></i> GRATIS PENGIRIMAN hingga <span>Rp25.000</span></p>
                    </div>
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.html">Beranda</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="index.html">Home version 1 </a></li>
                                        <li><a href="index-2.html">Home version 2</a></li>
                                        <li><a href="index-3.html">Home version 3</a></li>
                                        <li><a href="index-4.html">Home version 4</a></li>
                                        <li><a href="index-5.html">Home version 5</a></li>
                                        <li><a href="index-6.html">Home version 6</a></li>
                                        <li><a href="index-7.html">Home version 7</a></li>
                                        <li><a href="index-8.html">Home version 8</a></li>
                                        <li><a href="index-9.html">Home version 9</a></li>
                                        <li><a href="index-10.html">Home version 10</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item-has-children "><a href="#">Belanja</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="#">shop layout</a>
                                            <!-- <ul class="dropdown">
                                                <li><a href="shop.html">standard style</a></li>
                                                <li><a href="shop-list.html">shop list style</a></li>
                                                <li><a href="shop-fullwide.html">shop fullwide</a></li>
                                                <li><a href="shop-no-sidebar.html">grid no sidebar</a></li>
                                                <li><a href="shop-list-no-sidebar.html">list no sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                <li><a href="store-location.html">store location</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Products Layout</a>
                                            <!-- <ul class="dropdown">
                                                <li><a href="product-details.html">tab style 1</a></li>
                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                <li><a href="product-details-sticky.html">sticky style</a></li>
                                                <li><a href="product-details-gallery.html">gallery style </a></li>
                                                <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                                <li><a href="product-details-group.html">group style</a></li>
                                                <li><a href="product-details-fixed-img.html">fixed image style </a></li>
                                            </ul> -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="about-us.html">about us </a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout </a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="Bandingkan.html">Bandingkan </a></li>
                                        <li><a href="contact.html">contact us </a></li>
                                        <li><a href="order-tracking.html">order tracking</a></li>
                                        <li><a href="login-register.html">login / register </a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="blog.html">blog standard </a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar </a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="contact.html">Kontak</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                        <div class="single-mobile-header-info">
                            <a href="order-tracking.html"><i class="lastudioicon-pin-3-2"></i> Lacak Pesanan </a>
                        </div>
                        <!-- <div class="single-mobile-header-info">
                            <a class="mobile-language-active" href="#">Language <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown lang-dropdown-active">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-mobile-header-info">
                            <a class="mobile-currency-active" href="#">Currency <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown curr-dropdown-active">
                                <ul>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">Real</a></li>
                                    <li><a href="#">BDT</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                    <div class="mobile-contact-info mobile-header-padding-border-4">
                        <ul>
                            <li><i class="icon-phone "></i> (+62) 838 5051 1110</li>
                            <li><i class="icon-envelope-open "></i> sepatukulit@gmail.com</li>
                            <li><i class="icon-home"></i> Jalan Sawo Magetan</li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area bg-gray">
            <div class="hero-slider-active-1 hero-slider-pt-1 nav-style-1 dot-style-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="hero-slider-content-1 hero-slider-content-1-pt-1 slider-animated-1">
                                    <h4 class="animated">Produk Baru</h4>
                                    <h1 class="animated">Kaos <br>Pria Terbaru</h1>
                                    <p class="animated">Kaos pria dengan desain model terbaru dengan bahan berkualitas.</p>
                                    <div class="btn-style-1">
                                        <a class="animated btn-1-padding-1" href="product-details.html">Lihat Produk</a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="hero-slider-img-1 slider-animated-1">
                                    <img class="animated" src="assets/images/clothes/l.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="hero-slider-content-1 hero-slider-content-1-pt-1 slider-animated-1">
                                    <h4 class="animated">Produk Baru</h4>
                                    <h1 class="animated">Walter  <br>Bag</h1>
                                    <p class="animated">Tas Simple multifungsi Bisa dijadikan Totebag, Backpack, Sling bag.</p>
                                    <div class="btn-style-1">
                                        <a class="animated btn-1-padding-1" href="product-details.html">Lihat Produk</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="hero-slider-img-1 slider-animated-1">
                                    <img class="animated" src="assets/images/product/bag.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area">
            <div class="container">
                <div class="service-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon">
                                    <i class="icon-cursor"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Gratis Ongkir</h3>
                                    <span>Hingga Rp25.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon">
                                    <i class="icon-reload"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Bergaransi</h3>
                                    <span>Hingga 30 hari</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon">
                                    <i class="icon-lock"></i>
                                </div>
                                <div class="service-content">
                                    <h3>100% Aman</h3>
                                    <span>Keamanan Terjamin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon">
                                    <i class="icon-tag"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Harga Termurah</h3>
                                    <span>Dijamin Termurah</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-area pt-85">
            <div class="container">
                <div class="border-bottom-1 about-content-pb">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 d-flex align-items-center">
                            <div class="about-us-logo">
                                <img src="assets/images/logo.png" alt="logo">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="about-us-content">
                                <h3>Tentang Kami</h3>
                                <p>Kami adalah supplier grosir dan eceran sepatu kulit asli handmade Magetan.<br>
                                    Online shop Sepatu Kulit Asli Magetan ini dimulai pada bulan September 2021 dan tergolong masih baru. Namun kami akan selalu berusaha untuk memberikan yang terbaik untuk customer kami. Sebagai putra putri daerah Magetan, kami admin online shop Sepatu Kulit Magetan sangat bangga bisa mengenalkan produk terbaik dari kota kecil kami. Kabupaten Magetan memang sudah sangat terkenal dengan kerajinan kulitnya yang berkualitas tinggi. Magetan juga merupakan produsen dan pemasok bahan kulit untuk pabrik-pabrik sepatu di daerah lain.</p>
                                <div class="signature">
                                    <h2>apr nine</h2>
                                </div>
                                <div class="mt-4">
                                    <div class="btn-style-1">
                                        <a class="animated btn-1-padding-1" href="product-details.html">Toko Shopee</a>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area section-padding-1 pt-115 pb-75">
            <div class="container">
                <div class="section-title-tab-wrap mb-45">
                    <div class="section-title">
                        <h2>Produk Unggulan</h2>
                    </div>
                    <div class="tab-style-1 nav">
                        <a class="active" href="#product-1" data-bs-toggle="tab">Best Seller</a>
                        <a href="#product-2" data-bs-toggle="tab"> Trending</a>
                        <!-- <a href="#product-3" data-bs-toggle="tab">Produk Baru </a>
                        <a href="#product-4" data-bs-toggle="tab">Semua Produk</a> -->
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="tab-content jump">
                    <div id="product-1" class="tab-pane active">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/clothes/a.png" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Fashion Set 1</a></h4>
                                            <div class="product-price">
                                                <span>Rp260.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/clothes/i.png" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Fashion Set 2</a></h4>
                                            <div class="product-price">
                                                <span>Rp270.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/clothes/c.png" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-10%</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Fashion Set 3</a></h4>
                                            <div class="product-price">
                                                <span class="new-price">Rp260.000</span>
                                                <span class="old-price">Rp280.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/clothes/j.png" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Fashion Set 4</a></h4>
                                            <div class="product-price">
                                                <span>Rp280.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/clothes/e.png" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-15%</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Fashion Set 5</a></h4>
                                            <div class="product-price">
                                                <span class="new-price">Rp330.000</span>
                                                <span class="old-price">Rp360.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/clothes/f.png" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Fashion Set 6</a></h4>
                                            <div class="product-price">
                                                <span>Rp300.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/clothes/g.png" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Fashion Set 7</a></h4>
                                            <div class="product-price">
                                                <span>Rp290.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/clothes/h.png" alt="">
                                        </a>
                                        <span class="pro-badge left bg-black">Out of stock</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Fashion Set 8</a></h4>
                                            <div class="product-price">
                                                <span>Rp410.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-2" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-8.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Sepatu Kulit Trending 1</a></h4>
                                            <div class="product-price">
                                                <span>Rp290.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-7.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Sepatu Kulit Trending 2</a></h4>
                                            <div class="product-price">
                                                <span>Rp260.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-6.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Sepatu Kulit Trending 3</a></h4>
                                            <div class="product-price">
                                                <span class="new-price">Rp270.000</span>
                                                <span class="old-price">Rp300.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-5.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Sepatu Kulit Trending 4</a></h4>
                                            <div class="product-price">
                                                <span>Rp270.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-4.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-15%</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Sepatu Kulit Trending 5</a></h4>
                                            <div class="product-price">
                                                <span class="new-price">Rp300.000</span>
                                                <span class="old-price">Rp240.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Sepatu Kulit Trending 6</a></h4>
                                            <div class="product-price">
                                                <span>Rp350.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Sepatu Kulit Trending 7</a></h4>
                                            <div class="product-price">
                                                <span>Rp390.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-1.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-black">Out of stock</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Sepatu Kulit Trending 8</a></h4>
                                            <div class="product-price">
                                                <span>Rp360.000</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="product-3" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img class="default-img" src="assets/images/product/product-4.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Norda Simple Backpack</a></h4>
                                            <div class="product-price">
                                                <span>$56.20</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Lined Brown Swearshirt</a></h4>
                                            <div class="product-price">
                                                <span>$38.50</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-2.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Black Simple Sneaker</a></h4>
                                            <div class="product-price">
                                                <span class="new-price">$46.00</span>
                                                <span class="old-price">$66.75</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Simple Black T-Shirt</a></h4>
                                            <div class="product-price">
                                                <span>$102.54</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-15%</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Basic Sneaker</a></h4>
                                            <div class="product-price">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-7.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Norda Sport Sneaker</a></h4>
                                            <div class="product-price">
                                                <span>$56.20</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-6.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Simple Blue T-Shirt</a></h4>
                                            <div class="product-price">
                                                <span>$37.86</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-5.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-black">Out of stock</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Contrasting Sunglasses</a></h4>
                                            <div class="product-price">
                                                <span>$46.20</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div id="product-4" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-6.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Simple Blue T-Shirt</a></h4>
                                            <div class="product-price">
                                                <span>$56.20</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-7.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Norda Sport Sneaker</a></h4>
                                            <div class="product-price">
                                                <span>$38.50</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-8.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-20%</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Basic Sneaker</a></h4>
                                            <div class="product-price">
                                                <span class="new-price">$46.00</span>
                                                <span class="old-price">$66.75</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-5.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Contrasting Sunglasses</a></h4>
                                            <div class="product-price">
                                                <span>$102.54</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-4.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-red">-15%</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Norda Simple Backpack</a></h4>
                                            <div class="product-price">
                                                <span class="new-price">$35.45</span>
                                                <span class="old-price">$45.80</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Lined Brown Swearshirt</a></h4>
                                            <div class="product-price">
                                                <span>$56.20</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Black Simple Sneaker</a></h4>
                                            <div class="product-price">
                                                <span>$37.86</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product-wrap mb-35">
                                    <div class="product-img product-img-zoom mb-20">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-1.jpg" alt="">
                                        </a>
                                        <span class="pro-badge left bg-black">Out of stock</span>
                                        <div class="product-action-wrap">
                                            <div class="product-action-left">
                                                <button><i class="icon-basket-loaded"></i>Tambah</button>
                                            </div>
                                            <div class="product-action-right tooltip-style">
                                                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>
                                                <button class="font-inc"><i class="icon-refresh"></i><span>Bandingkan</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-content-left">
                                            <h4><a href="product-details.html">Simple Black T-Shirt</a></h4>
                                            <div class="product-price">
                                                <span>$46.20</span>
                                            </div>
                                        </div>
                                        <div class="product-content-right tooltip-style">
                                            <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- <div class="banner-area pb-85">
            <div class="container">
                <div class="section-title mb-45">
                    <h2>Our Collections</h2>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="banner-wrap banner-mr-1 mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="assets/images/banner/banner-1.jpg" alt=""></a>
                            </div>
                            <div class="banner-content-1">
                                <h2>Zara Pattern Boxed <br>Underwear</h2>
                                <p>Stretch, fresh-cool help you alway comfortable</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-2" href="product-details.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="banner-wrap  banner-ml-1 mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="assets/images/banner/banner-2.jpg" alt=""></a>
                            </div>
                            <div class="banner-content-2">
                                <h2>Basic Color Caps</h2>
                                <p>Minimalist never cool, choose and make the simple great again!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="instagram-area">
            <div class="container">
                <div class="section-title-tag-wrap mb-45">
                    <div class="section-title">
                        <h2>Produk Kami Telah Digunakan Oleh</h2>
                    </div>
                    <div class="instagram-tag">
                        <span>#sepatukulit</span>
                    </div>
                </div>
                <div class="instagram-wrap">
                    <div id="instafeed" data-limit="5" class="instagram-wrap-1"></div>
                </div>
            </div>
        </div>
        <div class="brand-logo-area pt-100 pb-100">
            <div class="container">
                <div class="brand-logo-wrap brand-logo-mrg">
                    <div class="single-brand-logo mb-10">
                        <img src="assets/images/brand-logo/brand-logo-1.png" alt="brand-logo">
                    </div>
                    <div class="single-brand-logo mb-10">
                        <img src="assets/images/brand-logo/brand-logo-2.png" alt="brand-logo">
                    </div>
                    <div class="single-brand-logo mb-10">
                        <img src="assets/images/brand-logo/brand-logo-3.png" alt="brand-logo">
                    </div>
                    <div class="single-brand-logo mb-10">
                        <img src="assets/images/brand-logo/brand-logo-4.png" alt="brand-logo">
                    </div>
                    <div class="single-brand-logo mb-10">
                        <img src="assets/images/brand-logo/brand-logo-5.png" alt="brand-logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="subscribe-area bg-gray pt-115 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title">
                            <h2>Berlangganan Buletin</h2>
                            <p>Dapatkan pemberitahuan produk terbaru kami dengan berlangganan buletin kami.</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required="" placeholder="Masukkan Email Mu" name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Langganan">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area bg-gray pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-info-wrap">
                            <div class="footer-logo">
                                <a href="#"><img src="assets/images/logo2.png" alt="logo"></a>
                            </div>
                            <div class="single-contact-info">
                                <span>Lokasi Kami</span>
                                <p>Jl. Ir Juanda, Bandung</p>
                            </div>
                            <div class="single-contact-info">
                                <span>Nomor Telepon:</span>
                                <p>(+62) 838-5051-1110</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-right-wrap">
                            <div class="social-style-2 social-style-2-mrg">
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_facebook"></i></a>
                                <a href="#"><i class="social_googleplus"></i></a>
                                <a href="#"><i class="social_instagram"></i></a>
                                <a href="#"><i class="social_youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/images/product/product-1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/images/product/product-3.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/images/product/product-6.jpg" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/images/product/product-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active nav nav-style-6">
                                        <a class="active" data-bs-toggle="tab" href="#pro-1"><img src="assets/images/product/quickview-s1.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-2"><img src="assets/images/product/quickview-s2.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-3"><img src="assets/images/product/quickview-s3.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-4"><img src="assets/images/product/quickview-s2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Sepatu Kulit</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>4.9</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>22 Ulasan</span>
                                            <span>89 orders</span>
                                        </div>
                                    </div>
                                    <p>Sepatu kulit model terbaru dengan bahan berkualitas. Sepatu ini merupakan produk original handmage magetan.</p>
                                    <div class="pro-details-price">
                                        <span class="new-price">Rp270.000</span>
                                        <span class="old-price">Rp310.000</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <!-- <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="dolly" href="#">dolly</a></li>
                                                <li><a class="white" href="#">white</a></li>
                                                <li><a class="azalea" href="#">azalea</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">lisa</a></li>
                                                <li><a class="cupid" href="#">cupid</a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Ukuran:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">40</a></li>
                                                <li><a href="#">41</a></li>
                                                <li><a href="#">42</a></li>
                                                <li><a href="#">43</a></li>
                                                <li><a href="#">44</a></li>
                                                <li><a href="#">45</a></li>
                                                <li><a href="#">46</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Jumlah:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Kategori:</span> <a href="#">Pria,</a> <a href="#">Sepatu Kulit,</a> </li>
                                            <!-- <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a href="#">Texas</a></li> -->
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-add-to-cart">
                                            <a title="Tambah" href="#">Tambah </a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a title="Add to Bandingkan" href="#"><i class="icon-refresh"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>

    <!-- All JS is here
============================================ -->

    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-v3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramfeed.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <script src="assets/js/plugins/easyzoom.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>