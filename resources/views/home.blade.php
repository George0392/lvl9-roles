@section('title','Inicio')
@show
@extends('layouts.app')
@section('css')
<link href="{{ asset('personales/css/botones.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Dashboard</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                
                                <div class="card bg-c-blue order-card">
                                    <div class="card-block">
                                        <h5>Usuarios</h5>
                                        <h2 class="text-right">
                                            <i class="fa fa-users f-left"></i>
                                            <span>{{ $cont_user }}</span>
                                        </h2>
                                        <p class="m-b-0 text-right">
                                            <a href="{{ route('usuarios.index') }}" class="text-white">Ver más...</a>
                                        </p>
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
@endsection