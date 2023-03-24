@extends('template')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{route('index')}}">Home</a></li>
                        <li><i class="fa fa-square-o"></i>Liste des voitures diponibles</li>
                    </ol><br>
                    <h3 class="page-header"><i class="fa fa fa-bars"></i> Liste des voitures diponibles</h3><br>
                </div>
            </div>
            <div class="col-lg-12">
                <section class="panel">
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th><i class="icon_profile"></i> Nom</th>
                            <th><i class="icon_calendar"></i> Marque</th>
                            <th><i class="icon_mail_alt"></i> Description</th>
                            <th><i class="icon_pin_alt"></i> Quantité disponible</th>
                            <th><i class="icon_mobile"></i> Prix de location</th>
                            <th style="width: 100px;"><i class="icon_cogs"></i> Actions</th>
                        </tr>
                        @foreach ($lists as $list)
                            <tr>
                                <td><a href="{{route('singleproductU',['id'=>$list->id])}}">{{$list->nom}}</a></td>
                                <td>{{$list->marque}}</td>
                                <td>{{ Str::limit($list->description,60,'...') }}</td>
                                <td>{{$list->quantiteDispo}}</td>
                                <td>{{$list->prixLocation}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="{{route('update', ['id' => $list->id]) }}"><i class="icon_plus_alt2"></i></a>
                                        {{-- <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a> --}}
                                        <a class="btn btn-danger" href="{{route('delete', ['id'=> $list->id])}}"><i class="icon_close_alt2"></i></a>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
            </div>
        </section>
    </section>
@endsection
