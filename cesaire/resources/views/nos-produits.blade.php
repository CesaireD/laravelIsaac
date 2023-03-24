@include('layouts/header')

<div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content">
                    <div class="page-header-content-inner">
                        <h1>Nos produits</h1>

                        <ul class="breadcrumb">
                            <li><a href="index.html">Accueil</a></li>
                            <li class="current"><a href="#">Nos produits</a></li>
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
    <div class="shop-page-action-bar mb-30">
        <div class="container container-wide">
            <div class="action-bar-inner">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="shop-layout-switcher mb-15 mb-sm-0">
                            <ul class="layout-switcher nav">
                                <li data-layout="grid" class="active"><i class="fa fa-th"></i></li>
                                <li data-layout="list"><i class="fa fa-th-list"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="sort-by-wrapper">
                            <label for="sort" class="sr-only">Sort By</label>
                            <select name="sort" id="sort">
                                <option value="sbp">Trier par popularité</option>
                                <option value="sbn">Trier par plus récent</option>
                                <option value="sbt">Trier par tendance</option>
                                <option value="sbr">Trier par note</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-page-product">
        <div class="container container-wide">
            <div class="product-wrapper product-layout layout-grid">
                <div class="row mtn-30">
                    <!-- Start Product Item -->
                    @foreach($lists as $car)
                        <div class="col-sm-6 col-lg-4 col-xl-3">
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
                                        <span class="price"><strong>Prix:</strong> &nbsp;&nbsp;{{$car->prixLocation}} FCFA</span>
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
                        </div>
                    @endforeach

                    <!-- End Product Item -->

                </div>
            </div>
        </div>
    </div>

</div>
<!--== End Page Content Wrapper ==-->

<!--== Start Footer Area Wrapper ==-->
@include('layouts/footer')
