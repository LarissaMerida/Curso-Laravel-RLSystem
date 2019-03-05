<html>
	<head>
		<title>Novo Cliente</title>
	</head>
	
	<body>
		<h1>Novo Cliente</h1>
		<form>
			Nome: <input type="text"><br>
			e-mail: <input type="text"><br>
			Telefone: <input type="text"><br>
			<input type="submit" value="Cadastrar">
		</form>
		<a href="<?php  echo action("ClientController@listar"); ?>">Listar clientes</a>
	
	</body>
</html>