<html>
	<head>
		<title>Editar Cliente</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
	</head>
	
	<body>
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
		<?php echo $url;?>
	</body>
</html>