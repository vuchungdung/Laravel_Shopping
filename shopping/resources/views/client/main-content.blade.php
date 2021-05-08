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
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">SIDE TABLE</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">FIREPLACE</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">FLOOR LAMP</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">OTTOMAN</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">ARMCHAIR</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">CUSHION</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">DRESSING TABLE</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">WALL CLOCK</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">BEDSIDE TABLE</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">PICTURE</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid-sidebar-left.html">WINDOW</a>
                                                    </li>
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
                                                                        <img class="img-fluid image-cover" src="/client_template/img/product/4.jpg" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/client_template/img/product/10.jpg" alt="img">
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
                                                                        <img class="img-fluid image-cover" src="/client_template/img/product/7.jpg" alt="img">
                                                                        <img class="img-fluid image-secondary" src="/client_template/img/product/14.jpg" alt="img">
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

                    
                </section>
            </div>
        </div>
    </div>
</div>