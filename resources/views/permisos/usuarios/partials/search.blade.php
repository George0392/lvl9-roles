


{{ Form::open(['class'=>'form-inline','route' => ['usuarios.index'],'method'=>'GET','autocomplete'=>'off', 'role'=>'search']) }}
  <div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control " name="searchtext" placeholder="Buscar Usuario">
		<span class="input-group-btn ">
			<button type="submit" class="btn  btn-primary btn-lg" > <i class="fa fa-search"></i></button>
		</span>
	</div>
</div>
{{ Form::close() }}
