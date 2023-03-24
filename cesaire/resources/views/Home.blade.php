@include('layouts/header')

<!--== End Header Area ==-->

<!--== Start Slider Area Wrapper ==-->
<div class="slider-area-wrapper">
    <div class="slider-content-active">
        <div class="slider-slide-item bg-img" data-bg="assets/img/slider/slider-1.jpg">
            <div class="container container-wide h-100">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6">
                        <div class="slide-content">
                            <div class="slide-content-inner">
                                <h3>NOUVELLE TECHNOLOGIE & CONSTRUCTION</h3>
                                <h2>ROUES &amp; PNEUS <br> COLLECTIONS</h2>
                                <a class="btn btn-white" href="/nos-produits">LOUER MAINTENANT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-slide-item bg-img" data-bg="assets/img/slider/slider-2.jpg">
            <div class="container container-wide h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <div class="slide-content">
                            <div class="slide-content-inner">
                                <h3>NOUVELLE TECHNOLOGIE & CONSTRUCTION</h3>
                                <h2>ROUES &amp; PNEUS <br> COLLECTIONS</h2>
                                <a class="btn btn-white" href="/nos-produits">LOUER MAINTENANT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Slider Area Wrapper ==-->

<!--== Start Banner Area Wrapper ==-->
<div class="banner-area-wrapper banner-mt">
    <div class="container container-wide">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="banner-item">
                    <div class="banner-item__img">
                        <a href="#"><img src="assets/img/banner/banner-1.jpg" alt="Banner" height="650px"/></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="banner-item">
                    <div class="banner-item__img">
                        <a href="#"><img src="assets/img/banner/banner-2.jpg" alt="Banner" height="650px"/></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="banner-item">
                    <div class="banner-item__img">
                        <a href="#"><img src="assets/img/banner/banner-3.jpg" alt="Banner" height="650px"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Banner Area Wrapper ==-->

<!--== Start Call to Action Area ==-->
<div class="call-to-action-area sm-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <div class="call-to-action-item mt-0">
                    <div class="call-to-action-item__icon">
                        <img src="assets/img/icons/icon-1.png" alt="fast delivery">
                    </div>
                    <div class="call-to-action-item__info">
                        <h3>Livraison gratuite à domicile</h3>
                        <p>Offrir la livraison à domicile gratuite pour toute location de plus de 500000 cfa</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="call-to-action-item">
                    <div class="call-to-action-item__icon">
                        <img src="assets/img/icons/icon-2.png" alt="quality">
                    </div>
                    <div class="call-to-action-item__info">
                        <h3>Produits de qualité</h3>
                        <p>Nous garantissons la qualité de nos produits à tout moment</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="call-to-action-item">
                    <div class="call-to-action-item__icon">
                        <img src="assets/img/icons/icon-3.png" alt="return">
                    </div>
                    <div class="call-to-action-item__info">
                        <h3>Support en ligne</h3>
                        <p>Pour satisfaire nos clients, nous essayons de fournir une assistance en ligne</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Call to Action Area ==-->

<!--== Start Best Seller Products Area ==-->
<div class="best-seller-products-area sm-top">
    <div class="container container-wide">
        <div class="row">
            <div class="col-lg-5 m-auto text-center">
                <div class="section-title">
                    <h2 class="h3">MEILLEUR LOCATION</h2>
                    <p>Tous les produits les plus vendus sont maintenant disponibles pour vous et vous pouvez acheter ce produit à partir d'ici à tout moment, n'importe où, donc maintenant</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="product-wrapper">
                    <div class="product-carousel">
                        @foreach($lists as $car)
                            <!-- Start Product Item -->
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="{{route('singleproductU',['id'=>$car->id])}}">
                                        <img class="thumb-primary" src="cars/{{$car->photo}}" alt="Product" height="220px"/>
                                        <img class="thumb-secondary" src="cars/{{$car->photo}}" alt="Product" />
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="{{route('singleproductU',['id'=>$car->id])}}">{{$car->nom}}</a></h4>
                                    <span class="price"><strong>Prix:</strong>&nbsp;&nbsp;{{$car->prixLocation}} FCFA</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                            <!-- End Product Item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Best Seller Products Area ==-->

<!--== Start Call to action Wrapper ==-->
<div class="call-to-action-area">
    <div class="call-to-action-content-area bg-img" data-bg="assets/img/bg/bg-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="call-to-action-txt">
                        <h2>TOUTE MARQUE DE VEHICULE DONT   <br> VOUS AVEZ BESOIN PEUT ETRE TROUVEZ ICI</h2>
                        <a href="../nos-produits" class="btn btn-brand">EXPLORER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="call-to-action-image-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="assets/img/bg/bg-car.jpg" alt="Car" height="500px" width="700px"/><!--height="337px" width="1039px"-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Call to action Wrapper ==-->

<!--== Start Promotion Code Banner Area ==-->
<div class="promotion-code-area-wrapper sm-top">
    <div class="container container-wide">
        <div class="row">
            <div class="col-md-4">
                <div class="promotion-code-banner-item mb-sm-30">
                    <img src="assets/img/banner/18.jpg" alt="Banner" width="500px" height="500"/>
                </div>
            </div>

            <div class="col-md-4">
                <div class="promotion-code-banner-item mb-sm-30">
                    <img src="assets/img/banner/banner-5.jpg" alt="Banner" width="500px" height="500"/>
                </div>
            </div>

            <div class="col-md-4">
                <div class="promotion-code-banner-item">
                    <img src="assets/img/banner/banner-6.jpg" alt="Banner" width="500px" height="500"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Promotion Code Banner Area ==-->

<!--== Start Products Area Wrapper// Nos produits ==-->
<div class="products-area-wrapper sm-top">
    <div class="container container-wide">
        <div class="row">
            <div class="col-lg-5 m-auto text-center">
                <div class="section-title">
                    <h2 class="h3">Tous nos produits</h2>
                    <p>Tous les produits les plus vendus sont maintenant disponibles pour vous et vous pouvez acheter ce produit à partir d'ici à tout moment et n'importe où.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="product-wrapper columns-5">
                    @foreach($lists as $car)
                        <div class="col">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="{{route('singleproductU',['id'=>$car->id])}}">
                                        <img class="thumb-primary" src="cars/{{$car->photo}}" alt="Product" height="210px"/>
                                        <img class="thumb-secondary" src="cars/{{$car->photo}}" alt="Product" height="240px"/>
                                    </a>
                                </div>

                                <div class="product-item__content">
                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                    <h4 class="title"><a href="{{route('singleproductU',['id'=>$car->id])}}">{{$car->nom}}</a></h4>
                                    <span class="price"><strong>Prix:</strong>&nbsp;&nbsp;{{$car->prixLocation}} FCFA</span>
                                </div>

                                <div class="product-item__action">
                                    <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                    <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                        </div>


                        <!--<div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="product-item">
                                <div class="product-item__thumb">
                                    <a href="{{route('singleproductU',['id'=>$car->id])}}">
                                        <img class="thumb-primary" src="cars/{{$car->photo}}" alt="Produit" height="220px"/>
                                        <img class="thumb-secondary" src="cars/{{$car->photo}}" alt="Product" height="240px"/>
                                    </a>

                                    <div class="ratting">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star-half"></i></span>
                                    </div>
                                </div>

                                <div class="product-item__content">
                                    <div class="product-item__info">
                                        <h4 class="title"><a href="/single-product/{{$car->id}}">{{$car->nom}}</a></h4>
                                        <span class="price"><strong>Price:</strong> &nbsp;&nbsp;{{$car->prixLocation}} FCFA</span>
                                    </div>

                                    <div class="product-item__action">
                                        <button class="btn-add-to-cart"><i class="ion-bag"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-loop-strong"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-ios-heart-outline"></i></button>
                                        <button class="btn-add-to-cart"><i class="ion-eye"></i></button>
                                    </div>

                                    <div class="product-item__desc">
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circles</p>
                                        <p>Pursue pleasure rationally encounter consequences that are extremely painful. Nor
                                            again is there anyone who loves or pursues or desires to obtain pain of itself,
                                            because it is pain, but because occasionally circes occur in and pain can
                                            procure him some great ple cum soluta nobis est eligendi optio</p>
                                    </div>
                                </div>

                                <div class="product-item__sale">
                                    <span class="sale-txt">25%</span>
                                </div>
                            </div>
                        </div>-->
                    @endforeach

                    <!-- Start Product Item -->

                    <!-- End Product Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Products Area Wrapper ==-->

<!--== Start Flash Deals Area ==-->
<div class="flash-deals-area bg-img" data-bg="assets/img/bg/deal-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-11 m-auto">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6">
                        <div class="flash-deals-thumb text-center text-md-left">
                            <img src="assets/img/extra/wheels.jpg" alt="Deals" height="320px" width="440px"/>
                        </div>
                    </div>

                    <div class="col-md-7 col-lg-6 text-center">
                        <div class="flash-deals-content">
                            <h2>OFFRES FLASH</h2>
                            <h3>DÉPÊCHEZ-VOUS ET OBTENEZ 25 % DE RÉDUCTION</h3>
                            <a href="cart.html" class="btn btn-brand">RESERVER</a>

                            <div class="deals-countdown-area">
                                <div class="ht-countdown" data-date="4/1/2023"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Flash Deals Area ==-->

<!--== Start Newsletter Area ==-->
<div class="newsletter-area-wrapper">
    <div class="container container-wide">
        <div class="newsletter-area-inner bg-img" data-bg="assets/img/bg/newsletter-bg.jpg">
            <div class="row">
                <div class="col-lg-8 col-xl-5 m-auto">
                    <div class="newsletter-content text-center">
                        <h4>SPECIAL <span>OFFRE</span> POUR L'ABONNEMENT</h4>
                        <h2>OBTENEZ UNE RÉDUCTION INSTANTANÉE POUR L'ADHÉSION</h2>
                        <p>Abonnez-vous à notre newsletter et à toutes les dernières nouvelles de notre <br>derniers produits, promotions et offres</p>

                        <div class="newsletter-form-wrap">
                            <form action="#" method="post">
                                <div class="form-content">
                                    <input type="email" placeholder="Entrer votre email ici" />
                                    <button class="btn-newsletter">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Newsletter Area ==-->

<!--== Start Brand Logo Area Wrapper ==-->
<div class="brand-logo-area sm-top sm-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-logo-content">
                    <div class="brand-logo-item">
                        <a href="#"><img src="assets/img/brand-logo/brand-1.jpg" alt="Logo" /></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="assets/img/brand-logo/brand-2.jpg" alt="Logo" /></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="assets/img/brand-logo/brand-3.jpg" alt="Logo" /></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="assets/img/brand-logo/brand-4.jpg" alt="Logo" /></a>
                    </div>

                    <div class="brand-logo-item">
                        <a href="#"><img src="assets/img/brand-logo/brand-5.jpg" alt="Logo" /></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Brand Logo Area Wrapper ==-->

<!--== Start Footer Area Wrapper ==-->
@include('layouts/footer')
