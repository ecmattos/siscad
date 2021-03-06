@extends('home')

@section('content')
	
	<div class="page-header text-primary">
	   	<h4>
	   		<a href="{!! route('dashboard.pc_members') !!}" type="button" class="round round-sm hollow green" rel="tooltip" title="Ir para Painel Controle Associados"><i class="fa fa-users"></i></a>
	   		Fornecedores: Inclusão
	   		<div class="btn-group btn-group-sm pull-right">
          		<a href="{!! route('providers') !!}" type="button" class="round round-sm hollow" rel="tooltip" title="Pesquisar"><i class="fa fa-search"></i></a>
        	</div>
	   		<hr class="hr-warning" />
	   	</h4>
	</div>

	{!! Form::open(['route' => 'providers.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

	    @include('providers.form')

	{!! Form::close() !!}

@endsection
