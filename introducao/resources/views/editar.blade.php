@extends('principal')
@section('title', "Editar cliente")
@section('content')

		<h1>Editar Cliente - <?php echo $id;?></h1>
		<form >
			<div class="input-group input-group-lg">
				<span class="input-group-addon" id="sizing-addon1">Nome</span>
				<input type="text" clas="form-control" placeholder="Nome" aria-describedby="sizing-addon1">
			</div>
			<div class="input-group input-group-lg">
				<span class="input-group-addon" id="sizing-addon1">E-mail</span>
				<input type="text" clas="form-control" placeholder="E-mail" aria-describedby="sizing-addon1">
			</div>
			<div class="input-group input-group-lg">
				<span class="input-group-addon" id="sizing-addon1">Telefone</span>
				<input type="text" clas="form-control" placeholder="Telefone" aria-describedby="sizing-addon1">
			</div>
			
			<input type="submit" value="Cadastrar">
		</form>
		<a href="<?php  echo action("ClientController@listar2"); ?>">Listar clientes</a>
		<a href="{{ action('ClientController@listar2') }}">Listar clientes</a>
	
@stop