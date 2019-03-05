@extends('principal')
@section('title', 'Listar clientes')
@section('content')

			<h1>Listar Clientes</h1>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>ID</td>
					<td>Nome</td>
					<td>Ação</td>
				</tr>
			
			{{ $nome }}

			<?php
				foreach ($nomes as $key => $value){
					echo "<tr>";
						echo "<td>".$key."</td>";
						echo "<td>".$value."</td>";
						//echo "<td><a href='".action("ClientController@editar")."?id=".$key."'>Editar</a></td>";
						echo "<td><a href='".action("ClientController@editar", $key)."'><span class='glyphicon glyphicon-pencil'></span>Editar</a></td>";
						
						echo "<td><a href='".action("ClientController@editar", $key)."'><span class='glyphicon glyphicon-remove'></span>Editar</a></td>";
					echo "</tr>";
				}
			?>
			</table>
@stop