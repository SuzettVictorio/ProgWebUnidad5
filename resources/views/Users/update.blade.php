<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background-color: gray;
		}
	</style>
</head>
<body>
	<h1>
		Editar usuario
	</h1>

	<form method="post" action="{{url ('/users')}}">
		
		@csrf
		@method ('PUT')

		<input type="hidden" name="id" value="{{ $user->id }}">

		<label>
			Nombre
		</label>
		<input type="text" value="{{ $user->name }}" name="name">

		<br>
		<br>

		<label>
			Apellido
		</label>
		<input type="text" value="{{ $user->lastname }}" name="lastname">

		<br>
		<br>

		<label>
			Email
		</label>
		<input type="email" value="{{ $user->email }}" name="email">

		 

		<br>
		<br>

		<button>
			Guardar
		</button>
	</form>

</body>
</html>