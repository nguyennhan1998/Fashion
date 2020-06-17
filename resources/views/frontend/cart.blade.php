@extends("frontend.layout")
@section("header")
    <header class="header-section header-normal">
        <div class="container-fluid">
            <!-- logo -->
            <div class="site-logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-right">
                <a href="cart.html" class="card-bag"><img src="img/icons/bag.png" alt=""><span>2</span></a>
                <a href="#" class="search"><img src="img/icons/search.png" alt=""></a>
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
@endsection
@section("content")
    <!-- Page Info -->
    <div class="page-info-section page-info">
        <div class="container">
            <div class="site-breadcrumb">
                <a href="">Home</a> /
                <a href="">Sales</a> /
                <a href="">Bags</a> /
                <span>Cart</span>
            </div>
            <img src="img/page-info-art.png" alt="" class="page-info-art">
        </div>
    </div>
    <!-- Page Info end -->


    <!-- Page -->
    <div class="page-area cart-page spad">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                    <tr>
                        <th class="product-th">Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th class="total-th">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $p)

                    <tr>
                        <td class="product-col">
                            <img src="{{$p->getImage()}}" alt="">
                            <div class="pc-title">
                                <h4>{{$p->__get("product_name")}}</h4>
                                <a href="#">Edit Product</a>
                            </div>
                        </td>
                        <td class="price-col">{{$p->getPrice()}}</td>
                        <td class="quy-col">
                            <div class="quy-input">
                                <span>Qty</span>
                                <input type="number" value="{{$p->cart_qty}}">
                            </div>
                        </td>
                        <td class="total-col">  ${{$p->cart_qty * $p->__get("price")}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row cart-buttons">
                <div class="col-lg-5 col-md-5">
                    <div class="site-btn btn-continue">Continue shooping</div>
                </div>
                <div class="col-lg-7 col-md-7 text-lg-right text-left">
                    <div class="site-btn btn-clear">Clear cart</div>
                    <div class="site-btn btn-line btn-update">Update Cart</div>
                </div>
            </div>
        </div>
        <div class="card-warp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="shipping-info">
                            <h4>Shipping method</h4>
                            <p>Select the one you want</p>
                            <div class="shipping-chooes">
                                <div class="sc-item">
                                    <input type="radio" name="sc" id="one">
                                    <label for="one">Next day delivery<span>$4.99</span></label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" name="sc" id="two">
                                    <label for="two">Standard delivery<span>$1.99</span></label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" name="sc" id="three">
                                    <label for="three">Personal Pickup<span>Free</span></label>
                                </div>
                            </div>
                            <h4>Cupon code</h4>
                            <p>Enter your cupone code</p>
                            <div class="cupon-input">
                                <input type="text">
                                <button class="site-btn">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-2 col-lg-6">
                        <div class="cart-total-details">
                            <h4>Cart total</h4>
                            <p>Final Info</p>
                            <ul class="cart-total-card">
                                <li>Subtotal<span>{{$grandTotal}}</span></li>
                                <li>Shipping<span>Free</span></li>
                                <li class="total">Total<span>{{$grandTotal}}</span></li>
                            </ul>
                            <a class="site-btn btn-full" href="checkout.html">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page end -->
@endsection
