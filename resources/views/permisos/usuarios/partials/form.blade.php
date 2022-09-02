<div class="form-group col-md-12 ">
    {{ Form::label ('name','Nombre:') }}
    {{ Form::text ('name',null, ['placeholder'=>'Nombre del Usuario','class'=>'form-control']) }}
</div>

<div class="form-group col-md-12 ">
    {{ Form::label ('password','Contraseña:') }}
    {!! Form::password('password', array('class' => 'form-control')) !!}
</div>

<div class="form-group col-md-12 ">
    {{ Form::label ('confirmar-password','Confirmar Contraseña:') }}
    {!! Form::password('confirmar-password', array('class' => 'form-control')) !!}
</div>

<div class="form-group col-md-12 ">
    {{ Form::label ('email','E-mail:') }}
    {{ Form::email ('email',null, ['placeholder'=>'Correo del Usuario','class'=>'form-control']) }}
</div>


<div class="form-group col-md-12 ">
    {{ Form::label ('roles','Rol del Usuario:') }}
    {{ Form::select ('roles[]',$roles,[],array('class'=>'form-control')) }}
</div>



<div class="form-group col-md-12 ">
    {{-- {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }} --}}
    {{ Form::button('<i class="fa fa-save "></i><span> Guardar</span>', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg formulario-crear'] )  }}
</div>