<!doctype html>
<html lang="{{ app()->getLocale() }}">

   <head>
      <meta charset="utf-8">
      <meta lang="es">
      <meta name="author" content="DH, Coudeu, Baier, Gaab, Ojeda">
      <meta name="description" content="Huella Pet es tu Pet Shop amigo y lo mejor es que Online, no tenes que salir de tu casa, comprá lo que necesitas cuando queres.">
      <meta name="keywords" content="Huella Pet, pet shop, online, mascota, alimentos, perro">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Huella Pet</title>
       

      

      <!-- CSS del proyecto -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/huellacss.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
   </head>
<!-- Encabezado -->
   <body>
      <div class="container">
         <div class="datosarribacontacto">
            <div class="dtc">
               <img src="{{ asset('images/iconoemail.png') }}" alt="email">
               <p>ventas@huellapet.com</p>
            </div>
            <div class="dtc">
               <img src="{{ asset('images/iconowatsap.png') }}" alt="telefono">
               <p>(011)1548352738</p>
            </div>
        </div>
        <div class="encabezado" id="alturaencabezado">
            @guest 
               <div class='cont-reg-carr'>
                  <nav class='nav-reg'>
                     <ul>
                        <li><a href="{{ route('login') }}">{{ __('Ingresa') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('Registrate') }}</a></li>
                     </ul>
                  </nav>
                  <div class='carrito'>
                     <img src="{{ asset('images/carrito.png') }}" alt='carrito'><p>Carrito</p>
                  </div>
               </div>
            @else
            <div class="menuUsuario">  
               <div class="dropdown Imagen" >
                  <img src="{{ asset('images/usuario/'.Auth::user()->imagen) }}" width="50" height="50" style="border-radius: 50px; border: 2px solid white;">
               </div>   
                
               <div class="dropdown">
                  <button class="dropbtn">{{ Auth::user()->nombre }}</button>
                     <div class="dropdown-content">
                        <a href="{{ route('modificarDatos', ['id' => Auth::user()->id]) }}">Editar Datos</a>

                           @if(auth()->user()->admin)
                        <a href="{{ url('/admin/products') }}">Editar Productos</a>
                        <a href="{{ url('/admin/categories') }}">Editar Categorias</a>
                           @endif
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                     </div>
               </div>
               <div class="dropdown">
                  <button class="dropbtn">Mi Carrito</button>
                     <div class="dropdown-content">
                        <a href="{{ url('/usuarioCompra') }}">Mi Compra</a>
                        <a href="">Lista</a>
                     </div> 
               </div>
            </div>
            @endguest

            <div class="logo">
               <img src="{{ asset('images/logo.png') }}">
            </div>
            <nav class="navegadorprincipal">
               <ul>
                  <li><a href="{{ url('/home') }}">{{ __('Inicio') }}</a></li>
                  <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                  <li><a href="{{ url('/categories') }}">Tienda</a></li>
                  <li><a href="{{ url('/faqs') }}">Preguntas</a></li>
                  <li><a href="{{ url('/contacto') }}">Contacto</a></li>
               </ul>
            </nav>
            <nav class="navegadorprincipalmobile">
               <div class="dropdown">
                  <button class="dropbtn" onclick="desplegar(this)">
                     <img src="{{ asset('images/logoMenu.png') }}">
                  </button>
                  <div class="dropdown-content">
                     <a href="{{ url('/home') }}">{{ __('Inicio') }}</a>
                     <a href="{{ url('/nosotros') }}">Nosotros</a>
                     <a href="{{ url('/categories/') }}">Tienda</a>
                     <a href="{{ url('/faqs') }}">Preguntas</a>
                     <a href="{{ url('/contacto') }}">Contacto</a>
                  </div>
               </div>
            </nav>
         </div>  
      </div>
      <div>
         @yield('registro')    
      </div>
      <div>
         @yield('modificar')
      </div>
      <div>
         @yield('login')
      </div>
      <div>
         @yield('home')
      </div>
      <div>
         @yield('show')
      </div>
      <div>
         @yield('usuarioCompra')
      </div>
      <div>
         @yield('nosotros')
      </div>
      <div>
         @yield('faqs')
      </div>
      <div>
         @yield('contacto')
      </div>
    
      <div class="seguinos">
         <p class="legales2">Copy right Lorem ipsum dolor sit amet.</p>
      </div>
</body>

   <script type="text/javascript">
   function desplegar(alturaencabezado){
      var obj = document.getElementById('alturaencabezado'); 
      
      obj.style.height = "380px";
   }
   
   function contraer(alturaencabezado){
      var obj = document.getElementById('alturaencabezado'); 
      
      obj.style.height = "400px";
   }

    </script>
</html>