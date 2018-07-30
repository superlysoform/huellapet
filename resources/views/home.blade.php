@extends('layouts.app')
 
@section('home')
  <div class="contenedorbanner" onclick="contraer(this)">
      <div class="banner">
          <img src="{{ asset('images/carrusel.png') }}" alt="mascotas">
          <img src="{{ asset('images/promouno.png') }}" alt="mascotas">
          <img src="{{ asset('images/promodos.png') }}" alt="mascotas">
      </div>
  </div>
  <div class="searchBar">
      <form method="get" action="{{url('/search')}}" class="formBar">
          <input type="text" placeholder="Busca el producto que necesitas" name="pregunta">
          <button type="submit" class="searchIcon"><i class="fa fa-search"></i></button>
      </form>
  </div>
  <div class="productos" id="productos">
        <h1>PRODUCTOS DEL MES</h1>
            <hr>
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
    <div>
      {{ $dato->links() }}
    </div>
    <div>
      @include('prefinal')
    </div>
@endsection

<script src="http://code.jquery.com/jquery-1.9.1.min.js" ></script>
<script src="{{ asset('js/jquery.slides.js') }}" ></script>
<script>
    $(function(){
  $(".banner").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
</script>
