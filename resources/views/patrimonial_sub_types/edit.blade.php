@extends('home')

@section('content')

	<div class="page-header text-primary">
	   	<h4>
	   		<a href="{!! route('dashboard.pc_members') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Ir para Painel Controle Associados"><i class="fa fa-users"></i></a>
	   		Administração - Sub-tipos de Ativos: Alteração
	   		<div class="btn-group btn-group-sm pull-right">
          		<a href="{!! route('patrimonial_sub_types.create') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Incluir"><i class="fa fa-file-o"></i></a>
          		<a href="{!! route('patrimonial_sub_types') !!}" type="button" class="round round-sm hollow" rel="tooltip" title="Pesquisar"><i class="fa fa-search"></i></a>
        	</div>
	   		<hr class="hr-warning" />
	   	</h4>
	</div>

	{!! Form::model($patrimonial_sub_type, ['route' => ['patrimonial_sub_types.update', $patrimonial_sub_type->id], 'method' => 'put', 'class' => 'form-horizontal', 'role'=>'form']) !!}

	    @include('patrimonial_sub_types.form')

	{!! Form::close() !!}
	    
@endsection