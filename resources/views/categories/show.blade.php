@extends('layouts.app')

@section('show')
<div class="productos" >
    
    @if (session('agregoExito')) 
        <div>{{ session('agregoExito') }}</div>
    @endif
   <div>
         <h1>Categoria: {{ $category->name }}</h1>
    </div>
    <div>
        <h2>{{ $category->description }}</h2>
    </div>
    <hr>
        <div class="todoslosproductos">
           @foreach($dato as $datoBase) 
            <article class="product">
                <img src=" {{ $datoBase->feature_image_url }}" alt="comida para perro">
                <h2>
                    <a href="{{ url('/products/'.$datoBase->id) }}">{{ $datoBase->name }}</a>  
                </h2>
                <p>{{ $datoBase->description }}</p>
                <div class="btn-comprar">
                    <a href="{{ url('/products/'.$datoBase->id) }}">Comprar</a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
    
    <div>
        {{ $dato->links() }}
    </div>
</div>

<div>
    @include('prefinal')
</div>
@endsection

