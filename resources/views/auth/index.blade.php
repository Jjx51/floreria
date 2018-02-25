@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')
	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            	<div class="panel panel-default">
                	<div class="panel-heading text-center">Panel De Usuarios</div>
                	<div class="panel-body">
                            
                    	<div class="table-responsive">                          
	                    	<table class="table table-striped table-bordered table-hover ">
	                    		<tr>
	                          		<th class="text-center">Nombre</th>
	                          		<th class="text-center">Usuario</th>
	                          		<th class="text-center">Correo</th>
	                          		<th class="text-center">Acciones</th>
	                        	</tr>
		                        @foreach($users as $user)            
			                        <tr>
			                          <td> {{ $user->name }} </td>
			                          <td> {{ $user->username }}</td>
			                          <td> {{ $user->email }}</td>
			                          <td>
			                            <div class="col-lg-6 col-md-6 col-sm-6 margen-inferior0">
			                            	<a class="btn btn-default btn-block btn-sm" href="#" role="button">Editar</a>
			                            </div>
			                            <div class="col-lg-6 col-md-6 col-sm-6">
			                            	<a class="btn btn-default btn-block btn-sm" href="#" role="button">Eliminar</a>
			                            </div>
			                          </td>
			                        </tr>
		                        @endforeach
	                      </table>
                    	</div>
                	</div>                                 
              	</div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

@endsection