@extends('layouts.app')

@section('show')
    <div class="productos">
        <h3>Producto Seleccionado</h3>
        <hr>
        <div class="productoSeleccionado">
            <img src="{{ $product->feature_image_url }}" alt="imagenProducto" class="imagenProducto">
                @if (session('agregoExito')) 
            <div>{{ session('agregoExito') }}</div>
                @endif
            
            <div class="productosItems">
                @foreach($imageMostrar as $muestra)
                    <img src="{{ $muestra->url }}" />
                @endforeach
            </div>

            <div class="productosDetalle">
                <h2>{{ $product->name }}</h2>
                <h4>{{ $product->category->name }}</h4>
                <h5>${{ $product->price }}</h5>
            </div>

            <div class="productosDescripcion">
                <p>{{ $product->long_description }}</p>
            </div>

                <div>
                    <form method="post" action="{{ url('/cart') }}" class="formProductos">
                        {{ csrf_field() }}
                        <div>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <h4>Ingrese la cantidad deseada:</h4>
                        </div>
                        <div>
                            <input type="number" value="1" name="quantity" style="background-color: lightyellow;">
                        </div>
                            <button type="submit" class="addProducto">Comprar</button>
                    </form>
                </div>
        </div>    
    </div>
@endsection
