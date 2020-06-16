@extends("frontend.layout")
@section("header")
    <!-- Header section -->
    <header class="header-section">
        <div class="container-fluid">
            <!-- logo -->
            <div class="site-logo">
                <img src="{{asset("img/logo.png")}}" alt="logo">
            </div>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-right">
                <a href="cart.html" class="card-bag"><img src="{{asset("img/icons/bag.png")}}" alt=""><span>2</span></a>
                <a href="#" class="search"><img src="{{asset("img/icons/search.png")}}" alt=""></a>
            </div>
            <!-- site menu -->
            <ul class="main-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Woman</a></li>
                <li><a href="#">Man</a></li>
                <li><a href="#">LookBook</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- Header section end -->
@endsection
@section("content")
    <!-- Hero section -->
    <section class="hero-section set-bg" data-setbg="img/bg.jpg">
        <div class="hero-slider owl-carousel">
            <div class="hs-item">
                <div class="hs-left"><img src="img/slider-img.png" alt=""></div>
                <div class="hs-right">
                    <div class="hs-content">
                        <div class="price">from $19.90</div>
                        <h2><span>2018</span> <br>summer collection</h2>
                        <a href="" class="site-btn">Shop NOW!</a>
                    </div>
                </div>
            </div>
            <div class="hs-item">
                <div class="hs-left"><img src="img/slider-img.png" alt=""></div>
                <div class="hs-right">
                    <div class="hs-content">
                        <div class="price">from $19.90</div>
                        <h2><span>2018</span> <br>summer collection</h2>
                        <a href="" class="site-btn">Shop NOW!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Intro section -->
    <section class="intro-section spad pb-0">
        <div class="section-title">
            <h2>pemium products</h2>
            <p>We recommend</p>
        </div>
        <div class="intro-slider">
            <ul class="slidee">
                <li>
                    <div class="intro-item">
                        <figure>
                            <img src="img/intro/1.jpg" alt="#">
                        </figure>
                        <div class="product-info">
                            <h5>Pink Sunglasses</h5>
                            <p>$319.50</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="intro-item">
                        <figure>
                            <img src="img/intro/2.jpg" alt="#">
                        </figure>
                        <div class="product-info">
                            <h5>Black Nighty</h5>
                            <p>$319.50</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="intro-item">
                        <figure>
                            <img src="img/intro/3.jpg" alt="#">
                            <div class="bache">NEW</div>
                        </figure>
                        <div class="product-info">
                            <h5>Yellow Sholder bag</h5>
                            <p>$319.50</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="intro-item">
                        <figure>
                            <img src="img/intro/4.jpg" alt="#">
                        </figure>
                        <div class="product-info">
                            <h5>Yellow Sunglasses</h5>
                            <p>$319.50</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="intro-item">
                        <figure>
                            <img src="img/intro/5.jpg" alt="#">
                        </figure>
                        <div class="product-info">
                            <h5>Black Sholder bag</h5>
                            <p>$319.50</p>
                            <a href="#" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="scrollbar">
                <div class="handle">
                    <div class="mousearea"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro section end -->


    <!-- Featured section -->
    <div class="featured-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="featured-item">
                        <img src="img/featured/featured-1.jpg" alt="">
                        <a href="#" class="site-btn">see more</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-item mb-0">
                        <img src="img/featured/featured-2.jpg" alt="">
                        <a href="#" class="site-btn">see more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured section end -->


    <!-- Product section -->
    <section class="product-section spad">
        <div class="container">
            <ul class="product-filter controls">
                <li class="control" data-filter=".new">New arrivals</li>
                <li class="control" data-filter="all">Recommended</li>
                <li class="control" data-filter=".best">Best sellers</li>
            </ul>
            <div class="row" id="product-filter">
                @foreach($most_views as $m)
                    <div class="mix col-lg-3 col-md-6 best">
                        <div class="product-item">
                            <figure>
                                <img src="{{asset($m->getImage())}}" alt="">
                                <div class="pi-meta">
                                    <div class="pi-m-left">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </div>
                                    <div class="pi-m-right">
                                        <img src="img/icons/heart.png" alt="">
                                        <p>save</p>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h6>{{$m->__get("product_name")}}</h6>
                                <p>{{$m->getPrice()}}</p>
                                <a href="javascript:void(0);" onclick="addToCart({{$m->__get("id")}});" class="site-btn btn-line">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($lastest_1 as $l)
                    <div class="mix col-lg-3 col-md-6 new">
                        <div class="product-item">
                            <figure>
                                <img src="{{asset($l->getImage())}}" alt="">
                                <div class="bache">NEW</div>
                                <div class="pi-meta">
                                    <div class="pi-m-left">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </div>
                                    <div class="pi-m-right">
                                        <img src="img/icons/heart.png" alt="">
                                        <p>save</p>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h6>{{$l->__get("product_name)")}}</h6>
                                <p>{{$l->getPrice()}}</p>
                                <a href="javascript:void(0);" onclick="addToCart({{$l->__get("id")}});" class="site-btn btn-line">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($featureds as $f)
                    <div class="mix col-lg-3 col-md-6 new best">
                        <div class="product-item">
                            <figure>
                                <img src="{{asset($f->getImage())}}" alt="">
                                <div class="bache sale">SALE</div>
                                <div class="pi-meta">
                                    <div class="pi-m-left">
                                        <img src="img/icons/eye.png" alt="">
                                        <p>quick view</p>
                                    </div>
                                    <div class="pi-m-right">
                                        <img src="img/icons/heart.png" alt="">
                                        <p>save</p>
                                    </div>
                                </div>
                            </figure>
                            <div class="product-info">
                                <h6>{{$f->__get("product_name")}}</h6>
                                <p> {{$f->getPrice()}}</span></p>
                                <a href="javascript:void(0);" onclick="addToCart({{$f->__get("id")}});" class="site-btn btn-line">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="product-item">
                    <figure>
                        <img src="img/products/8.jpg" alt="">
                        <div class="pi-meta">
                            <div class="pi-m-left">
                                <img src="img/icons/eye.png" alt="">
                                <p>quick view</p>
                            </div>
                            <div class="pi-m-right">
                                <img src="img/icons/heart.png" alt="">
                                <p>save</p>
                            </div>
                        </div>
                    </figure>
                    <div class="product-info">
                        <h6>Denim men shirt</h6>
                        <p>$32.20 <span>RRP 64.40</span></p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Product section end -->


    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="featured-item">
                        <img src="img/featured/featured-3.jpg" alt="">
                        <a href="#" class="site-btn">see more</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h4 class="bgs-title">from the blog</h4>
                    <div class="blog-item">
                        <div class="bi-thumb">
                            <img src="img/blog-thumb/1.jpg" alt="">
                        </div>
                        <div class="bi-content">
                            <h5>10 tips to dress like a queen</h5>
                            <div class="bi-meta">July 02, 2018 | By maria deloreen</div>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-thumb">
                            <img src="img/blog-thumb/2.jpg" alt="">
                        </div>
                        <div class="bi-content">
                            <h5>Fashion Outlet products</h5>
                            <div class="bi-meta">July 02, 2018 | By Jessica Smith</div>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="bi-thumb">
                            <img src="img/blog-thumb/3.jpg" alt="">
                        </div>
                        <div class="bi-content">
                            <h5>the little black dress just for you</h5>
                            <div class="bi-meta">July 02, 2018 | By maria deloreen</div>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->
@endsection
