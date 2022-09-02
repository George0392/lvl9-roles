{{-- titulo de la vista --}}
@section('title','Nuevo')
@show
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h5 class="page__heading">Nuevo Rol</h5>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card  d-flex">
                    <a href="{{ route('roles.index') }}" class="btn btn-success btn-lg ml-auto" ><i class="fa fa-arrow-left  " ></i><span> Volver</span> </a>
                    
                    <div class="card-body">
                        <h3>
                        Ingresar nuevo Rol:
                        
                        </h3>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(['class' => 'formulario-crear','route'=> 'roles.store', 'files' => true]) }}
                        @include('permisos.roles.partials.form')
                        {{ Form::close() }}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>
<script src="{{ asset('personales/js/formulario-sweetalert.js') }}"></script>
@endsection