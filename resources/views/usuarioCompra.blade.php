@extends('layouts.app')
 
@section('usuarioCompra')
<div class="productos" id="productos">
    <h1>Mi Compra</h1>

            @if (session('notification')) 
                <div>{{ session('notification') }}</div>
            @endif
            
            @if (session('cartStatus')) 
                <div>{{ session('cartStatus') }}</div>
            @endif
            <p>El carrito de presenta: {{ auth()->user()->cart->details->count() }} producto/s</p>
            <table class="table tabla-categorias">
                    <tr>
                        <th>Producto</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>SubTotal</th>
                        <th>Opciones</th>
                    </tr>
                    <tbody>
                        <hr>
                        @foreach( auth()->user()->cart->details as $detail)
                         <tr>
                            <td>
                                <img src="{{ $detail->product->feature_image_url }}" height="50px" style="border-radius: 50px;">
                            </td>
                            <td>
                                <a href="{{ url('/products/'.$detail->product->id)}}" target="_blank">{{ $detail->product->name }}</a>
                            </td>
                            <td>$ {{ $detail->product->price }}.-</td>
                            <td>{{ $detail->quantity}} unidad/es</td>
                            <td>$ {{ $detail->quantity * $detail->product->price }}.-</td>
                            <td>
                                <form method="post" action="{{ url('/cart') }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                                    <button type="submit" rel="tooltip" title="eliminar Producto" >
                                        <i class="fa fa-times"> Eliminar</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
            </table>
            <p class="p-carrito"><strong>Importe a Pagar:</strong> {{ auth()->user()->cart->total }}</p> 
            <div class="importe-carrito">
            
                <form method="post" action="{{ url ('/order') }}" >
                    {{ csrf_field() }}

                    <input type="submit" rel="tooltip" name="PagarEfectivo" value="Pagar en Efectivo">
                    <input type="button" rel="tooltip" name="PagoTarjeta" value="Pagar con Tarjeta" onclick="window.location = 'https://www.mercadopago.com.ar'" target="_new">
               </form>

            </div>
</div>
@endsection