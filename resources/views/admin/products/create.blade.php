@extends('layouts.app')

@section('registro')
<!-- Formulario html -->
   <div class="editCategory">
      <h3><strong>Registrar un nuevo Producto</strong></h3>
        
      @if($errors->any())
      <div>
         <ul>
            @foreach ($errors->all() as $error)
            <li>
               {{ $error }}
            </li>
            @endforeach
         </ul>
      </div>
      @endif

      <form class="contact_form" method="POST" enctype="multipart/form-data" action="{{ url('/admin/products') }}">
         {{ csrf_field() }}   
         <ul>
            <li>
               <select name="category_id"> 
                  <option value="0">General</option>
                     @foreach ($categories as $datoCategoria )
                  <option value="{{ $datoCategoria->id }}">{{ $datoCategoria->name}}</option>
                     @endforeach
               </select>    
            </li>

            <li>
               <input type="text" id="name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus placeholder="*Nombre del Producto" />
                  @if ($errors->has('name'))
               <span class="invalid-feedback">
                  <strong>{{ $errors->first('name') }}</strong>
               </span>
                  @endif      
            </li>
            
            <li>
               <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }} " name="description" value="{{ old('description') }}" required autofocus placeholder="*Resumen del producto"/>
                  @if ($errors->has('description'))
               <span class="invalid-feedback">
                  <strong>{{ $errors->first('description') }}</strong>
               </span>
                  @endif
            </li>

            <li>
               <textarea id="long_description" class="form-control{{ $errors->has('long_description') ? ' is-invalid' : '' }} category-description" rows="5" name="long_description" required placeholder="*Descripción del producto" />{{ old('long_description') }}</textarea>
                  @if ($errors->has('long_description'))
               <span class="invalid-feedback">
                  <strong>{{ $errors->first('long_description') }}</strong>
               </span>
                  @endif
            </li>
          
            <li>
               <input type="number" id="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" required placeholder="*precio" >
               @if ($errors->has('price'))
                   <span class="invalid-feedback">
                       <strong>{{ $errors->first('price') }}</strong>
                   </span>
               @endif
            </li>
            <li>
               <small>Agrega imagenes desde el editor de imagenes</small>
            </li>
               <input type="submit" name="registro" value="{{ __('Crear') }}" >
               <span><a href="{{ url('/admin/products/') }}" >Cancelar</a></span>
         </ul>
      </form>
   </div>
@endsection
