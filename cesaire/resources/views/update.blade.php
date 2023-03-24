@extends('template')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index')}}">Home</a></li>
                        <li><i class="fa fa-square-o"></i>Modifier une voiture</li>
                    </ol><br>
                    <h3 class="page-header"><i class="fa fa fa-bars"></i>Modifier une voiture</h3><br>
                </div>
            </div>
            @if(session()->has('statut'))
                <p style="text-align: center; color:blue">{{session()->get('statut')}}</p>
            @endif
            <div class="panel-body" style="margin:0 auto; width:60%">
                <div class="form">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{ route('updatePost', ['id'=>$car->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-3">Nom du véhicule<span class="required">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control" id="cname" name="nom" type="text" value="{{$car->nom}}" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cmarque" class="control-label col-lg-3">Marque du véhicule<span class="required">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control " id="cmarque" type="text" name="marque" value="{{$car->marque}}" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-lg-9">
                                <img src="{{asset('cars/'.$car->photo)}}" alt="Produit" height="300px" width="400px" style="margin-left: 30%" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cimage" class="control-label col-lg-3">Image du véhicule<span class="required">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control " id="cimage" type="file" name="img" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cdescription" class="control-label col-lg-3">Description</label>
                            <div class="col-lg-9">
                                <textarea class="form-control " id="cdescription" name="description" rows="4" required value="{{$car->description}}">{{$car->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cprix" class="control-label col-lg-3">Prix de la location du véhicule <span class="required">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control" id="cprix" name="prix" type="number" value="{{$car->prixLocation}}" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cquantite" class="control-label col-lg-3">Quantité disponible</label>
                            <div class="col-lg-9">
                                <input class="form-control" id="cquaantite" name="quantite" type="number" value="{{$car->quantiteDispo}}" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-19">
                                <button class="btn btn-primary" type="submit">Modifier</button>
                                <button class="btn btn-default" type="button">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
@endsection
