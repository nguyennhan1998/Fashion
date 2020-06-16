@extends("frontend.layout")
@section("header")

    <!-- Header section -->
    <header class="header-section header-normal">
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
                <li><a href="/home">Home</a></li>
                <li><a href="#">Woman</a></li>
                <li><a href="#">Man</a></li>
                <li><a href="#">LookBook</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </header>
@section("content")

            </div>
            <img src="{{asset("img/categorie-page-top.png")}}" alt="" class="cata-top-pic">
        </div>
    </div>
    <!-- Page Info end -->


    <!-- Page -->
    <div class="page-area categorie-page spad">
        <div class="container">
            <div class="categorie-filter-warp">
                <p>Showing 12 results</p>
                <div class="cf-right">
                    <div class="cf-layouts">
                        <a href="#"><img src="{{asset("img/icons/layout-1.png")}}" alt=""></a>
                        <a class="active" href="#"><img src="{{asset("img/icons/layout-2.png")}}"alt=""></a>
                    </div>
                    <form action="#">
                        <select>
                            <option>Color</option>
                        </select>
                        <select>
                            <option>Brand</option>
                        </select>
                        <select>
                            <option>Sort by</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="row">
                @forelse($products as $p)
                <div class="col-lg-3">
                    <div class="product-item">
                        <figure>
                            <img src="{{$p->getImage()}}" alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="{{asset("img/icons/eye.png")}}" alt="">
                                    <p>quick view</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="{{asset("img/icons/heart.png")}}" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>{{$p->__get("product_name")}}</h6>
                            <p>{{$p->getPrice()}}</p>
                            <a href="javascript:void(0);" onclick="addToCart({{$p->__get("id")}});" class="site-btn btn-line">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                @empty
                    <p>No product found.</p>
                @endforelse
            </div>
            <div class="site-pagination">
                <span class="active">01.</span>
                <a href="">02.</a>
                <a href="">03.</a>
                <a href="">04.</a>
                <a href="">05.</a>
                <a href="">06</a>
            </div>
        </div>
    </div>
    <!-- Page -->


@endsection
