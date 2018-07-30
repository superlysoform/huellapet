<html>
<head>
	<title>Nuevo Contacto</title>
</head>
<body>
	<p>Nuevo Contacto desde la web</p>
	<hr>
	<u> 

		<li>
			<strong>Nombre:</strong>
			{{ $data['nombre'] }}
		</li>
		<br/>
		<li>
			<strong>Email:</strong>
			{{ $data['email'] }}
		</li>
		<br/>
		<li>
			<strong>Mensaje:</strong>
			{{ $data['mensaje'] }}
		</li>
	</u>
	<hr>
</body>
</html>