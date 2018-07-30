@extends('layouts.app')

@section('show')

    
    @if (session('agregoExito')) 
        <div>{{ session('agregoExito') }}</div>
    @endif
   
   <div class="tiendaheader">
        <input type="checkbox" id="check">
        <label for="check" class="icon-menu"><h1>Categorias</h1></label>
      
  </div>
        <nav class="menu">
           <ul>
           @foreach($mostrar as $datoBase) 
          <li>
            <a class="btn-comprar" href="{{ url('/categories/'.$datoBase->id) }}">{{ $datoBase->name }}</a>
          </li>
           </ul>  
            @endforeach
  </nav>
<div class="article">
   <h2>Todas las ofertas en Huella PET<h2>
  <p>Tenemos de todo para tu mascota</p>
</div>
<div class="productos" >
        <div class="todoslosproductos">
            @foreach($dato as $datoBase) 
                <article class="product">
                    <img src=" {{ $datoBase->feature_image_url }}" alt="comida para perro">
                    <h2><a href="{{ url('/products/'.$datoBase->id) }}">{{ $datoBase->name }}</a></h2>
                    <p>{{ $datoBase->description }}</p>
                    <div class="btn-comprar">
                        <a href="{{ url('/products/'.$datoBase->id) }}">Comprar</a>
                    </div>
                </article>
            @endforeach
        </div>
       
</div>
<br>
<br>   
<br>
   
</div>
  <div>
      {{ $dato->links() }}
  </div>
  <hr>  
<div>
    @include('prefinal')
</div>
@endsection

