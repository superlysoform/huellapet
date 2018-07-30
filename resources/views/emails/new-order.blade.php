<html>
<head>
	<title>Nuevo Pedido</title>
</head>
<body>
	<p>Se a realizado un nuevo pedido</p>
	<p>Estos son los datos del cliente que realizo el pedido</p>
	<u> 
		<li>
			<strong>Nombre:</strong>
			{{ $user->nombre }}
		</li>
		<br/>
		<li>
			<strong>Email:</strong>
			{{ $user->email }}
		</li>
		<br/>
		<li>
			<strong>Fecha de Pedido:</strong>
			{{ $cart->order_date }}
		</li>
	</u>
	<hr>
	<p>Detalles del Pedido:</p>
	<ul>
		@foreach( $cart->details as $detalle)
		<li> {{ $detalle->product->name }} x {{ $detalle->quantity }} ($ {{ $detalle->quantity * $detalle->product->price }})</li>
		<hr>
		@endforeach
	</ul>

	<p><strong>Importe a pagar:_$</strong>{{ $cart->total}}</p>
	
	
</body>
</html>