@extends('template')
@section('content')
    <section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Dashboard</li>
                </ol><br>
                <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3><br>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box blue-bg">
                    <i class="fa fa-cloud-download"></i>
                    <div class="count">{{$tV}}</div>
                    <div class="title">Total des voitures</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box brown-bg">
                    <i class="fa fa-shopping-cart"></i>
                    <div class="count">{{$tE}}</div>
                    <div class="title">Voitures empruntés</div>
                </div>
                <!--/.info-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box dark-bg">
                    <i class="fa fa-thumbs-o-up"></i>
                    <div class="count">4.362</div>
                    <div class="title">Order</div>
                </div>
                <!--/.info-box-->


                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">
                        <i class="fa fa-cubes"></i>
                        <div class="count">{{$tV - $tE}}</div>
                        <div class="title">Stock</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->
            </div>
            <!--/.col-->

        </div>
        <!--/.row-->


    </section>
    <div class="text-right">
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</section>
@endsection
