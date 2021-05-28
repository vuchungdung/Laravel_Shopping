
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


<!-- Mirrored from demo1.cloodo.com/html/furnitica/product-grid-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:19:19 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furnitica - Minimalist Furniture HTML Template</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">


    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('client_template/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/font-material/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/nivo-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/nivo-slider/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/nivo-slider/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client_template/libs/alert/toastr.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('client_template/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('client_template/css/reponsive.css') }}">
    <!-- Pixel Code for https://leadee.ai/leadflows/ -->
</head>

<body id="product-sidebar-left" class="product-grid-sidebar-left">
    @include('publics.client-header')

    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <div class="page-home">
                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <span>Trang chủ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Danh sách sản phẩm</span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>

                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-4 col-sm-4">

                                        <!-- category menu -->
                                        @include('publics.sidebar-block')

                                        <!-- best seller -->
                                        <div class="sidebar-block">
                                            <div class="title-block">Catalog</div>
                                            <div class="new-item-content">
                                                <h3 class="title-product">categories</h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>side table</b>
                                                            <span class="quantity">(30)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>floor lamp</b>
                                                            <span class="quantity">(32)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>ottoman</b>
                                                            <span class="quantity">(67)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>armchair</b>
                                                            <span class="quantity">(15)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>ottoman</b>
                                                            <span class="quantity">(24)</span>

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>CUSHION</b>
                                                            <span class="quantity">(20)</span>

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>Pineapple</b>
                                                            <span class="quantity">(21)</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="new-item-content">
                                                <h3 class="title-product">Manufacture</h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>Samsung</b>
                                                            <span class="quantity">(30)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>Dell</b>
                                                            <span class="quantity">(30)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>Polygon</b>
                                                            <span class="quantity">(30)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>Newment</b>
                                                            <span class="quantity">(30)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>Asus</b>
                                                            <span class="quantity">(30)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>Mac</b>
                                                            <span class="quantity">(30)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>Vaio</b>
                                                            <span class="quantity">(30)</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            <b>Lettuce</b>
                                                            <span class="quantity">(30)</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tiva-filter-price new-item-content sidebar-block">
                                                <h3 class="title-product">By Price</h3>
                                                <div id="block_price_filter" class="block">
                                                    <div class="block-content">
                                                        <div id="slider-range" class="tiva-filter">
                                                            <div class="filter-itemprice-filter">
                                                                <div class="layout-slider">
                                                                    <input id="price-filter" name="price" value="0;100" />
                                                                </div>
                                                                <div class="layout-slider-settings"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sidebar-block by-color">
                                                <h3 class="title-product">By Color</h3>
                                                <div>
                                                    <span class="left">
                                                        <label class="color-item1"></label>
                                                        <a href="#">
                                                            <span>Blue
                                                                <span>(30)</span>
                                                            </span>
                                                        </a>
                                                    </span>
                                                    <span class="right">
                                                        <label class="color-item2"></label>
                                                        <a href="#">
                                                            <span>Green
                                                                <span>(30)</span>
                                                            </span>
                                                        </a>
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="left">
                                                        <label class="color-item3"></label>
                                                        <a href="#">
                                                            <span>Yellow
                                                                <span>(30)</span>
                                                            </span>
                                                        </a>
                                                    </span>
                                                    <span class="right">
                                                        <label class="color-item4"></label>
                                                        <a href="#">
                                                            <span>Brown
                                                                <span>(30)</span>
                                                            </span>
                                                        </a>
                                                    </span>

                                                </div>
                                                <div>
                                                    <span class="left">
                                                        <label class="color-item5"></label>
                                                        <a href="#">
                                                            <span>Pink
                                                                <span>(30)</span>
                                                            </span>
                                                        </a>
                                                    </span>
                                                    <span class="right">
                                                        <label class="color-item6"></label>
                                                        <a href="#">
                                                            <span>Red
                                                                <span>(30)</span>
                                                            </span>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- product tag -->
                                        <div class="sidebar-block product-tags">
                                            <div class="title-block">
                                                Product Tags
                                            </div>
                                            <div class="block-content">
                                                <ul class="listSidebarBlog list-unstyled">
                                                    <li>
                                                        <a href="#" title="Show products matching tag Hot Trend">Hot Trend</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Jewelry">Jewelry</a>
                                                    </li>

                                                    <li>
                                                        <a href="man.html" title="Show products matching tag Man">Man</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Party">Party</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag SamSung">SamSung</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Shirt Dresses">Shirt Dresses</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Shoes">Shoes</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Summer">Summer</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Sweaters">Sweaters</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Winter">Winter</a>
                                                    </li>

                                                    <li>
                                                        <a href="#" title="Show products matching tag Woman">Woman</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-8 product-container">
                                        <h1>Danh sách sản phẩm</h1>
                                        <div class="js-product-list-top firt nav-top">
                                            <div class="d-flex justify-content-around row">
                                                <div class="col col-xs-12">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#grid" data-toggle="tab" class="active show fa fa-th-large"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#list" data-toggle="tab" class="fa fa-list-ul"></a>
                                                        </li>
                                                    </ul>
                                                    <div class="hidden-sm-down total-products">
                                                        <p>There are 12 products.</p>
                                                    </div>
                                                </div>
                                                <div class="col col-xs-12">
                                                    <div class="d-flex sort-by-row justify-content-lg-end justify-content-md-end">

                                                        <div class="products-sort-order dropdown">
                                                            <select class="select-title">
                                                                <option value="">Sort by</option>
                                                                <option value="">Name, A to Z</option>
                                                                <option value="">Name, Z to A</option>
                                                                <option value="">Price, low to high</option>
                                                                <option value="">Price, high to low</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content product-items">
                                            <div id="grid" class="related tab-pane fade in active show">
                                                <div class="row">
                                                    <div class="item text-center col-md-4">
                                                        <div class="product-miniature js-product-miniature item-one first-item">
                                                            <div class="thumbnail-container border">
                                                                <a href="product-detail.html">
                                                                    <img class="img-fluid image-cover" src="img/product/1.jpg" alt="img">
                                                                    <img class="img-fluid image-secondary" src="img/product/22.jpg" alt="img">
                                                                </a>
                                                                <div class="highlighted-informations">
                                                                    <div class="variant-links">
                                                                        <a href="#" class="color beige" title="Beige"></a>
                                                                        <a href="#" class="color orange" title="Orange"></a>
                                                                        <a href="#" class="color green" title="Green"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="product-detail.html">Đồng hồ treo tường</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price">170.000 VNĐ</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-buttons d-flex justify-content-center">
                                                                    <form action="http://demo1.cloodo.com/html/furnitica/index.html" method="post" class="formAddToCart">
                                                                        <input type="hidden" name="id_product" value="1">
                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                        </a>
                                                                    </form>
                                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                    </a>
                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- pagination -->
                                        <div class="pagination">
                                            <div class="js-product-list-top ">
                                                <div class="d-flex justify-content-around row">
                                                    <div class="showing col col-xs-12">
                                                        <span>SHOWING 1-3 OF 3 ITEM(S)</span>
                                                    </div>
                                                    <div class="page-list col col-xs-12">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- end col-md-9-1 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    @include('publics.client-footer')


    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <script src="{{ asset('client_template/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('client_template/libs/popper/popper.min.js') }}"></script>
    <script src="{{ asset('client_template/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client_template/libs/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('client_template/libs/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client_template/libs/slider-range/js/tmpl.js') }}"></script>
    <script src="{{ asset('client_template/libs/slider-range/js/jquery.dependClass-0.1.js') }}"></script>
    <script src="{{ asset('client_template/libs/slider-range/js/draggable-0.1.js') }}"></script>
    <script src="{{ asset('client_template/libs/slider-range/js/jquery.slider.js') }}"></script>
    <script src="{{ asset('client_template/libs/alert/toastr.min.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('client_template/js/theme.js') }}"></script>
</body>


<!-- Mirrored from demo1.cloodo.com/html/furnitica/product-grid-sidebar-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Feb 2021 10:19:19 GMT -->
</html>