<div class="main-content">
    <div class="wrap-banner">
        <!-- menu category -->
        <div class="container position">
            <div class="section menu-banner d-xs-none">
                <div class="tiva-verticalmenu block">
                    <div class="box-content">
                        <div class="verticalmenu" role="navigation">
                            @include('publics.category')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide show -->
        <div class="section banner">
            <div class="tiva-slideshow-wrapper">
                <div id="tiva-slideshow" class="nivoSlider">
                    <a href="#">
                        <img class="img-responsive" src="{{asset('client_template/img/home/home1-banner1.jpg')}}" title="#caption1" alt="Slideshow image">
                    </a>
                    <a href="#">
                        <img class="img-responsive" src="{{asset('client_template/img/home/home1-banner2.jpg')}}" title="#caption2" alt="Slideshow image">
                    </a>
                    <a href="#">
                        <img class="img-responsive" src="{{asset('client_template/img/home/home1-banner3.jpg')}}" title="#caption3" alt="Slideshow image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- main -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <section class="page-home">
                    <div class="container">

                        <!-- delivery form -->
                        <div class="section policy-home col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="block">
                                        <div class="block-content">
                                            <div class="policy-item">
                                                <div class="policy-content iconpolicy1">
                                                    <img src="{{asset('client_template/img/home/home1-policy.png')}}" alt="img">
                                                    <div class="policy-name mb-5">Miễn phí vận chuyển từ 2tr5</div>
                                                    <div class="policy-des">Giao hàng nhánh chóng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tiva-html col-lg-4 col-md-4">
                                    <div class="block">
                                        <div class="block-content">
                                            <div class="policy-item">
                                                <div class="policy-content iconpolicy2">
                                                    <img src="{{asset('client_template/img/home/home1-policy2.png')}}" alt="img">
                                                    <div class="policy-name mb-5">Miễn phí nắp đặt tại nhà</div>
                                                    <div class="policy-des">An toàn và chất lượng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tiva-html col-lg-4 col-md-4">
                                    <div class="block">
                                        <div class="block-content">
                                            <div class="policy-item">
                                                <div class="policy-content iconpolicy3">
                                                    <img src="{{asset('client_template/img/home/home1-policy3.png')}}" alt="img">
                                                    <div class="policy-name mb-5">Đảm bảo hoàn tiền</div>
                                                    <div class="policy-des">Khi gặp sự cố do cửa hàng</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- product living room -->
                    <div class="section living-room">
                        <div class="container">
                            <div class="tiva-row-wrap row">
                                <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                    <div class="grouptab row">
                                        <div class="categoriestab-right col-lg-3 align-items-start d-flex flex-column col-md-3 flex-3">
                                            <div class="block-title-content">
                                                <h2 class="title-block">
                                                    Phòng khách
                                                </h2>
                                            </div>
                                            <!-- <div class="btn dropdown-toggle toggle-cate-child-vertical hidden-md-up mr-auto">Select category</div> -->
                                            <div class="cate-child-vertical">
                                                <ul class="d-flex align-items-start flex-column">
                                                    @foreach($living_room as $item)
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">{{ $item-> category_name}}</a>
                                                    </li>
                                                    @endforeach


                                                    <li class="last float-right">
                                                        <a href="product-grid-sidebar-left.html">View all</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="categoriestab-left product-tab col-md-9 flex-9">
                                            <div class="title-tab-content d-flex justify-content-start">
                                                <ul class="nav nav-tabs">
                                                    <li>
                                                        <a href="#new" data-toggle="tab" class="active">Sản phẩm mới</a>
                                                    </li>
                                                    <li>
                                                        <a href="#best" data-toggle="tab">Sản phẩm khuyến mãi</a>
                                                    </li>
                                                    <li>
                                                        <a href="#sale" data-toggle="tab">Sản phẩm hot</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div id="new" class="tab-pane fade in active show">
                                                    <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                        @foreach($product_hot as $item)
                                                        <div class="item text-center">
                                                            <div class="product-miniature first-item js-product-miniature item-one">
                                                                <div class="thumbnail-container">
                                                                    <a href="/detail/{{$item->id}}">
                                                                        <img class="img-fluid image-cover" src="/images/{{$item->images}}" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/images/{{$item->images}}" alt="img">
                                                                    </a>
                                                                    <div class="product-flags discount">-30%</div>
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
                                                                            <a href="product-detail.html">{{$item->name}}</a>
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
                                                                                <span class="price">{{number_format($item->price)}} VNĐ</span>
                                                                                <!-- <del class="regular-price">£28.68</del> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="http://demo1.cloodo.com/html/furnitica/index.html" method="post" class="formAddToCart">
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
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="best">
                                                    <div class="category-product-index owl-carousel owl-theme">
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="product-detail.html">
                                                                        <img class="img-fluid image-cover" src="/client_template/img/product/4.jpg') }}" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/client_template/img/product/10.jpg') }}" alt="img">
                                                                    </a>
                                                                    <div class="product-flags discount">-30%</div>
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
                                                                            <a href="product-detail.html">Nam semper a ligula nec</a>
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
                                                                                <span class="price">£20.08</span>
                                                                                <del class="regular-price">£28.68</del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="http://demo1.cloodo.com/html/furnitica/index.html" method="post" class="formAddToCart">
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

                                                <div class="tab-pane fade" id="sale">
                                                    <div class="category-product-index owl-carousel owl-theme">
                                                        <div class="item text-center">
                                                            <div class="product-miniature js-product-miniature item-one first-item">
                                                                <div class="thumbnail-container">
                                                                    <a href="product-detail.html">
                                                                        <img class="img-fluid image-cover" src="/client_template/img/product/7.jpg') }}" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/client_template/img/product/14.jpg') }}" alt="img">
                                                                    </a>
                                                                    <div class="product-flags discount">-30%</div>
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
                                                                            <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                <span class="price">£20.08</span>
                                                                                <del class="regular-price">£28.68</del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="http://demo1.cloodo.com/html/furnitica/index.html" method="post" class="formAddToCart">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('client_template/img/home/effect1.jpg') }}" alt="banner-1" title="banner-1">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('client_template/img/home/effect2.jpg') }}" alt="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section best-sellers col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="groupproductlist">
                                        <div class="row d-flex align-items-center">
                                            <!-- column 4 -->
                                            <div class="flex-4 col-lg-4 flex-4">
                                                <h2 class="title-block">
                                                    <span class="sub-title">Danh sách khuyến mãi lớn</span>Khuyến mãi
                                                </h2>
                                                <div class="content-text">
                                                    <p> Chào mừng khách hàng đến với cửa hàng của chúng tôi. Chúc quý khách mua sắm vui vẻ!
                                                    </p>
                                                    <div>
                                                        <a href="product-grid-sidebar-left.html"> Xem thêm </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- column 8 -->
                                            <div class="block-content col-lg-8 flex-8">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active show">
                                                        <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/26.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/1.jpg') }}" alt="img">
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/25.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/2.jpg') }}" alt="img">
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/10.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/9.jpg') }}" alt="img">
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
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
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/3.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/9.jpg') }}" alt="img">
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/24.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/3.jpg') }}" alt="img">
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
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
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/23.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/4.jpg') }}" alt="img">
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section kitchen">
                        <div class="living-room">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                    <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                        <div class="grouptab row">
                                            <!-- column 3 -->
                                            <div class="categoriestab-right col-lg-3 align-items-start d-flex flex-column col-md-3 flex-3">
                                                <div class="block-title-content">
                                                    <h2 class="title-block">
                                                        Phòng bếp
                                                    </h2>
                                                </div>
                                                <div class="cate-child-vertical">
                                                    <ul class="d-flex align-items-start flex-column">
                                                        @foreach($kitchen_room as $item)
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">{{ $item-> category_name}}</a>
                                                        </li>
                                                        @endforeach
                                                        <li class="last float-right">
                                                            <a href="product-grid-sidebar-left.html">Xem thêm</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- column 9 -->
                                            <div class="categoriestab-left product-tab col-md-9 flex-9">
                                                <div class="title-tab-content d-flex justify-content-start">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#new_kitchen" data-toggle="tab" class="active">Sản phẩm mới</a>
                                                        </li>
                                                        <li>
                                                            <a href="#best_kitchen" data-toggle="tab">Sản phẩm khuyến mãi</a>
                                                        </li>
                                                        <li>
                                                            <a href="#sale_kitchen" data-toggle="tab">Sản phẩm hot</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <!-- new kitchen -->
                                                    <div id="new_kitchen" class="tab-pane fade in active show">
                                                        <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/6.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/4.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/10.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/11.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/16.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/14.jpg') }}" alt="img">
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                    <span class="price">£20.08</span>
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

                                                    <!-- best kitchen -->
                                                    <div id="best_kitchen" class="tab-pane fade">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/8.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/13.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/4.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/12.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/13.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/6.jpg') }}" alt="img">
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                    <span class="price">£20.08</span>
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

                                                    <!-- sale kitchen -->
                                                    <div id="sale_kitchen" class="tab-pane fade">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/10.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/8.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/11.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/14.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-20%</div>
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="{{ asset('client_template/img/product/6.jpg') }}" alt="img">
                                                                            <img class="img-fluid image-secondary" src="{{ asset('client_template/img/product/16.jpg') }}" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-20%</div>
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
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
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
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- banner -->
                    <div class="container">
                        <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('client_template/img/home/effect3.jpg') }}" alt="banner-1" title="banner-1">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('client_template/img/home/effect4.jpg') }}" alt="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- testimonial -->
                        <div class="section testimonial-block col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 ">

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SHOP THE LOOK -->
                    <div class="section spacing-10 groupbanner-special ">
                        <div class="title-block">
                            <span class="sub-title">shop the lookbook</span>
                            <span>SHOP THE LOOK</span>
                            <span>Our Lookbook 2018
                                <br> hand-picked arrivals from
                                <br>the best designer</span>
                        </div>

                        <div class="row">
                            <div class="tiva-lookbook default col-lg-6 col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="items col-lg-12 col-sm-12 col-xs-12">
                                        <div class="tiva-content-lookbook">
                                            <img class="img-fluid img-responsive" src="{{ asset('client_template/img/home/home1-tolltip1.jpg') }}" alt="lookbook">

                                            <div class="item-lookbook item1">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/home/icon-tolltip2.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Lorem ipsum dolor</a>
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
                                                            <div class="item-price">
                                                                £52.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item2">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/home/icon-tolltip1.jpg') }}" alt="contrary-to-popular-belief">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Sed vel malesuada lorem</a>
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
                                                            <div class="item-price">
                                                                £68.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Lookbooks -->
                            <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="items col-lg-12 col-sm-12 col-xs-12">
                                        <div class="tiva-content-lookbook">
                                            <img class="img-fluid img-responsive" src="{{ asset('client_template/img/home/home1-tolltip2.jpg') }}" alt="lookbook">

                                            <div class="item-lookbook item3">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/product/34.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Lorem ipsum dolor sit</a>
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
                                                            <div class="item-price">
                                                                £45.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item4">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/home/icon-tolltip6.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Lorem ipsum dolor</a>
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
                                                            <div class="item-price">
                                                                £21.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item5">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/home/icon-tolltip4.jpg') }}" alt="mug-the-adventure-begins">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Sed vel malesuada lorem</a>
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
                                                            <div class="item-price">
                                                                £11.90
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-lookbook">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Lookbooks -->
                            <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="items col-lg-12 col-sm-12 col-xs-12">
                                        <div class="tiva-content-lookbook">
                                            <img class="img-fluid img-responsive" src="{{ asset('client_template/img/home/home1-tolltip3.jpg') }}" alt="lookbook">

                                            <div class="item-lookbook item6">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/home/icon-tolltip4.jpg') }}" alt="mug-the-adventure-begins">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Sed vel malesuada lorem</a>
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
                                                            <div class="item-price">
                                                                £11.90
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item7">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/product/13.jpg') }}" alt="brown-bear-vector-graphics">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Orci varius natoque penatibus</a>
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
                                                            <div class="item-price">
                                                                £9.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item8">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/home/icon-tolltip6.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Etiam congue nisl nec</a>
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
                                                            <div class="item-price">
                                                                £16.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info-lookbook">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Lookbooks -->
                            <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                <div class="row">
                                    <div class="items col-lg-12 col-sm-12 col-xs-12">
                                        <div class="tiva-content-lookbook">
                                            <img class="img-fluid img-responsive" src="{{ asset('client_template/img/home/home1-tolltip4.jpg') }}" alt="lookbook">

                                            <div class="item-lookbook item9">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/home/icon-tolltip10.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
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
                                                            <div class="item-price">
                                                                £41.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item10">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/home/icon-tolltip8.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Donec accumsan lectus ut</a>
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
                                                            <div class="item-price">
                                                                £11.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item-lookbook item11">
                                                <span class="number-lookbook">+</span>
                                                <div class="content-lookbook">
                                                    <div class="main-lookbook  d-flex align-items-center">
                                                        <div class="item-thumb">
                                                            <a href="product-detail.html">
                                                                <img src="{{ asset('client_template/img/home/icon-tolltip9.jpg') }}" alt="lorem-ipsum-dolor-sit-amet">
                                                            </a>
                                                        </div>
                                                        <div class="content-bottom">
                                                            <div class="item-title">
                                                                <a href="product-detail.html">Fusce quis felis libero</a>
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
                                                            <div class="item-price">
                                                                £11.00
                                                            </div>
                                                            <div class="readmore">
                                                                <a href="product-detail.html">View More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="info-lookbook">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- recent posts -->
                    <div class="container">
                        <div class="section recent-post">
                            <div class="title-block">RECENT POST</div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item-post">
                                        <div class="thumbnail-img">
                                            <a href="blog-detail.html">
                                                <img src="{{ asset('client_template/img/home/home1-post1.jpg') }}" alt="img">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-info">
                                                <span class="comment">
                                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                    <span>0 Comments</span>
                                                </span>
                                                <span class="datetime">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <span>April 12, 2018</span>
                                                </span>
                                            </div>
                                            <div class="post-title">
                                                <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                            </div>
                                            <div class="post-desc">
                                                Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item-post">
                                        <div class="thumbnail-img">
                                            <a href="blog-detail.html">
                                                <img src="{{ asset('client_template/img/home/home1-post2.jpg') }}" alt="img">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-info">
                                                <span class="comment">
                                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                    <span>0 Comments</span>
                                                </span>
                                                <span class="datetime">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <span>April 12, 2018</span>
                                                </span>
                                            </div>
                                            <div class="post-title">
                                                <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                            </div>
                                            <div class="post-desc">
                                                Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item-post">
                                        <div class="thumbnail-img">
                                            <a href="blog-detail.html">
                                                <img src="{{ asset('client_template/img/home/home1-post3.jpg') }}" alt="img">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-info">
                                                <span class="comment">
                                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                    <span>0 Comments</span>
                                                </span>
                                                <span class="datetime">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <span>April 12, 2018</span>
                                                </span>
                                            </div>
                                            <div class="post-title">
                                                <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                            </div>
                                            <div class="post-desc">
                                                Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- partner -->
                        <div class="section introduct-logo">
                            <div class="row">
                                <div class="tiva-manufacture  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="block">
                                        <div id="manufacture" class="owl-carousel owl-theme owl-loaded owl-drag">
                                            <div class="item">
                                                <div class="logo-manu">
                                                    <a href="#" title="view products">
                                                        <img class="img-fluid" src="{{ asset('client_template/img/home/icon-logo1.jpg') }}" alt="img" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="logo-manu">
                                                    <a href="#" title="view products">
                                                        <img class="img-fluid" src="{{ asset('client_template/img/home/icon-logo2.jpg') }}" alt="img" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="logo-manu">
                                                    <a href="#" title="view products">
                                                        <img class="img-fluid" src="{{ asset('client_template/img/home/icon-logo3.jpg') }}" alt="img" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="logo-manu">
                                                    <a href="#" title="view products">
                                                        <img class="img-fluid" src="{{ asset('client_template/img/home/icon-logo4.jpg') }}" alt="img" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="logo-manu">
                                                    <a href="#" title="view products">
                                                        <img class="img-fluid" src="{{ asset('client_template/img/home/icon-logo5.jpg') }}" alt="img" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="logo-manu">
                                                    <a href="#" title="view products">
                                                        <img class="img-fluid" src="{{ asset('client_template/img/home/icon-logo6.jpg') }}" alt="img" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>