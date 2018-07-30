@extends('layouts.app')
             
@section('home')
            

 <div class="productos" id="productos">
             <h1>Imagenes de Productos "{{ $product->name }}" </h1>
             <hr>
             <div class="todoslosproductos">
        

        <form method="post" action="" enctype="multipart/form-data">
            {{  csrf_field() }}
            <input type="file" name="photo" requerido>
            <button type="submit" >Subir Nueva Imagen</button>
        </form>
        
        <a href="{{ url('/admin/products') }}" class="btn btn-primary">Volver</a>

        @foreach ($images as $image)
         <div>
            <div>
                <img src="{{ $image->url }}" width="300">
                <form method="post" action="">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <input type="hidden" name="image_id" value="{{ $image->id }}">
                <button type="submit">Eliminar Imagen</button>
               @if($image->feature)
               <button tupe="button">
                    <i class="material-icons">favorita</i>
                </button>
               @else
                 <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}">
                    <i class="material-icons">favorita</i>
                </a>
               @endif
                </form>
                

            </div>
        </div>
       @endforeach
        
                               
    </div>
</div>
          
@endsection