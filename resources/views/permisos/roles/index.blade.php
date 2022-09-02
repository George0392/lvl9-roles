{{-- titulo de la vista --}}
@section('title','Roles')
@show
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h5 class="page__heading">Roles</h5>
    </div>
    <div class="section-body">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body d-flex">

                        
                        @include('permisos.roles.partials.search')
                        @can('crear-rol')
                        <a href="{{ route('roles.create') }}" class="btn btn-primary ml-auto" ><i class="fa fa-plus " ></i><span></span> Nuevo </a>
                        @endcan
                    </div>
                    <table  class="table table-hover table-striped">
                        <thead class="bg-primary text-white">
                            
                            <tr>
                            <th  class  ="text-center text-white" >#</th>
                            <th  class  ="text-center text-white" >Nombre</th>
                            <th  class="text-center text-white"  >Acciones</th>
                        </tr>
  
                    </thead>
                    <tbody>
                        @foreach($roles as $user )
                        <tr >
                            <td  class="text-center" >
                                {{ $user->id }}
                            </td>
                            <td  class="text-center" >
                                <strong>{{ $user->name }}</strong>
                            </td>
                            
                            <td class="text-center" >
                                @include('permisos.roles.partials.actions')
                            </td>
                        </tr>
                        @endforeach
                        <tfoot class="bg-primary">
                        <tr>
                            <th  class  ="text-center text-white" >#</th>
                            <th  class  ="text-center text-white" >Nombre</th>
                            <th  class="text-center text-white"  >Acciones</th>
                        </tr>
                        </tfoot>
                    </tbody>
                    
                </table>
                <div class=" pagination justify-content-center ">
                    {!! $roles->links() !!}
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