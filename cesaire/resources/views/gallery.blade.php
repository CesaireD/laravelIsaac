@include('layouts/header')

<div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content">
                    <div class="page-header-content-inner">
                        <h1>Mes Reservations</h1>

                        <ul class="breadcrumb">
                            <li><a href="../">Accueil</a></li>
                            <li class="current"><a href="#">Mes Reservations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-content-wrapper sp-y">
    <div class="cart-page-content-wrap">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping-cart-list-area">
                        <div class="shopping-cart-table table-responsive">
                            <table class="table table-bordered text-center mb-0">
                                <thead>
                                <tr>
                                    <th>Produits</th>
                                    <th>Prix</th>
                                </tr>
                                </thead>

                                <tbody>
                                @if($lists)
                                @foreach($lists as $car)
                                    <tr>
                                        <td class="product-list">
                                            <div class="cart-product-item d-flex align-items-center">
                                                <a href="#" class="product-thumb">
                                                    <img src="cars/{{$car->photo}}" alt="Product" />
                                                </a>
                                                <a href="#" class="product-name">Metallic cotton dress</a>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="price">{{$car->prixLocation}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                @endif

                                </tbody>
                            </table>
                        </div>

                        <div class="cart-coupon-update-area d-sm-flex justify-content-between align-items-center">
                            <div class="coupon-form-wrap">
                                <form action="#" method="post">
                                    <label for="coupon" class="sr-only">Coupon Code</label>
                                    <input type="text" id="coupon" placeholder="Coupon Code" />
                                    <button class="btn-apply">Apply Button</button>
                                </form>
                            </div>

                            <div class="cart-update-buttons mt-15 mt-sm-0">
                                <button class="btn-clear-cart">Clear Cart</button>
                                <button class="btn-update-cart">Update Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="col-lg-4">

                    <div class="cart-calculate-area mt-sm-40 mt-md-60">
                        <h5 class="cal-title">Cart Totals</h5>

                        <div class="cart-cal-table table-responsive">
                            <table class="table table-borderless">
                                <tr class="cart-sub-total">
                                    <th>Subtotal</th>
                                    <td>$289.89</td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping</th>
                                    <td>
                                        <ul class="shipping-method">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="flat_shipping" name="shipping_method" class="custom-control-input" checked />
                                                    <label class="custom-control-label" for="flat_shipping">Flat Rate :
                                                        $10</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="free_shipping" name="shipping_method" class="custom-control-input" />
                                                    <label class="custom-control-label" for="free_shipping">Free
                                                        Shipping</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="cod_shipping" name="shipping_method" class="custom-control-input" />
                                                    <label class="custom-control-label" for="cod_shipping">Cash on
                                                        Delivery</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><b>$299.93</b></td>
                                </tr>
                            </table>
                        </div>

                        <div class="proceed-checkout-btn">
                            <a href="checkout.html" class="btn btn-brand d-block">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->

<!--== Start Footer Area Wrapper ==-->
@include('layouts/footer')
